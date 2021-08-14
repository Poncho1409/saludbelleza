<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Salud y belleza</title>
		<link type="text/css" rel="stylesheet" href="./Public/estilos/cita.css" />
		<link type="text/css" rel="stylesheet" href="./Public/estilos/estructura.css" />
		<link type="text/css" rel="stylesheet" href="./Public/estilos/fuente.css" />
		<link type="text/css" rel="stylesheet" href="./Public/estilos/navbar.css" />
		<script type="text/javascript" src="./Public/scripts/formularioHoja.js"></script>
		<?php
			include '../controlador/consultarHoja.php';
		?>
	</head>
	<body>
		<div class="wrapper">
			<?php
				include './encabezado.php';
			?>
			<form name="consultaHoja" id="consultaHoja" action="../controlador/controladorhoja.php" method="post" accept-charset="utf-8" enctype="multipart/form-data" target="vistaPrevia">
				<label for="">Seleccione un cliente</label><br>
				<select name="hoja" id="hoja">
					<?php
						for ($i=0; $i < count($hojas); $i++) {
							echo "<option value='".$hojas[$i]["id_h"]."'>".$hojas[$i]["nombre"]." ".$hojas[$i]["apellidoP"]." ".$hojas[$i]["apellidoM"]."</option>";
						}
					?>
				</select>
				<input type="submit" name="consultar" value="Mostrar" id="consultar"/>
			</form>
			
			<iframe name="vistaPrevia" id="vistaPrevia" src="../controlador/controladorhoja.php">
				
			</iframe>
		</div>
	</body>
</html>
