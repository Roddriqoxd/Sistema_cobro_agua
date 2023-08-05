<?php
$conexion = mysqli_connect( "localhost", "root" , "", "sistema_cobro_agua");

if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;
}

?>
