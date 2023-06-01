<?php
session_start();
error_reporting(0);
	$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){

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
    <script src="https://kit.fontawesome.com/189cbc8fac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../complementos/css/bootstrap.min.css">
    <link rel="stylesheet" href="../complementos/css/superior.css">
    <script defer src="../vista/js/bootstrap.bundle.min.js"></script>
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
        <a class="btn-routes" href="registrar.php"><div>Registrar</div></a>
        </section>
        
        <section class="routes-content">
          <i class="fas fa-droplet"></i>
        <a class="btn-routes" href="{{ route('cobrar') }}"><div>Realizar <br> cobro</div></a>
        </section>

        <section class="routes-content">
          <i class="fas fa-light fa-scroll"></i>
        <a class="btn-routes" href="">Historial de pagos</a>
        </section>

      </section> 

    </nav>