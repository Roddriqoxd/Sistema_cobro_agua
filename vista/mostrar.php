<?php require_once "../vista/estructura/superior.php"?>

<link rel="stylesheet" href="../complementos/css/mostrar.css">

<section class="container-content">
    <section class="content-cabecera">
        <h3 class="cabecera-title">AFILIADOS</h3>
        <section class="temas">
            <i id="dark" class="fa-solid fa-moon"></i>
            <i id="claro" class="fa-solid fa-sun"></i>
        </section>
    </section>
    <hr>

    <section class="content-body">

        <form class="buscador" action="" method="GET">
            <input type="text" class="buscar" placeholder="Buscar nombre" name="palabra">
            <input class="lupa" type="submit" id="buscar" name="buscar" value="Buscar">

        </form>
        <script>
        document.getElementById('button-addon2').click;
        </script>

        <table class="tabla">
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
              $medidor = mysqli_fetch_assoc($query2);?>
                <tr>
                    <td class="col"><?php echo $data['id']; ?></td>
                    <td class="col">
                        <div class="overflow"><?php echo $data['nombre']; ?></div>
                    </td>
                    <td class="col">
                        <div class="overflow"><?php echo $data['materno']; ?> <?php echo $data['paterno']; ?></div>
                    </td>
                    <td class="col"><?php echo $data['telefono']; ?></td>
                    <td class="col">
                        <div class="overflow"><?php echo $medidor['codigo']; ?></div>
                    </td>
                    <td class="col"><?php echo $medidor['deuda']; ?></td>
                    <td class="col">

                        <form method="POST" action="cobrar.php?id=<?php echo $data['id']; ?>">
                            <button class="btn bg-success">Cobrar</button>
                        </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </section>

</section>
<script defer>
    function color() {

        var tema = localStorage.getItem("tema");

        switch (tema) {
            case "dark":
                $("body").addClass("bg-dark");
                $("body").addClass("text");
                $(".buscar").addClass("blanco");
                $(".lupa").addClass("blanco");
                $(".title").removeClass("blanco");
                break;

            case "claro":
                $("body").removeClass("bg-dark");
                $("body").removeClass("text");
                $(".title").addClass("blanco");
                $(".buscar").removeClass("blanco");
                $(".lupa").removeClass("blanco");
                break;
        }

    }

    color();

    $("#dark").click(function() {
        localStorage.setItem("tema", "dark");
        color();
    })

    $("#claro").click(function() {
        localStorage.setItem("tema", "claro");
        color();
    })

    </script>
<?php require_once "../vista/estructura/inferior.php"?>