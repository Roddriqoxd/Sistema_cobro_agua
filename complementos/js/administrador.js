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

$('#usuario').keyup(revisar);
$('#correo').keyup(revisar);

function revisar(){
    var usuario = $("#usuario").val();
    var correo = $("#correo").val();

    if(usuario != "" && correo != "" && confirmarPassword == true){
        $("#registrar").attr('disabled',false);
    }else{
        $("#registrar").attr('disabled',true);
    }
}

