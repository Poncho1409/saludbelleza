<?php
include "encabezado.php";
?>
<h1>Registrar Doctor:</h1>
<div class="box">
        <h2>Reg&iacute;strate</h2>
        <form  action="../controlador/controladorRegistrarDoctor.php" method="POST">
            <div class="inputBox">
                <input type="text" name="nombre1" required>
                <label>Nombre</label>
            </div>
            <div class="inputBox">
                <input type="text" name="apellidoP1" required>
                <label>Apellido Paterno</label>
            </div>
            <div class="inputBox">
                <input type="text" name="apellidoM1" required>
                <label>Apellido Materno</label>
            </div>
            <div class="inputBox">
                <input type="email" name="correo1" required>
                <label>Correo</label>
            </div>
            <div class="inputBox">
                <input type="password" name="clave1" required>
                <label>Contraseña</label>
            </div>
            <div class="inputBox">
                <input type="password" name="clave11" required>
                <label>Repetir contraseña</label>
            </div>
            <div class="inputBox">
                <input type="text" name="telefono1" required>
                <label>telefono</label>
            </div>
            <input class="button" type="submit" name="ok" value="Aceptar">
        </form>
        <?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
		<?php endif; ?>
    </div>



<?php
include "piepagina.php";
?>