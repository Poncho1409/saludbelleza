<?php
include "encabezado.php";


?>

	<div class="box iniSesion">
		<h2>Iniciar sesi&oacute;n</h2>
		<form action="../controlador/controladorLogin.php" method="POST">
			<div class="inputBox">
				<input type="text" name="correo" required>
				<label>Correo</label>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required>
				<label>Contraseña</label>
			</div>
			<input class="button" type="submit" name="" value="Aceptar">
		</form>
    </div>
    

<?php
include "piepagina.php";


?>