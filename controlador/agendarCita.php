<?php
session_start(); 
$motivo =$_POST["motivo"];
$servicio = $_POST["servicio"];
$fecha = $_POST["fecha"];
$veces = $_POST["veces"];
$hora = $_POST["hora"];

$errores='';

echo $motivo."<br>";
echo $servicio."<br>";
echo $fecha."<br>";
echo $hora."<br>";
echo $veces."<br>";
echo $id_c."<br>";


if (isset($motivo) and $motivo != "" and isset($servicio) and $servicio != "" and isset($fecha) and $fecha != "" and isset($veces) and $veces != "") {
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=smbb', 'cliente-php', 'n0m3l0');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	// 
	/*
	 * Step 1
	 * Verificar que el paciente no tenga una cita proxima
	 * 
	 * select * from cita where fecha >= '2019-12-01';
	 * */
	$fechaActual = date("Y-m-d");
	
	$statement = $conexion->prepare('select * from cita where (fecha >= :fecha) and (id_c = :id_c) LIMIT 1');
	$statement->execute(array(':fecha' => $fechaActual,':id_c' => $_SESSION['numero']));
	$resultado = $statement->fetch();
	
	//echo "<br> \$resultado: <br>";
	//var_dump($resultado);
	echo "<br><br>";
	
	if ($resultado != FALSE) {
		// Caso en que el cliente tenga una cita proxima
		echo "Tu proxima cita es el ";
		//var_dump($resultado);
	}else{
		// Caso en que el cliente no tenga proximas sitas
		/*
		 * Step 2
		 * Verificamos que no exista una cita a esa misma hora ni haya traslape*/
		 
		//echo "no tienen proxima cita";
		
		$fin = new DateTime($hora); 
		$fin->modify('+1 hours'); 
		$fin->modify('+30 minute');
		//echo $fin->format('H:i:s')."<br>";
		
		$statement = $conexion->prepare('select * from cita where (hora > :hora) and (hora < :fin) and (fecha = :fecha)');
		$statement->execute(array(':hora' => $hora, ':fin' => $fin->format('H:i:s'), ':fecha' => $fecha));
		//echo "<br> statment:  ";
		//var_dump($statement);
		$resultado = $statement->fetch();
		//echo "<br> #####resultado:   ";
		//var_dump($resultado);
		//echo "<br><br>";
		
		if ($resultado != FALSE) {
			// Caso en el que exista traslape
			//echo "No se puede agendar tu cita porque hay raslape";
		}else{
			//echo "se va a registrar<br>";
			
			//echo $numero;
			require_once("../modelos/conexion.php");
	        $insertar1 = new Service();
	        $datos = $insertar1->registrarCita($fecha,$hora,2500,$_SESSION['numero'],$servicio,1);
	        var_dump($datos);
	        if ($veces != 'si') {
				HEADER("location: ../index.php");
			}else{
				HEADER("location: http://localhost/SaludYbelleza1/vistas/hojaClinica.php");
			}
		}
	}
}
?>