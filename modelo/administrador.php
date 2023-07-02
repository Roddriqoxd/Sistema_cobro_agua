<?php

if (isset($_POST['tipo'])){ 

    switch ($_POST['tipo']){

        case 'registrar':
            registrar();
            break; 

        case 'password':
            password();
            break; 
	}

}else if(isset($_GET['tipo'])){
    
    switch ($_GET['tipo']){

        case 'eliminar':
            borrar();
            break;     
    }
}

function registrar(){

    $usuario=$_POST['usuario'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    
    require_once "bd.php";
    $query= "INSERT INTO `usuarios`( `usuario`, `correo`, `password`) VALUES ('$usuario','$correo','$password')";
    $consultado=mysqli_query($conexion, $query);
    
        if($consultado){
            header('Location: ../vista/administracion.php');
        }else{
            echo 'error al registrar';
        }
}
function borrar(){
    $id=$_GET['id'];

    require_once "bd.php";
    $query= "DELETE FROM `usuarios` WHERE `id` = '$id' ";
    $consultado=mysqli_query($conexion, $query);

    if($consultado){
        header('Location: ../vista/administracion.php');
    }else{
        echo 'error al eliminar';
    }
}

function password(){

    session_start();
    $password=$_POST['password'];
    $passwordLogin = $_SESSION['password'];

    if($password == $passwordLogin){

        $_SESSION['admin'] = $password;
        header('Location: ../vista/administracion.php');

    }else{

        header('Location: ../vista/mostrar.php');
    }
    
}







?>