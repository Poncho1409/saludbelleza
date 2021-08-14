<?php
	require_once("../modelos/conexion.php");
	$insertar = new Service();
	$padecimientos = $insertar->listarPadecimientos();
	
?>