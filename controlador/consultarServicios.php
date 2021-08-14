<?php
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=smbb', 'cliente-php', 'n0m3l0');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	
	$statement = $conexion->prepare('SELECT * FROM tipo');
	$statement->execute(array(':email' => $email));
	
	// El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
	$resultado = $statement->fetch();
	var_dump($resultado);
?>