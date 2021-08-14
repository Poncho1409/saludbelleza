<?php
	session_start();
	require_once("../modelos/conexion.php");
	$insertar = new Service();
	$hojas = $insertar->consultarClienteHistorial();
?>
