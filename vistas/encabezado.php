<?php  session_start();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Salud y belleza</title>
	<link type="text/css" rel="stylesheet" href="./Public/estilos/login.css" />
	<link type="text/css" rel="stylesheet" href="./Public/estilos/estructura.css" />
	<link type="text/css" rel="stylesheet" href="./Public/estilos/fuente.css" />
    <link type="text/css" rel="stylesheet" href="./Public/estilos/navbar.css" />
  

</head>

<body>
    
	<header>
		<a href="./index.html"><img alt="Icono de la pagina" src="./Assets/iconos/Pagina-icon.png"></a>
		<nav>
			<ul class="nav--links">
				<li><a href="productos.php">Productos</a></li>
				<li><a href="servicios.php">Servicios</a></li>
				
				<li><a href="#">Cont&aacute;ctanos</a></li>
				<?php if(isset($_SESSION["email"])){
					echo "<li><a href='carrito.php'>Carrito</a></li>";
					echo "<li><a href='cita.php'>Agendar Cita</a></li>";
				}


				?>
				<?php if(isset($_SESSION["email1"])){
					echo "<li><a href='#'>Citas</a></li>";
					echo "<li><a href='insertarProductos.php'>Agregar productos</a></li>";
					
					
				}


				?>
				<?php if(isset($_SESSION["admin1"])){
					echo "<li><a href='registrarDoctor.php'>Agregar Doctor</a></li>";
					echo "<li><a href='#'>Agregar Cliente</a></li>";
					echo "<li><a href='#'>Ver doctores y usuarios</a></li>";
					echo "<li><a href='#'>Bitacora</a></li>";
					
					
				}


				?>



			</ul>
		</nav>
		<nav>
			<ul class="sesion--links"><?php
				if(isset($_SESSION["email"])||isset($_SESSION["email1"])||isset($_SESSION["admin1"])){
					echo "<li><a href='../controlador/cerrar.php'>cerrar sesión</a></li>";
					
				}else{
					echo "<li><a href='login.php' class='button'>Inicia sesi&oacute;n</a></li>";
					echo "<li><a href='registrate.php'>Reg&iacute;strate</a></li>";
				}
				?>
				
				
			</ul>
		</nav>
	</header>
</body>
</html>