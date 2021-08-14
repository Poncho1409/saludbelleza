<?php
	require_once("../modelos/conexion.php");
	if (isset($_POST["hoja"])) {
		
		$insertar = new Service();
		$historial = $insertar->consultarHistorial($_POST["hoja"]);
		$alimentacion = $insertar->consultarAlimentacion($_POST["hoja"]);
		$padecimiento = $insertar->consultarPadecimientos($_POST["hoja"]);
		$problema = $insertar->consultarProblemas($_POST["hoja"]);
		$medicamento = $insertar->consultarMedicamentos($_POST["hoja"]);
		$mama = $insertar->consultarAnteMama($_POST["hoja"]);
		$papa = $insertar->consultarAntePapa($_POST["hoja"]);
		$abuelos = $insertar->consultarAnteAbuelos($_POST["hoja"]);
		
		
		echo "<h1>Datos generales</h1>";
       	echo $historial["nombre"]." ".$historial["apellidoP"]." ".$historial["apellidoM"]."<br>";
		echo $historial["peso"]."<br>";
		$historial["sexo"] = ("m") ? $msg = "Masculino" : $msg = "Femenino" ;
		echo $msg."<br>";
		echo $historial["estatura"]."<br>";
			
		echo "<h1>Datos sobre estados de salud</h1>";
        for ($i=0; $i < count($padecimiento); $i++) { 
			echo $padecimiento[$i]["nombre"];
		}
		echo "<h1>Alimentacion</h1>";
		echo $alimentacion["modovida"] = (1) ? "Vida activa" : "Vida sedentaria" ;
		echo $alimentacion["actfisica"] = (1) ? "Realiza actividad fisica" : "No realiza actividad fisica" ;
		echo $alimentacion["fuma"] = (1) ? "Fuma" : "No fuma" ;
		echo $alimentacion["bebidas_alc"] = (1) ? "Bebe frecuentemente" : "no bebe frecuentemente" ;
		
		if ($alimentacion["calidad_sueno"] = 3) {
			echo "Calidad de sueño buena";
		}elseif ($alimentacion["calidad_sueno"] = 3) {
			echo "Calidad de sueño regular";
		}elseif($alimentacion["calidad_sueno"] = 3) {
			echo "Calidad de sueño mala";
		}
		echo $alimentacion["drogas_consumo"] = (1) ? "Consume frecuentemente drogas" : "No consume frecuentemente drogas" ;
		
		echo "<h1>Sufre o ha sufrido</h1>";
        for ($i=0; $i < count($problema); $i++) { 
			echo $problema[$i]["nombre"];
		}
		
		echo "<h1>Alimentaci&oacute;</h1>";
		
		echo "<h1>Antecedentes familiares</h1><h2>Madre</h2>";
        for ($i=0; $i < count($mama); $i++) { 
			echo $mama[$i]["nombre"];
		}
			
		echo "<h2>Padre</h2>";
        for ($i=0; $i < count($papa); $i++) { 
			echo $papa[$i]["nombre"];
		}
		
		echo "<h2>Abuelos</h2>";
       	for ($i=0; $i < count($abuelos); $i++) { 
			echo $abuelos[$i]["nombre"];
		}
	}
?>
