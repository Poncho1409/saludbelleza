<?php	
session_start();
	require_once("../modelos/conexion.php");
	$insertar = new Service();
	$citasProximas = $insertar->consultarClienteHistorial(); 
	var_dump($citasProximas);
?>