<?php
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Salud y belleza</title>
	<link type="text/css" rel="stylesheet" href="./Public/estilos/cita.css" />
	<link type="text/css" rel="stylesheet" href="./Public/estilos/estructura.css" />
	<link type="text/css" rel="stylesheet" href="./Public/estilos/fuente.css" />
	<link type="text/css" rel="stylesheet" href="./Public/estilos/navbar.css" />
	
	<script type="text/javascript" src="./Public/scripts/formularioHoja.js"></script>
</head>

<body>
	<header class="headerPrincipal">
		<div class="container--header">
			<a href="./index.html"><img alt="Icono de la pagina" src="./Assets/iconos/Pagina-icon.png" id="iconoPagina">
			</a>
			<div class="dropdown">

				<nav class="menu">
					<div class="contacto">
						<ul class="nav--links">
							<li><a href="./productos.php">Productos</a></li>
							<li><a href="./servicios.php">Servicios</a></li>
							<li><a href="./index.phpl#contacto">Cont&aacute;ctanos</a></li>
							<li><a href="./verCarrito.php"><img src="./Assets/iconos/carrito-icon3.png" alt=""
										id="iconoCarrito"></a></li>
						</ul>
						<button class="botonNavbar">Cita</button>
						<ul>
							<li><a href="./verCita.html">Consultar cita</a></li>
							<li><a href="./cancelarCita.html">Cancelar cita</a></li>
							<li><a href="./pospCita.html">Posponer cita</a></li>
							<li><a href="./cita.html">Hacer cita</a></li>
						</ul>
						<button class="botonNavbar">Hoja clinica</button>
						<ul>
							<li><a href="./verCita.html">Consultar hoja clinica</a></li>
							<li><a href="./cancelarCita.html">Modificar hoja clinica</a></li>
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

	<header class="header--form" id="contenedor" name="contenedor">
		<nav class="menuHojaClinica">
			<ul class="categoriasHojaClinica">
				<li><button onclick="accionGeneral()">Datos generales</button></li>
				<li><button onclick="accionEstiloVida()">Estilo de vida</button></li>
				<li><button onclick="accionPadecimiento()">Padecimientos</button></li>
				<li><button onclick="accionProblema()">Problemas medicos</button></li>
				<li><button onclick="accionAntecedente()">Antecedentes familiares</button></li>
			</ul>
		</nav>
	</header>
	
	<section class="section-frame-hojaClinica">
		<div class="contact-form" name="general" id="general">
        <h1>Datos generales</h1>
        <form name="datosGenerales" id="datosGenerales" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="txtb">
                <label for="">Peso (Kg)</label>
                <input type="number" name="peso" class="hoja-si" />
            </div>

            <div class="txtb">
                <label for="">Estatura (m)</label>
                <input type="number" name="estatura" class="hoja-si" />
            </div>

            <div class="txtb">
                <label for="">Mensaje</label>
                <textarea name="motivoCita" id="motivoCita" cols="30" rows="10"></textarea>
            </div>

            <div class="subtituloHojaClinicaRadio">
                <label for="" class="subtitulo">Sexo</label>

                <div class="contRadio">
                    <div class="conjuntoRadio">
                        <label class="labelRadio" for="">Masulino</label>
                        <input class="inputRadio" type="radio" name="sexo" class="hoja-si" value="m" />
                    </div>


                    <div class="conjuntoRadio">
                        <label class="labelRadio" for="">Femenino</label>
                        <input class="inputRadio" type="radio" name="sexo" class="hoja-si" value="f" />
                    </div>
                </div>
            </div>
            <input class="btn" type="button" name="guardarGenerales" value="Guardar Datos" id="guardarGenerales"
                onclick="agregarDatosGenerales()" />

        </form>
    </div>
    
    <div class="contact-form" name="padecimientos" id="padecimientos">
        <h1>Padecimientos</h1>
        <form name="datosPadecimientos" id="datosPadecimientos" action="" method="post" accept-charset="utf-8"
            enctype="multipart/form-data">
            <div class="txtb">
                <label for="">rinitis</label>
                <input type="checkbox" name="rinitis" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">dematitis</label>
                <input type="checkbox" name="dematitis" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">urticaria</label>
                <input type="checkbox" name="urticaria" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">ermatitis</label>
                <input type="checkbox" name="medicamento" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">Otra</label>
                <input type="checkbox" name="otra" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">¿Cual?</label>
                <input type="text" name="otraText" class="hoja-si" />
            </div>
            <div class="subtituloHojaClinicaRadio">
                <label for="" class="subtitulo">¿Toma medicamento?</label>

                <div class="contRadio">
                    <div class="conjuntoRadio">
                        <label class="labelRadio" for="">Si</label>
                        <input class="inputRadio" type="radio" name="tomaMed" class="hoja-si" value="1" />
                    </div>


                    <div class="conjuntoRadio">
                        <label class="labelRadio" for="">No</label>
                        <input class="inputRadio" type="radio" name="tomaMed" class="hoja-si" value="0" />
                    </div>
                </div>
            </div>
            <div class="txtb">
                <label for="">¿Cual?</label>
                <input type="text" name="medicamento" class="hoja-si" />
            </div>
            <input class="btn" type="button" name="guardarPadecimientos" value="Guardar Datos" id="guardarGenerales"
                onclick="agregarDatosPadecimientos()" />

        </form>
    </div>
    
    <div class="contact-form" name="problemas" id="problemas">
        <h1>Problemas</h1>
        <form name="datosProblemas" id="datosProblemas" action="" method="post" accept-charset="utf-8"
            enctype="multipart/form-data">
            <div class="txtb">
                <label for="">Cardiacos</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="5"/>
            </div>
            <div class="txtb">
                <label for="">Circulación</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="6"/>
            </div>
            <div class="txtb">
                <label for="">Presión arterial</label>
                <input type="checkbox" name="urticaria" class="hoja-si" value="7"/>
            </div>
            <div class="txtb">
                <label for="">Endocrino</label>
                <input type="checkbox" name="medicamento" class="hoja-si" value="8"/>
            </div>
            <div class="txtb">
                <label for="">Digestivo</label>
                <input type="checkbox" name="otra" class="hoja-si" value="9"/>
            </div>
            <div class="txtb">
                <label for="">Tensión Arterial</label>
                <input type="checkbox" name="otraText" class="hoja-si" value="10"/>
            </div>
            <div class="txtb">
                <label for="">Neurológicas</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="11"/>
            </div>
            <div class="txtb">
                <label for="">Sufre Convoluciones</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="12"/>
            </div>
            <div class="txtb">
                <label for="">Otra</label>
                <input type="checkbox" name="otro" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">¿Cual?</label>
                <input type="text" name="otra" class="hoja-si" />
            </div>
            <input class="btn" type="button" name="guardarPadecimientos" value="Guardar Datos" id="guardarGenerales"
                onclick="agregarDatosProblemas()" />

        </form>
    </div>
    
     <div class="contact-form" name="antecedentes" id="antecedentes">
        <h1>Antecedentes</h1>
        <h2>Mama</h2>
        <form name="datosMama" id="datosMama" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="txtb">
                <label for="">Cardiacos</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="5"/>
            </div>
            <div class="txtb">
                <label for="">Circulación</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="6"/>
            </div>
            <div class="txtb">
                <label for="">Presión arterial</label>
                <input type="checkbox" name="urticaria" class="hoja-si" value="7"/>
            </div>
            <div class="txtb">
                <label for="">Endocrino</label>
                <input type="checkbox" name="medicamento" class="hoja-si" value="8"/>
            </div>
            <div class="txtb">
                <label for="">Digestivo</label>
                <input type="checkbox" name="otra" class="hoja-si" value="9"/>
            </div>
            <div class="txtb">
                <label for="">Tensión Arterial</label>
                <input type="checkbox" name="otraText" class="hoja-si" value="10"/>
            </div>
            <div class="txtb">
                <label for="">Neurológicas</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="11"/>
            </div>
            <div class="txtb">
                <label for="">Sufre Convoluciones</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="12"/>
            </div>
            <div class="txtb">
                <label for="">Otra</label>
                <input type="checkbox" name="otro" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">¿Cual?</label>
                <input type="text" name="otra" class="hoja-si" />
            </div>
            <input class="btn" type="button" name="guardarPadecimientos" value="Guardar Datos" id="guardarGenerales"
                onclick="agregarDatosMama()" />

        </form>
        <h2>Papa</h2>
        <form name="datosPapa" id="datosPapa" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="txtb">
                <label for="">Cardiacos</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="5"/>
            </div>
            <div class="txtb">
                <label for="">Circulación</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="6"/>
            </div>
            <div class="txtb">
                <label for="">Presión arterial</label>
                <input type="checkbox" name="urticaria" class="hoja-si" value="7"/>
            </div>
            <div class="txtb">
                <label for="">Endocrino</label>
                <input type="checkbox" name="medicamento" class="hoja-si" value="8"/>
            </div>
            <div class="txtb">
                <label for="">Digestivo</label>
                <input type="checkbox" name="otra" class="hoja-si" value="9"/>
            </div>
            <div class="txtb">
                <label for="">Tensión Arterial</label>
                <input type="checkbox" name="otraText" class="hoja-si" value="10"/>
            </div>
            <div class="txtb">
                <label for="">Neurológicas</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="11"/>
            </div>
            <div class="txtb">
                <label for="">Sufre Convoluciones</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="12"/>
            </div>
            <div class="txtb">
                <label for="">Otra</label>
                <input type="checkbox" name="otro" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">¿Cual?</label>
                <input type="text" name="otra" class="hoja-si" />
            </div>
            <input class="btn" type="button" name="guardarPadecimientos" value="Guardar Datos" id="guardarGenerales"
                onclick="agregarDatosMama()" />

        </form>
        <h2>Abuelos</h2>
        <form name="datosAbuelos" id="datosAbuelos" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="txtb">
                <label for="">Cardiacos</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="5"/>
            </div>
            <div class="txtb">
                <label for="">Circulación</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="6"/>
            </div>
            <div class="txtb">
                <label for="">Presión arterial</label>
                <input type="checkbox" name="urticaria" class="hoja-si" value="7"/>
            </div>
            <div class="txtb">
                <label for="">Endocrino</label>
                <input type="checkbox" name="medicamento" class="hoja-si" value="8"/>
            </div>
            <div class="txtb">
                <label for="">Digestivo</label>
                <input type="checkbox" name="otra" class="hoja-si" value="9"/>
            </div>
            <div class="txtb">
                <label for="">Tensión Arterial</label>
                <input type="checkbox" name="otraText" class="hoja-si" value="10"/>
            </div>
            <div class="txtb">
                <label for="">Neurológicas</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="11"/>
            </div>
            <div class="txtb">
                <label for="">Sufre Convoluciones</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="12"/>
            </div>
            <div class="txtb">
                <label for="">Otra</label>
                <input type="checkbox" name="otro" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">¿Cual?</label>
                <input type="text" name="otra" class="hoja-si" />
            </div>
            <input class="btn" type="button" name="guardarPadecimientos" value="Guardar Datos" id="guardarGenerales"
                onclick="agregarDatosMama()" />

        </form>
    </div>
    <div class="contact-form" id="alimentacion" name="alimentacion">
        <h1>Alimentacion y estilo de vida.</h1>

	    	<form name="datosAlimentacion" id="datosAlimentacion" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	    		<div class="txtb">
	            <label for="">De la escala del 1 (Solo consumo comida chatarra) al 10 (Solo consumo comida saludable),
	                ¿Cómo considera su alimentación? </label>
	            <input type="number" name="alimentacion" class="hoja-si" />
	        </div>
	
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">Modo de vida</label>
	
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Activa</label>
	                    <input type="radio" name="modoVida" class="hoja-si" value="1" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>Sedentaria</label>
	                    <input type="radio" name="modoVida" class="hoja-si" value="0" />
	                </div>
	            </div>
	        </div>
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">¿Realiza actividad fisica?</label>
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Si</label>
	                    <input type="radio" name="actFisica" class="hoja-si" value="1" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>No</label>
	                    <input type="radio" name="actFisica" class="hoja-si" value="0" />
	                </div>
	            </div>
	        </div>
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">¿Fuma regularmente?</label>
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Si</label>
	                    <input type="radio" name="fuma" class="hoja-si" value="1" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>No</label>
	                    <input type="radio" name="fuma" class="hoja-si" value="0" />
	                </div>
	            </div>
	        </div>
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">¿Ingiere bebidas alcohólicas regularmente?</label>
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Si</label>
	                    <input type="radio" name="bebe" class="hoja-si" value="1" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>No</label>
	                    <input type="radio" name="bebe" class="hoja-si" value="0" />
	                </div>
	            </div>
	        </div>
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">¿Ingiere drogas?</label>
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Si</label>
	                    <input type="radio" name="drogas" class="hoja-si" value="1" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>No</label>
	                    <input type="radio" name="drogas" class="hoja-si" value="0" />
	                </div>
	            </div>
	        </div>
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">¿Como considera su calidad de sueño?</label>
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Buena</label>
	                    <input type="radio" name="sueno" class="hoja-si" value="3" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>Regular</label>
	                    <input type="radio" name="sueno" class="hoja-si" value="2" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>Mala</label>
	                    <input type="radio" name="sueno" class="hoja-si" value="1" />
	                </div>
	            </div>
	        </div>
	
	        <input class="btn" type="button" name="guardarAlimentacion" value="Guardar Datos" id="guardarAlimentacion"
	            onclick="agregarAlimentacion()" />
	            <input class="btn" type="button" name="envio" value="Enviar datos" id="envio" onclick="enviarDatos()"/>
	    	</form>
    </div>
	</section>
	<!--
	<div class="contact-form" name="general" id="general">
        <h1>Datos generales</h1>
        <form name="datosGenerales" id="datosGenerales" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="txtb">
                <label for="">Peso (Kg)</label>
                <input type="number" name="peso" class="hoja-si" />
            </div>

            <div class="txtb">
                <label for="">Estatura (m)</label>
                <input type="number" name="estatura" class="hoja-si" />
            </div>

            <div class="txtb">
                <label for="">Mensaje</label>
                <textarea name="motivoCita" id="motivoCita" cols="30" rows="10"></textarea>
            </div>

            <div class="subtituloHojaClinicaRadio">
                <label for="" class="subtitulo">Sexo</label>

                <div class="contRadio">
                    <div class="conjuntoRadio">
                        <label class="labelRadio" for="">Masulino</label>
                        <input class="inputRadio" type="radio" name="sexo" class="hoja-si" value="m" />
                    </div>


                    <div class="conjuntoRadio">
                        <label class="labelRadio" for="">Femenino</label>
                        <input class="inputRadio" type="radio" name="sexo" class="hoja-si" value="f" />
                    </div>
                </div>
            </div>
            <input class="btn" type="button" name="guardarGenerales" value="Guardar Datos" id="guardarGenerales"
                onclick="agregarDatosGenerales()" />

        </form>
    </div>
    
    <div class="contact-form" name="padecimientos" id="padecimientos">
        <h1>Padecimientos</h1>
        <form name="datosPadecimientos" id="datosPadecimientos" action="" method="post" accept-charset="utf-8"
            enctype="multipart/form-data">
            <div class="txtb">
                <label for="">rinitis</label>
                <input type="checkbox" name="rinitis" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">dematitis</label>
                <input type="checkbox" name="dematitis" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">urticaria</label>
                <input type="checkbox" name="urticaria" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">ermatitis</label>
                <input type="checkbox" name="medicamento" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">Otra</label>
                <input type="checkbox" name="otra" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">¿Cual?</label>
                <input type="text" name="otraText" class="hoja-si" />
            </div>
            <div class="subtituloHojaClinicaRadio">
                <label for="" class="subtitulo">¿Toma medicamento?</label>

                <div class="contRadio">
                    <div class="conjuntoRadio">
                        <label class="labelRadio" for="">Si</label>
                        <input class="inputRadio" type="radio" name="tomaMed" class="hoja-si" value="1" />
                    </div>


                    <div class="conjuntoRadio">
                        <label class="labelRadio" for="">No</label>
                        <input class="inputRadio" type="radio" name="tomaMed" class="hoja-si" value="0" />
                    </div>
                </div>
            </div>
            <div class="txtb">
                <label for="">¿Cual?</label>
                <input type="text" name="medicamento" class="hoja-si" />
            </div>
            <input class="btn" type="button" name="guardarPadecimientos" value="Guardar Datos" id="guardarGenerales"
                onclick="agregarDatosPadecimientos()" />

        </form>
    </div>
    
    <div class="contact-form" name="problemas" id="problemas">
        <h1>Problemas</h1>
        <form name="datosProblemas" id="datosProblemas" action="" method="post" accept-charset="utf-8"
            enctype="multipart/form-data">
            <div class="txtb">
                <label for="">Cardiacos</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="5"/>
            </div>
            <div class="txtb">
                <label for="">Circulación</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="6"/>
            </div>
            <div class="txtb">
                <label for="">Presión arterial</label>
                <input type="checkbox" name="urticaria" class="hoja-si" value="7"/>
            </div>
            <div class="txtb">
                <label for="">Endocrino</label>
                <input type="checkbox" name="medicamento" class="hoja-si" value="8"/>
            </div>
            <div class="txtb">
                <label for="">Digestivo</label>
                <input type="checkbox" name="otra" class="hoja-si" value="9"/>
            </div>
            <div class="txtb">
                <label for="">Tensión Arterial</label>
                <input type="checkbox" name="otraText" class="hoja-si" value="10"/>
            </div>
            <div class="txtb">
                <label for="">Neurológicas</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="11"/>
            </div>
            <div class="txtb">
                <label for="">Sufre Convoluciones</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="12"/>
            </div>
            <div class="txtb">
                <label for="">Otra</label>
                <input type="checkbox" name="otro" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">¿Cual?</label>
                <input type="text" name="otra" class="hoja-si" />
            </div>
            <input class="btn" type="button" name="guardarPadecimientos" value="Guardar Datos" id="guardarGenerales"
                onclick="agregarDatosProblemas()" />

        </form>
    </div>
    
     <div class="contact-form" name="antecedentes" id="antecedentes">
        <h1>Datos generales</h1>
        <form name="datosMama" id="datosMama" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="txtb">
                <label for="">Cardiacos</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="5"/>
            </div>
            <div class="txtb">
                <label for="">Circulación</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="6"/>
            </div>
            <div class="txtb">
                <label for="">Presión arterial</label>
                <input type="checkbox" name="urticaria" class="hoja-si" value="7"/>
            </div>
            <div class="txtb">
                <label for="">Endocrino</label>
                <input type="checkbox" name="medicamento" class="hoja-si" value="8"/>
            </div>
            <div class="txtb">
                <label for="">Digestivo</label>
                <input type="checkbox" name="otra" class="hoja-si" value="9"/>
            </div>
            <div class="txtb">
                <label for="">Tensión Arterial</label>
                <input type="checkbox" name="otraText" class="hoja-si" value="10"/>
            </div>
            <div class="txtb">
                <label for="">Neurológicas</label>
                <input type="checkbox" name="rinitis" class="hoja-si" value="11"/>
            </div>
            <div class="txtb">
                <label for="">Sufre Convoluciones</label>
                <input type="checkbox" name="dematitis" class="hoja-si" value="12"/>
            </div>
            <div class="txtb">
                <label for="">Otra</label>
                <input type="checkbox" name="otro" class="hoja-si" />
            </div>
            <div class="txtb">
                <label for="">¿Cual?</label>
                <input type="text" name="otra" class="hoja-si" />
            </div>
            <input class="btn" type="button" name="guardarPadecimientos" value="Guardar Datos" id="guardarGenerales"
                onclick="agregarDatosMama()" />

        </form>
    </div>
    <div class="contact-form" id="alimentacion" name="alimentacion">
        <h1>Alimentacion y estilo de vida.</h1>

	    	<form name="datosAlimentacion" id="datosAlimentacion" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	    		<div class="txtb">
	            <label for="">De la escala del 1 (Solo consumo comida chatarra) al 10 (Solo consumo comida saludable),
	                ¿Cómo considera su alimentación? </label>
	            <input type="number" name="alimentacion" class="hoja-si" />
	        </div>
	
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">Modo de vida</label>
	
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Activa</label>
	                    <input type="radio" name="modoVida" class="hoja-si" value="1" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>Sedentaria</label>
	                    <input type="radio" name="modoVida" class="hoja-si" value="0" />
	                </div>
	            </div>
	        </div>
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">¿Realiza actividad fisica?</label>
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Si</label>
	                    <input type="radio" name="actFisica" class="hoja-si" value="1" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>No</label>
	                    <input type="radio" name="actFisica" class="hoja-si" value="0" />
	                </div>
	            </div>
	        </div>
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">¿Fuma regularmente?</label>
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Si</label>
	                    <input type="radio" name="fuma" class="hoja-si" value="1" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>No</label>
	                    <input type="radio" name="fuma" class="hoja-si" value="0" />
	                </div>
	            </div>
	        </div>
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">¿Ingiere bebidas alcohólicas regularmente?</label>
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Si</label>
	                    <input type="radio" name="bebe" class="hoja-si" value="1" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>No</label>
	                    <input type="radio" name="bebe" class="hoja-si" value="0" />
	                </div>
	            </div>
	        </div>
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">¿Ingiere drogas?</label>
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Si</label>
	                    <input type="radio" name="drogas" class="hoja-si" value="1" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>No</label>
	                    <input type="radio" name="drogas" class="hoja-si" value="0" />
	                </div>
	            </div>
	        </div>
	        <div class="subtituloHojaClinicaRadio">
	            <label class="subtitulo">¿Como considera su calidad de sueño?</label>
	            <div class="contRadio">
	                <div class="conjuntoRadio">
	                    <label>Buena</label>
	                    <input type="radio" name="sueno" class="hoja-si" value="3" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>Regular</label>
	                    <input type="radio" name="sueno" class="hoja-si" value="2" />
	                </div>
	                <div class="conjuntoRadio">
	                    <label>Mala</label>
	                    <input type="radio" name="sueno" class="hoja-si" value="1" />
	                </div>
	            </div>
	        </div>
	
	        <input class="btn" type="button" name="guardarAlimentacion" value="Guardar Datos" id="guardarAlimentacion"
	            onclick="agregarAlimentacion()" />
	            <input type="button" name="envio" value="Enviar datos" id="envio" onclick="enviarDatos()"/>
	    	</form>
    </div>
		-->
</body>

</html>