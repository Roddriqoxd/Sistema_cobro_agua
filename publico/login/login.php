<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="../../vista/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vista/css/login.css">
    <script defer src="../../vista/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>

    <section class="container-main">

        <div class="signupFrm">
            <form action="" class="form" method="POST">
              <i class="gg-atlasian"></i><label class="title">OTB patito</label>

              <div class="inputContainer">
                <input type="text" class="input" name="email" placeholder="a" autofocus>
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