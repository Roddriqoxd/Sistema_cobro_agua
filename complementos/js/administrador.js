var  confirmarPassword = false;

$("#confir").keyup(function() {

    var confir = $("#confir").val();
    var pass = $("#pass").val();

    if (confir != pass) {
        $("#confir").addClass("is-invalid");
        confirmarPassword = false;
        revisar();
    } else if (confir === pass && confir != "") {
        $("#confir").removeClass("is-invalid");
        confirmarPassword = true;
        revisar();
    }
});

$("#pass").keyup(function() {

    var confir = $("#confir").val();
    var pass = $("#pass").val();

    if (confir != pass) {
        $("#confir").addClass("is-invalid");
        confirmarPassword = false;
        revisar();
    } else if (confir === pass && pass != "") {
        $("#confir").removeClass("is-invalid");
        confirmarPassword = true;
        revisar();
    }
});

revisar();
$('#usuario').keyup(revisar);
$('#correo').keyup(revisar);

function revisar(){
    var usuario = $("#usuario").val();
    var correo = $("#correo").val();

    if(usuario != "" && correo != "" && confirmarPassword == true){
        $("#registrar").attr('disabled',false);
    }else{
        $("#registrar").attr('disabled',false);
    }
}

function color() {

    var tema = localStorage.getItem("tema");

    switch (tema) {
        case "dark":
            $("body").addClass("bg-dark");
            $("body").addClass("text");
            $(".title").removeClass("blanco");
            $(".form-control").addClass("form-control-dark");
            break;

        case "claro":
            $("body").removeClass("bg-dark");
            $("body").removeClass("text");
            $(".title").addClass("blanco");
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