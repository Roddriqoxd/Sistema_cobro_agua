<?php require_once "../privado/estructura/superior.php"?>

<link rel="stylesheet" href="../vista/css/registrar.css">

<section class="container-content">

      <section class="content-cabecera">
        <h3 class="cabecera-title">Registrar medidor</h3>
        <hr>
      </section>

        <section class="content-body">
          
            <a href="{{ route( 'medidor.guardar') }}" class="seleccion-tipo-registro">
                <div class="content-img">
                    <i class="fa-solid fa-user"></i>
                </div>
                <label class="content-text" for="">Segundo <br> medidor</label>
            </a>
            <a href="agregar.php" class="seleccion-tipo-registro">
                <div class="content-img">
                    <i class="fa-solid fa-hand-holding-droplet"></i>
                </div>
                <label class="content-text" for="">Medidor y <br> afiliado</label>
            </a>
            <a href="" class="seleccion-tipo-registro">
                <div class="content-img">
                    <i class="fa-solid fa-faucet-drip"></i>
                </div>
                <label class="content-text" for="">Cambio de <br> nombre</label>
            </a>

        </section>

      </section>

    </section>

<?php require_once "../privado/estructura/inferior.php"?>
