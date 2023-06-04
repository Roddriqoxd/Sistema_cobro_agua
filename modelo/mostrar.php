<?php

if (isset($_POST['tipo'])){ 
    switch ($_POST['tipo']){

        case 'pagar':
            pagar();
            break; 
		}

	}

function pagar() {

    $monto=$_POST['monto_pagar'];
    $id=$_POST['medidor'];

    require_once "../modelo/bd.php";
    $query = "UPDATE `medidor` SET `deuda` = '$monto' WHERE id=  '$id'";
    $consulta1=mysqli_query($conexion, $query);
    header('Location: ../vista/mostrar.php');
}

    

?>