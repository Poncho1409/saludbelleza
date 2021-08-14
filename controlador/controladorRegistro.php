<?php

$nombre =$_POST["nombre"];
$apellidoP =$_POST["apellidoP"];
$apellidoM =$_POST["apellidoM"];
$email =$_POST["correo"];
$clave =$_POST["clave"];
$clave1 =$_POST["clave1"];
$telefono =$_POST["telefono"];

$errores='';


if((isset($nombre) && $nombre !='')&&(isset($apellidoP) && $apellidoP !='')&&(isset($apellidoM) && $apellidoM !='')
&&(isset($email) && $email !='')&&(isset($clave1) && $clave1 !='')&&(isset($clave) && $clave !='')&&(isset($telefono) && $telefono !='')){
    $password = hash('sha512', $clave);
    $password2 = hash('sha512', $clave1);
    // Comprobamos que las contraseñas sean iguales.
    if ($password != $password2) {
        $errores.= '<li>Las contraseñas no son iguales</li>';
    }else{
        try {
			$conexion = new PDO('mysql:host=localhost;dbname=smbb', 'cliente-php', 'n0m3l0');
		} catch (PDOException $e) {
			echo "Error:" . $e->getMessage();
		}

		$statement = $conexion->prepare('SELECT * FROM cliente WHERE email = :email LIMIT 1');
		$statement->execute(array(':email' => $email));

		// El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
		$resultado = $statement->fetch();
        var_dump($resultado);
		// Si resultado es diferente a false entonces significa que ya existe el usuario.
		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}else{
        var_dump($password);
        require_once("../modelos/conexion.php");
        $insertar1 = new Service();
        $datos = $insertar1->getInsertarU($nombre,$apellidoP,$apellidoM,$email,$password,$telefono);
        var_dump($datos);
        print "todo bien";
        HEADER("location: http://localhost/SaludYbelleza1/vistas/login.php");

        }
    }

}else{
    $errores.="algunos datos estan vacios";
}



?>