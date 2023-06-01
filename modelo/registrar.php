<?php

require_once ("modelo/bd.php");

if (isset($_POST['tipo'])){ 
    switch ($_POST['tipo']){

        case 'medidor_y_empleado':
            medidor_y_afiliado();
            break; 
		}

	}

function medidor_y_afiliado() {

    $codigo=$_POST['codigo'];
    $deuda=$_POST['deuda'];
    $ubicacion=$_POST['ubicacion'];
    
    $nombre=$_POST['nombre'];
    $paterno=$_POST['apellido_p'];
    $materno=$_POST['apellido_m'];
    $celular=$_POST['celular'];
    $fecha=$_POST['fecha_registro'];


    $conexion=mysqli_connect("localhost","root","1234","sistema_cobro_agua");
    // $consulta= "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password'";
    // $resultado=mysqli_query($conexion, $consulta);
    // $filas=mysqli_num_rows($resultado);
}

    

?>