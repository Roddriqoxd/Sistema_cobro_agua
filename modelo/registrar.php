<?php

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
    $casa=$_POST['num_casa'];


    require_once "../modelo/bd.php";
    $medidor= "INSERT INTO `medidor`( `codigo`, `deuda`, `ubicacion`, `precio`) VALUES ('$codigo','$deuda','$ubicacion','1')";
    $medidorID = "SELECT * FROM `medidor` WHERE codigo = '$codigo'";
    $consulta1=mysqli_query($conexion, $medidor);
    $consulta3= mysqli_query($conexion, $medidorID);
    $row= mysqli_fetch_assoc($consulta3);
    if ($resultado =mysqli_query($conexion, $medidorID )) {
        $row= mysqli_fetch_assoc($resultado);
        $ID =  $row['id'];
        $consulta2=mysqli_query($conexion, "INSERT INTO `afiliado`(`nombre`, `paterno`, `materno`, `telefono`, `registro`, `numero_casa`, `medidor`) 
        VALUES ('$nombre','$paterno','$materno','$celular','$fecha','$casa', '$ID')");

    }
    header('Location: ../vista/mostrar.php');
}

    

?>