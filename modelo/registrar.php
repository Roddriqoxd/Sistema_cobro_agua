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


    $conexion=mysqli_connect("localhost","root","1234","sistema_cobro_agua");
    $afiliado= "INSERT INTO `afiliado`(`nombre`, `paterno`, `materno`, `telefono`, `registro`, `numero_casa`) VALUES ('$nombre','$paterno','$materno','$celular','$fecha','$casa')";
    $medidor= "INSERT INTO `medidor`( `codigo`, `deuda`, `ubicacion`, `precio`) VALUES ('$codigo','$deuda','$ubicacion','1')";
    $consulta1=mysqli_query($conexion, $medidor);
    $consulta2=mysqli_query($conexion, $afiliado);
    header('Location: ../vista/mostrar.php');

}

    

?>