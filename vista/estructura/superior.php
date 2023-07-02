<?php
session_start();
error_reporting(0);
	$varsesion = $_SESSION['nombre'];

	if($varsesion == null || $varsesion= ''){

	    header("Location: ../login.php");
		die();
	}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OTB Patito</title>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/atlasian.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../complementos/img/logo.ico">
    <script src="https://kit.fontawesome.com/189cbc8fac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../complementos/css/superior.css">
    <link rel="stylesheet" href="../complementos/css/bootstrap.min.css">

    <script defer src="../complementos/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="container-nav">

        <section class="nav-logo">
            <i class="gg-atlasian"></i>
            <label for="">OTB PATITAS</label>
        </section>

        <section class="container-ruters">

            <section class="routes-content">
                <i class="fas fa-users"></i>
                <a class="btn-routes" href="mostrar.php">Afiliados</a>
            </section>

            <section class="routes-content">
                <i class="fas fa-user"></i>
                <a class="btn-routes" href="registrar.php">
                    <div>Registrar</div>
                </a>
            </section>

            <section class="routes-content">
                <i class="fas fa-droplet"></i>
                <a class="btn-routes" href="precio-agua.php">
                    <div>Precio <br>agua</div>
                </a>
            </section>

            <section class="routes-content">
                <i class="fas fa-chess"></i>
                <a class="btn-routes" type="button" data-bs-target="#staticBackdrop" data-bs-toggle="modal">
                    <div>Registrar <br>adminstrador</div>
                </a>
            </section>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" style="margin-top: 15%">
                    <form class="modal-content" action="../modelo/administrador.php" method="POST">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar contraseña</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <input type="password" class="form-control" name="password" id="password" autofocus>
                        <input type="hidden" name="tipo" value="password">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

        </section>

        <section style="display: flex; gap: 10px; width: 100%; justify-content: center;">
            <div>
                <img src="../complementos/img/avatar.jpg" width="40px" height="40px"
                    style="border-radius: 50%; margin-top: 8px;">
            </div>

            <form style="display: flex; flex-direction: column; gap: 5px;" action="../modelo/login/cerrar.php"
                method="POST">

                <label style="color: white;"><?php echo $_SESSION['nombre']?></label>

                <button type="submit" class="btn btn-danger" style="--bs-btn-padding-y: .15rem;
                   --bs-btn-padding-x: .5rem;
                   --bs-btn-font-size: .75rem; 
                   background-color: rgb(222, 0, 0);">Salir</button>
            </form>

        </section>

    </nav>