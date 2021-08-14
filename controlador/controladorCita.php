<?php
	session_start();
	require_once("../modelos/conexion.php");
	
	if (isset($_POST["actualizar"])) {
		
		if (isset($_POST["horaNueva"]) and $_POST["horaNueva"] != "" and isset($_POST["fechaNueva"]) and $_POST["fechaNueva"] != "") {
			$insertar = new Service();
			$resultado = $insertar->actualizarCita($_SESSION["numero"],date("Y-m-d"),$_POST["fechaNueva"],$_POST["horaNueva"]);
			
			header('Location: ../vistas/consultarCitas.php');
		}
	} elseif (isset($_POST["confirmacion"])) {
		$insertar = new Service();
		$resultado = $insertar->eliminarCita($_SESSION["numero"],date("Y-m-d"));
		header('Location: ../vistas/consultarCitas.php');
	} 
	
?>
