<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if(isset($_SESSION['email'])||isset($_SESSION['email1'])||isset($_SESSION['admin1'])) {
    //session_destroy();
    //$_SESSION = array();
	header('Location: http://localhost/SaludYbelleza1/vistas/contenido.php');
	die();

}else{
	// Enviamos al usuario al formulario de login
	header('Location: http://localhost/SaludYbelleza1/vistas/login.php');
	
}

?>

