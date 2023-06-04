<?php require_once "../vista/estructura/superior.php";

if (isset($_GET)) {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
            require_once "../modelo/bd.php";
            $query = mysqli_query($conexion, "SELECT * FROM afiliado WHERE id = $id");
        }
    }
?>
<link rel="stylesheet" href="../complementos/css/agregar.css">

<section class="container-content">
<?php
  while ($data = mysqli_fetch_assoc($query)) {
    $id = $data['medidor'];
    $query2 = mysqli_query($conexion, "SELECT * FROM `medidor` WHERE id = '$id'");
    $medidor = mysqli_fetch_assoc($query2);
    ?>
      <section class="content-cabecera">
        <h3 class="cabecera-title"><?php echo $data['nombre']; ?> <?php echo $data['paterno']; ?></h3>
        <hr>
      </section>
        
        <form class="form-data" action="../modelo/mostrar.php" method="POST">

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: blod;">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $data['nombre']; ?> <?php echo $data['paterno']; ?> <?php echo $data['materno']; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: blod;">Telefono</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $data['telefono']; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: blod;">Medidor</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $medidor['codigo']; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: blod;">Deuda total</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $medidor['deuda'];?> Bs.">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: blod;">Cancelar</label>
                <div class="col-sm-10">
                <input type="range"  onchange="obtener_cambio()" class="form-range" min="0" max= "<?php echo $medidor['deuda']; ?>" step="15" id="rango">
                <input readonly for="staticEmail" class="form-control-plaintext" id="resultado" value="0" name="monto_pagar">
                <!-- <label>Bs.</label> -->
                <script>

                    document.getElementById('rango').value = 0;

                    function obtener_cambio() {
                        document.getElementById('resultado').value = document.getElementById('rango').value;
                    }
                </script>
                </div>
            </div>
            <input type="hidden" name="tipo" value="pagar">
            <input type="hidden" name="medidor" value="<?php echo $medidor['id']; ?>">
            <button type="submit" class="btn btn-outline-dark">Guardar cambios</button>

        </form>

      </section>
      <?php } ?>

    </section>

<?php require_once "../vista/estructura/inferior.php"?>