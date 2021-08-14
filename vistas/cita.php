<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Salud y belleza</title>
	<link type="text/css" rel="stylesheet" href="./Public/estilos/cita.css" />
	<link type="text/css" rel="stylesheet" href="./Public/estilos/estructura.css" />
	<link type="text/css" rel="stylesheet" href="./Public/estilos/fuente.css" />
	<link type="text/css" rel="stylesheet" href="./Public/estilos/navbar.css" />

</head>

<body>

	<header class="headerPrincipal">
		<div class="container--header">
			<a href="./index.html"><img alt="Icono de la pagina" src="./Assets/iconos/Pagina-icon.png" id="iconoPagina">
			</a>
			<div class="dropdown">

				<nav class="menu">
					<!--<div class="productos">
								
								<button class="botonNavbar">Productos</button>
								<ul>
									<li><a href="#">Productos</a></li>
									<li><a href="#">Productos</a></li>
									<li><a href="#">Productos</a></li>
									<li><a href="#">Productos</a></li>
								</ul>
							</div>
							<div class="servicios">
								
								<button class="botonNavbar">Servicios</button>
								<ul>
									<li><a href="#">Servicios</a></li>
									<li><a href="#">Servicios</a></li>
									<li><a href="#">Servicios</a></li>
									<li><a href="#">Servicios</a></li>
								</ul>
								
								<ul class="nav--links">
									<li><a href="#">Productos</a></li>
									<li><a href="#contacto">Servicios</a></li>
								</ul>
							</div>-->
					<div class="contacto">
						<ul class="nav--links">
							<li><a href="./productos.html">Productos</a></li>
							<li><a href="./servicios.html">Servicios</a></li>
							<li><a href="./index.html#contacto">Cont&aacute;ctanos</a></li>
							<li><a href="./verCarrito.html"><img src="./Assets/iconos/carrito-icon3.png" alt=""
										id="iconoCarrito"></a></li>
						</ul>
						<button class="botonNavbar">Cita</button>
						<ul>
							<li><a href="./verCita.html">Consultar cita</a></li>
							<li><a href="./cancelarCita.html">Cancelar cita</a></li>
							<li><a href="./pospCita.html">Posponer cita</a></li>
							<li><a href="./cita.html">Hacer cita</a></li>
						</ul>
					</div>
				</nav>

				<nav class="usuario">
					<div class="sesion">
						<ul class="sesion--links">
							<li><a href="./registro.html" class="button">Cerrar sesi&oacute;n</a></li>
						</ul>
					</div>
				</nav>

			</div>
		</div>
	</header>

	<div class="contact-form">
		<h1>Agenda tu cita</h1>


		<form name="cita" id="cita" action="../controlador/agendarCita.php" method="post" accept-charset="utf-8"
			enctype="multipart/form-data">

			<div class="txtb">
				<label>Montivo de la cita:</label>
				<textarea name="motivo" id="motivo" cols="30" rows="10"></textarea>
			</div>

			<div>
				<label id="titulo-servicio">Elige el sericio que deseas recibir:</label>

				<div class="subtituloHojaClinicaRadio">
					<label class="titulo">Reductivo.</label>
					<div class="contRadio">
						<div class="conjuntoRadio">
							<label for="">Mesoterapia</label>
							<input type="radio" name="servicio" value="1">
						</div>
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="2">
							<label for="">Tratamiento manual con varas de bamb&uacute;</label>
						</div>
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="3">
							<label for="">Tratamiento con l&aacute;ser</label>
						</div>
					</div>
				</div>

				<div class="subtituloHojaClinicaRadio">
					<label class="titulo">Corporal.</label>
					<div class="contRadio">
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="4">
							<label for="">Celulitis</label>
						</div>
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="5">
							<label for="">Flacidez</label>
						</div>
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="6">
							<label for="">Adiposidad localizada (grasa localizada)</label>
						</div>
					</div>
				</div>

				<div class="subtituloHojaClinicaRadio">
					<label class="titulo">Quirofisicos.</label>
					<div class="contRadio">
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="7">
							<label for="">Quiropraxia</label>
						</div>
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="8">
							<label for="">Rehabilitación</label>
						</div>
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="9">
							<label for="">Reflexología</label>
						</div>
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="10">
							<label for="">Digitopuntura</label>
						</div>
					</div>
					<div class="contRadio">
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="11">
							<label for="">Drenaje Linfático</label>
						</div>
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="12">
							<label for="">Posquirúrgico</label>
						</div>
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="13">
							<label for="">Seguridad Alimentaria</label>
						</div>
						<div class="conjuntoRadio">
							<input type="radio" name="servicio" value="14">
							<label for="">Alineación de tendones y ligamentos</label>
						</div>
					</div>
				</div>

			</div>

			<div class="txtb">
				<label>Elige la fecha de tu cita:</label>
				<input type="date" name="fecha" required="required">
			</div>

			<div class="txtb">
				<label>Elige la hora de tu cita:</label>
				<input type="time" name="hora" required="required">
			</div>

			<div class="subtituloHojaClinicaRadio">
				<label class="titulo">¿Primera vez?</label>
				<div class="contRadio">
					<div class="conjuntoRadio">
						<input type="radio" name="veces" class="hoja-si" value="si">
						<label for="">S&iacute;</label>
					</div>
					<div class="conjuntoRadio">
						<input type="radio" name="veces" value="no">
						<label for="">No</label>
					</div>
				</div>
			</div>

			<input class="btn" type="submit" name="enviar" value="Aceptar">
		</form>

	</div>
</body>

</html>