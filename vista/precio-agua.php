<?php require_once "../vista/estructura/superior.php"; ?>

<link rel="stylesheet" href="../complementos/css/agregar.css">

<section class="container-content">

    <section class="content-cabecera">
        <h3 class="cabecera-title">CAMBIAR PRECIO DEL AGUA</h3>
        <section class="temas">
            <i id="dark" class="fa-solid fa-moon"></i>
            <i id="claro" class="fa-solid fa-sun"></i>
        </section>
    </section>
    <hr>

    <form class="form-data" action="../modelo/registrar.php" method="POST">

        <div class="modal-body">

            <div class="mb-3">

                <?php
            require_once "../modelo/bd.php";
            $query = mysqli_query($conexion, "SELECT * FROM precio");
            while ($data = mysqli_fetch_assoc($query)) {
          ?>

                <label for="floatingInput">Precio actual</label>
                <label for="floatingInput" id="precio_actual"
                    style="font-size: 50px"><?php echo $data['agua']; ?></label>
                <label for="floatingInput">Bs.</label>

                <?php } ?>
            </div>

            <form action="../modelo/registrar.php" method="POST">

                <div class="form-floating mb-3">
                    <input autofocus type="text" class="form-control rounded-0 " name="precio" id="precio">
                    <label for="floatingInput">Precio nuevo</label>
                </div>

            </form>

            <input type="hidden" name="tipo" value="cambio_de_precio">

            <div class="modal-footer rounded-0">
                <button onclick="enviar()" type="submit" class="btn btn-primary">Cambiar</button>
            </div>

    </form>

</section>

</section>
<script src="../complementos/js/jquery-3.7.0.min.js"></script>
<script defer>
    function color() {

        var tema = localStorage.getItem("tema");

        switch (tema) {
            case "dark":
                $("body").addClass("bg-dark");
                $("body").addClass("text");
                $(".form-control").addClass("form-control-dark");
                break;

            case "claro":
                $("body").removeClass("bg-dark");
                $("body").removeClass("text");
                $(".form-control").removeClass("form-control-dark");
                break;
        }
    }

    color();

    $("#dark").click(function() {
        localStorage.setItem("tema", "dark");
        color();
    })

    $("#claro").click(function() {
        localStorage.setItem("tema", "claro");
        color();
    })
    </script>
<script src="../complementos/js/funciones.js"></script>
<script>

</script>
<?php require_once "../vista/estructura/inferior.php"; ?>