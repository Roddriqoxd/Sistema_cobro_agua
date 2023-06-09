<?php require_once "../vista/estructura/superior.php"?>
<?php
session_start();
error_reporting(0);
	$varsesion = $_SESSION['admin'];

	if($varsesion == null || $varsesion= ''){

	    header("Location: mostrar.php");
		die();
	}
?>

<link rel="stylesheet" href="../complementos/css/agregar.css">

<section class="container-content">

    <section class="content-cabecera">
        <h4 class="cabecera-title">ADMINISTRACION</h4>
        <hr>
    </section>

    <div class="col-12 row">
        <div class="col-6">

            <h4>Registrar administrador</h4>

            <form class="form-data" action="../modelo/administrador.php" method="POST">

                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input autofocus type="text" class="form-control rounded-0" id="usuario" name="usuario"
                            required>
                        <label class="form-check-label" for="validationFormCheck1">Nombre de usuario</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input required type="email" class="form-control rounded-0 " id="correo" name="correo">
                        <label for="floatingInput">Correo</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input required type="password" class="form-control rounded-0 " id="pass" name="password">
                        <label for="floatingInput">Contraseña</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input required type="password" class="form-control rounded-0 " id="confir" name="conf-pass">
                        <label for="floatingInput">Confirmar Contraseña</label>
                    </div>

                </div>

                <input type="hidden" name="tipo" value="registrar">

                <div class="modal-footer rounded-0">
                    <button data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" type="submit"
                        class="btn btn-success" id="registrar" disabled>Añadir</button>
                </div>

            </form>
        </div>

        <div class="col-6">

            <h4>Lista de administradores</h4><br>

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
                        <td><?php echo $data['usuario']; ?></td>
                        <td><?php echo $data['correo']; ?></td>
                        <td>
                            <form action="../modelo/administrador.php?id=<?php echo $data['id']?>&tipo=eliminar" method="post">
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
<script src="../complementos/js/administrador.js"></script>
<?php require_once "../vista/estructura/inferior.php"?>