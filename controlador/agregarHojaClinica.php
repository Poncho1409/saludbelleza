<?php

	function validarDatos($datos){
		$valido = FALSE;
		if (isset($datos["peso"]) and $datos["peso"] != "" and isset($datos["sexo"]) and $datos["sexo"] != "" and isset($datos["estatura"]) and $datos["estatura"] != "") {
			$valido = TRUE;
		}
	} 
	$json = file_get_contents('php://input');
	$datos = json_decode($json,TRUE);  /* ahora en $data tenemos el objeto que nos enviaron x json, */
	
	/*
	 * Step 1
	 * 
	 * Verificar cuales fueron los datos recibidos y validarlos
	 * 
	 * */
	
	session_start(); 
	
	// Por el momento asumimos que los datos enviados son correctos
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=smbb', 'cliente-php', 'n0m3l0');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	
	/*
	 * Step 2
	 * 
	 * Hacer el registro
	 * 
	 * */
	 
	 echo "<br>".$datos["problemasOtra"]."<br>".$datos["problemasMamaOtra"]."<br>".$datos["problemasPapaOtra"]."<br>".$datos["problemasAbuelosOtra"]."<br>".$datos["medicamento"]."<br>";
	 
	require_once("../modelos/conexion.php");
	$insertar = new Service();
	$respuesta = $insertar->registrarHistorial($datos["modoVida"],$datos["actFisica"],$datos["fuma"],$datos["bebe"],$datos["sueno"],$datos["drogas"],$datos["sexo"],$datos["peso"],$datos["estatura"],$_SESSION["numero"],$datos["padecimientos"],$datos["problemas"],$datos["problemasMama"],$datos["problemasPapa"],$datos["problemasAbuelos"],$datos["problemasOtra"],$datos["problemasMamaOtra"],$datos["problemasPapaOtra"],$datos["problemasAbuelosOtra"],$datos["medicamento"]);
	if ($respuesta != FALSE) {
		HEADER("location: http://localhost/SaludYbelleza1/vistas/cita.php");
	}
?>