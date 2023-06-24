<?php require_once "../vista/estructura/superior.php"?>

<link rel="stylesheet" href="../complementos/css/agregar.css">

<section class="container-content">

    <section class="content-cabecera">
        <h4 class="cabecera-title">ADMINISTRACION</h4>
        <hr>
    </section>

    <div class="col-12 row">
        <div class="col-6">

            <h4>Registrar administrador</h4>

            <form class="form-data" action="../modelo/registrar.php" method="POST">

                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input autofocus type="text" class="form-control rounded-0" name="codigo" required>
                        <label class="form-check-label" for="validationFormCheck1">Nombre de usuario</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input required type="email" class="form-control rounded-0 " name="ubicacion">
                        <label for="floatingInput">Correo</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input required type="password" class="form-control rounded-0 " id="pass" name="ubicacion">
                        <label for="floatingInput">Contraseña</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input required type="password" class="form-control rounded-0 " id="confir" name="ubicacion">
                        <label for="floatingInput">Confirmar Contraseña</label>
                    </div>

                </div>

                <div class="modal-footer rounded-0">
                    <button data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" type="submit"
                        class="btn btn-success" id="registrar">Añadir</button>
                </div>

            </form>
        </div>

        <div class="col-6">

            <h4>Lista de usuarios</h4><br>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Usuario</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "../modelo/bd.php";
                    $query = mysqli_query($conexion, "SELECT * FROM usuarios ORDER BY id DESC");
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $data['correo']; ?></td>
                        <td>
                            <form action="" method="post">
                                <button class="btn btn-danger btn-sm">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </div>



</section>

</section>
<script src="../complementos/js/jquery-3.7.0.min.js"></script>
<script>
$("#confir").keyup(function(e) {

    var confir = $("#confir").val();
    var pass = $("#pass").val();

    if (confir != pass) {
        $("#confir").addClass("is-invalid");
        $("#registrar").attr('disabled',true);
    } else if (confir === pass) {
        $("#confir").removeClass("is-invalid");
        $("#registrar").attr('disabled',false);
    }
});
$("#pass").keyup(function(f) {

    var confir = $("#confir").val();
    var pass = $("#pass").val();

    if (confir != pass) {
        $("#confir").addClass("is-invalid");
        $("#registrar").attr('disabled',true);
    } else if (confir === pass) {
        $("#confir").removeClass("is-invalid");
        $("#registrar").attr('disabled',false);
    }
});
</script>
<?php require_once "../vista/estructura/inferior.php"?>