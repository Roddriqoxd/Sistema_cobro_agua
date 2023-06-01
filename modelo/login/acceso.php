<?php

    $correo=$_POST['correo'];
    $password=$_POST['password'];
    session_start();
    $_SESSION['nombre']=$correo;

    $conexion=mysqli_connect("localhost","root","1234","sistema_cobro_agua");
    $consulta= "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_num_rows($resultado);

    if($filas){

        header('Location: ../../vista/mostrar.php');

    }else{

        header('Location: ../../login.php');
        session_destroy();
        
    }

?>