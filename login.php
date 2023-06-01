<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/atlasian.css' rel='stylesheet'>
    <link rel="stylesheet" href="complementos/css/bootstrap.min.css">
    <link rel="stylesheet" href="complementos/css/login.css">
    <script defer src="vista/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>

    <section class="container-main">

        <div class="signupFrm">
            <form action="modelo/login/acceso.php" class="form" method="POST">
              <i class="gg-atlasian"></i><label class="title">OTB patito</label>

              <div class="inputContainer">
                <input type="text" class="input" name="correo" placeholder="a" autofocus>
                <label for="" class="label">Cuenta</label>
              </div>

              <div class="inputContainer">
                <input type="password" class="input" name="password" placeholder="a" >
                <label for="" class="label">Contraseña</label>
              </div>
              
              <!-- <a href="{{ route('register') }}">Registrarme</a> -->

              <input type="submit" class="submitBtn" value="Entrar">
      
            </form>

    </section>
  </body>
</html>