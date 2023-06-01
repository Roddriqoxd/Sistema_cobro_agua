<?php require_once "../vista/estructura/superior.php"?>

<link rel="stylesheet" href="../complementos/css/agregar.css">

<section class="container-content">

      <section class="content-cabecera">
        <h3 class="cabecera-title">REGISTRAR MEDIDOR Y AFILIADO</h3>
        <hr>
      </section>
        
        <form class="form-data" action="../modelo/registrar.php" method="POST">
          
          <div class="modal-body">

            <div class="form-floating mb-3">
              <input autofocus type="text" class="form-control rounded-0 " name="codigo">
              <label for="floatingInput">Codigo medidor</label>
            </div>

            <div class="row">

              <div class="form-floating mb-3 col-md-6">
                <input type="date" class="form-control rounded-0"  name="fecha" id="fecha" onchange="sumar()">
                <label class="px-4" for="floatingInput">Ultima fecha de pago</label>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input type="text" class="form-control rounded-0" name="deuda" id="deuda" value="" readonly>
                <label class="px-4" for="floatingInput">Deuda Bs.</label>
              </div>

              <input type="hidden" name="tipo" value="medidor_y_empleado">

              <script>
                
                function sumar(){
                 
                  var fecha = document.getElementById('fecha').value;
                  var año = fecha.split('-')[0];
                  var mes = fecha.split('-')[1];
                  var mesActual = new Date().getMonth()+1;
                  var añoActual = new Date().getFullYear();
                  var deuda = deuda(parseInt(mes),parseInt(año), mesActual ,añoActual,)

                  function deuda(m1,a1,m2,a2){
                    if(a1 == a2){
                      return (m2-m1)*15;
                    }
                    if(a1<a2){
                      return ((12-m1)*15)+((image.png)*15);
                    }
                  }

                  document.getElementById('deuda').value = deuda;
                  console.log(fecha);
                  console.log(año);
                  console.log(deuda);
                }

               </script>

            </div>

            <div class="form-floating mb-3">
              <input autofocus type="text" class="form-control rounded-0 " name="ubicacion">
              <label for="floatingInput">Ubicación</label>
            </div> 

          </div>

                  <div class="modal-body">

          <div class="form-floating mb-3">
            <input autofocus type="text" class="form-control rounded-0 " name="nombre" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nombre(s)</label>
          </div>  

          <div class="row">

            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control rounded-0"  name="apellido_p" id="floatingInput" placeholder="name@example.com">
              <label class="px-4" for="floatingInput">Apellido paterno</label>
            </div>

            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control rounded-0" name="apellido_m" id="floatingInput" placeholder="name@example.com">
              <label class="px-4" for="floatingInput">Apellido materno</label>
            </div>

          </div>

          <div class="row">

            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control rounded-0" name="celular" id="floatingInput" placeholder="name@example.com">
              <label class="px-4" for="floatingInput">Telefono / Celular</label>
            </div>
            <?php $fcha = date("Y-m-d");?>
            <div class="form-floating mb-3 col-md-6">
              <input type="date" readonly class="form-control rounded-0" name="fecha_registro" value="" id="fechaActual">
              <label class="px-4" for="floatingInput">Fecha de ingreso</label>
            </div>

            <script>

                    window.onload = function(){
                      var fecha = new Date(); 
                      var mes = fecha.getMonth()+1; 
                      var dia = fecha.getDate(); 
                      var ano = fecha.getFullYear(); 
                      if(dia<10)
                        dia='0'+dia; 
                      if(mes<10)
                        mes='0'+mes 
                      document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;
                    }

            </script>

          </div>

          <input type="hidden" name="cod_medidor" value="2">

          <div class="row">

            <div class="form-floating mb-3 col-md-6">
              <input type="text" class="form-control rounded-0" name="num_casa" id="floatingInput" placeholder="name@example.com">
              <label class="px-4" for="floatingInput">Nro. Casa</label>
            </div>

          </div>

          <input type="hidden" name="cod_medidor" value="2">

        </div>
        <div class="modal-footer rounded-0">
          <button data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" type="submit" class="btn btn-primary">Añadir</button>
        </div>

        </div>


        </form>

      </section>

    </section>

<?php require_once "../vista/estructura/inferior.php"?>