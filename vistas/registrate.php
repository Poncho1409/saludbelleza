<?php
include "encabezado.php";

?>


<div class="box">
        <h2>Reg&iacute;strate</h2>
        <form  action="../controlador/controladorRegistro.php" method="POST">
            <div class="inputBox">
                <input type="text" name="nombre" required>
                <label>Nombre</label>
            </div>
            <div class="inputBox">
                <input type="text" name="apellidoP" required>
                <label>Apellido Paterno</label>
            </div>
            <div class="inputBox">
                <input type="text" name="apellidoM" required>
                <label>Apellido Materno</label>
            </div>
            <div class="inputBox">
                <input type="email" name="correo" required>
                <label>Correo</label>
            </div>
            <div class="inputBox">
                <input type="password" name="clave" required>
                <label>Contraseña</label>
            </div>
            <div class="inputBox">
                <input type="password" name="clave1" required>
                <label>Repetir contraseña</label>
            </div>
            <div class="inputBox">
                <input type="text" name="telefono" required>
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