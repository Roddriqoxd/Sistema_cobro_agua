<?php

    $correo=$_POST['correo'];
    $password=$_POST['password'];
    session_start();

    require_once "../bd.php";
    $consulta= "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_num_rows($resultado);

    if($filas){
        while ($data = mysqli_fetch_assoc($resultado)) {

            $_SESSION['nombre']=$data['usuario'];
            $_SESSION['password']=$data['password'];
        }
        header('Location: ../../vista/mostrar.php');

    }else{

        header('Location: ../../login.php');
        session_destroy();
        
    }

?>