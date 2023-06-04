<?php require_once "../vista/estructura/superior.php"?>

<link rel="stylesheet" href="../complementos/css/mostrar.css">

<section class="container-content">

      <section class="content-cabecera">
        <h3 class="cabecera-title">Afiliados</h3>

      </section>

    <form class="input-group mb-3" style="width: 500px;" action="" method="GET">
      <input type="text" class="form-control" placeholder="Buscar nombre" name="palabra" aria-label="Recipient's username" aria-describedby="button-addon2">
      <input class="btn bg-warning" type="submit" name="buscar" id="button-addon2" value="Buscar">
    </form>
    <script>
      document.getElementById('button-addon2').click;
    </script>

      <section class="content-form">

      <table class="table">
        <thead class="title">
          <tr>
            <th class="col">#</th>
            <th class="col">Nombre</th>
            <th class="col">Apellidos</th>
            <th class="col">Celular</th>
            <th class="col">Medidor</th>
            <th class="col">Deuda</th>
            <th class="col">Cobrar</th>
          </tr>
        </thead>
        <tbody class="content">
        <?php

          require_once "../modelo/bd.php";
          $query2 = mysqli_query($conexion, "SELECT * FROM afiliado ORDER BY id DESC");
          $mostrar = $query2;

          if(isset($_GET['buscar'])){
            $keywords = $_GET['palabra'];
            $query = mysqli_query($conexion, "SELECT * FROM afiliado WHERE nombre LIKE '%$keywords%' ORDER BY id DESC");
            $mostrar = $query;
          }
            while ($data = mysqli_fetch_assoc($mostrar)) {
              $id = $data['medidor'];
              $query2 = mysqli_query($conexion, "SELECT * FROM `medidor` WHERE id = '$id'");
              $medidor = mysqli_fetch_assoc($query2);
              ?>
          <tr>
            <td class="col"><?php echo $data['id']; ?></td>
            <td class="col"><div class="overflow"><?php echo $data['nombre']; ?></div></td>
            <td class="col"><div class="overflow"><?php echo $data['materno']; ?> <?php echo $data['paterno']; ?></div></td>
            <td class="col"><?php echo $data['telefono']; ?></td>
            <td class="col"><div class="overflow"><?php echo $medidor['codigo']; ?></div></td>
            <td class="col"><?php echo $medidor['deuda']; ?></td>
            <td class="col">
              <!-- <button class="btn bg-warning">Ver</button>
              <button class="btn bg-success">Editar</button> -->
              <form  method="POST" action="cobrar.php?id=<?php echo $data['id']; ?>">
              <button class="btn bg-success">Cobrar</button>
              </form>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>

    </section>

  </section>

<?php require_once "../vista/estructura/inferior.php"?>