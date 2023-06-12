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
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: blod;">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $data['nombre']; ?> <?php echo $data['paterno']; ?> <?php echo $data['materno']; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: blod;">Telefono:</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $data['telefono']; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: blod;">Medidor:</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $medidor['codigo']; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: blod;">Deuda total:</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" name="total" id="total" value="<?php echo $medidor['deuda'];?>">
                </div>
            </div>
            <?php
                $query = mysqli_query($conexion, "SELECT * FROM precio");
                while ($data = mysqli_fetch_assoc($query)) {
              ?>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: blod;">Cancelar:</label>
                <div class="col-sm-10">
                <input type="range" onchange="obtener_cambio()" class="form-range" min="0" max="<?php echo $medidor['deuda']?>" step="<?php echo $data['agua']?>" id="rango">
                <div class="col-1" style="display:flex">
                <input readonly for="staticEmail" class="form-control-plaintext" name="resultado" id="resultado" value="0">
                <label style="margin-top: 9px" class="form-label">Bs.</label>
                </div>
                <?php } ?>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-0" name="otro" id="otro" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                <label class="px-4" for="floatingInput">Otro monto:</label>
            </div>

            <input type="hidden" name="tipo" value="pagar">
            <input type="hidden" name="medidor" value="<?php echo $medidor['id']; ?>">
            <button class="btn btn-success" onclick="enviar()">Guardar cambios</button>

            <script>

                document.getElementById('rango').value = 0;

                function obtener_cambio() {

                     document.getElementById('resultado').value = document.getElementById('rango').value;

                }
                
                // function enviar(){

                //     const value1 =document.getElementById('otro').value;
                //     const value2 =document.getElementById('resultado').value;
                //     const respuesta = confirm("Se realizara el cobro de "+ (value1 + value2)+" Bs.");

                //     if (respuesta == true){
                //         const value2 =document.getElementById('enviar').submit;
                //     }else{
                //         return false;
                //     }
                
                // }

            </script>

        </form>

      </section>
      <?php } ?>

    </section>

<?php require_once "../vista/estructura/inferior.php"?>