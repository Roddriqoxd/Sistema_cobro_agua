<?php

if (isset($_POST['tipo'])){ 
    switch ($_POST['tipo']){

        case 'pagar':
            pagar();
            break; 
		}

	}

function pagar() {

    $monto=$_POST['resultado'];
    $otro=$_POST['otro'];
    $id=$_POST['medidor'];
    $total=$_POST['total'];
    $cobrar= (int)$total - (int)$monto;

    require_once "../modelo/bd.php";
    $query = "UPDATE `medidor` SET `deuda` = '$cobrar' WHERE id=  '$id'";
    $consulta1=mysqli_query($conexion, $query);
    header('Location: ../vista/mostrar.php');
}

    

?>