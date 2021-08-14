<?php
	session_start();	
	require_once("../modelos/conexion.php");
	$insertar = new Service();
	$citasProximas = $insertar->listarProximasCitas($_SESSION["numero"],date("Y-m-d"));
	$historialCitas = $insertar->listarHistorialCitas($_SESSION["numero"],date("Y-m-d")); 
?>