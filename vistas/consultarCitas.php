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
			include '../controlador/consultarCitasProximas.php';
		?>
	</head>
	<body>
		<div class="wrapper">
			<?php
				include './encabezado.php';
			?>
			<form >
				<label for="">Historial de citas</label><br>
				<?php
					for ($i=0; $i < count($historialCitas); $i++) {
						echo "<input type='text' name='fecha' value='".$historialCitas[$i]["fecha"]."' readonly>";
						echo "<input type='text' name='hora' value='".$historialCitas[$i]["hora"]."' readonly>";
						echo "<input type='text' name='total' value='".$historialCitas[$i]["total"]."' readonly><br><br>";
					}
				?>
			</form>
			<form name="proximaCita" id="proximaCita" action="../controlador/controladorCita.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<label for="">Proxima cita</label><br>
				<?php
					if ($citasProximas != null) {
						echo "<input type='text' name='fecha' value='".$citasProximas[0]["fecha"]."' readonly>";
						echo "<input type='text' name='hora' value='".$citasProximas[0]["hora"]."' readonly>";
						echo "<input type='text' name='total' value='".$citasProximas[0]["total"]."' readonly>";
						echo "<input type='button' value='Posponer' name='posponer' id='posponer'/> <!-- este boton muestra los campos de nueva fecha nueva hoa y el actualiar-->";
						echo "<input type='button' value='Cancelar' name='cancelar' id='cancelar'/><br> <!-- este boton muestra los campos confirmacion y abortar-->";
					}else{
						echo "No tienes ninguna cita proxima";
					}
						
				?>
						
				
				<input type="date" name="fechaNueva"/>
				<input type="time" name="horaNueva"/>
				<input type="submit" name="actualizar" value="Guardar" id="actualizar"/>
				<label for="">Seguro</label>
				<input type="submit" name="confirmacion" value="Si" id="confirmacion"/>
				<input type="button" value="No" name="abortar" id="abortar"/>
			</form>
		</div>
	</body>
</html>
