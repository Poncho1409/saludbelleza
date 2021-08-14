var formulario = {};

function agregarDatosGenerales(){
	formulario["peso"] = document.datosGenerales.peso.value;
	formulario["sexo"] = document.datosGenerales.sexo.value;
	formulario["estatura"] = document.datosGenerales.estatura.value;
	
	alert(JSON.stringify(formulario));
}

function agregarDatosPadecimientos(){
	formulario["padecimientos"] = {};
	if(document.datosPadecimientos.rinitis.checked)
		formulario["padecimientos"]["rinitis"] = document.datosPadecimientos.rinitis.value;
	if(document.datosPadecimientos.dematitis.checked)
		formulario["padecimientos"]["dematitis"] = document.datosPadecimientos.dematitis.value;
	if(document.datosPadecimientos.urticaria.checked)
		formulario["padecimientos"]["urticaria"] = document.datosPadecimientos.urticaria.value;
	if(document.datosPadecimientos.ermatitis.checked)
		formulario["padecimientos"]["ermatitis"] = document.datosPadecimientos.ermatitis.value;
	if(document.datosPadecimientos.otra.checked)
		formulario["padecimientosOtra"] = document.datosPadecimientos.otraText.value;
	if(document.datosPadecimientos.tomaMed.value == "1")
		formulario["medicamento"] = document.datosPadecimientos.medicamento.value;
	alert(JSON.stringify(formulario));
}

function agregarDatosProblemas(){
	formulario["problemas"] = {}; 
	if(document.datosProblemas.cardiacos.checked)
		formulario["problemas"]["cardiacos"] = document.datosProblemas.cardiacos.value;
	if(document.datosProblemas.circulación.checked)
		formulario["problemas"]["circulación"] = document.datosProblemas.circulación.value;
	if(document.datosProblemas.presión.checked)
		formulario["problemas"]["presión"] = document.datosProblemas.presión.value;
	if(document.datosProblemas.endocrino.checked)
		formulario["problemas"]["endocrino"] = document.datosProblemas.endocrino.value;
	if(document.datosProblemas.digestivo.checked)
		formulario["problemas"]["digestivo"] = document.datosProblemas.digestivo.value;
	if(document.datosProblemas.tensión.checked)
		formulario["problemas"]["tensión"] = document.datosProblemas.tensión.value;
	if(document.datosProblemas.neurológicas.checked)
		formulario["problemas"]["neurológicas"] = document.datosProblemas.neurológicas.value;
	if(document.datosProblemas.convulsiones.checked)
		formulario["problemas"]["convulsiones"] = document.datosProblemas.convulsiones.value;
	if(document.datosProblemas.otro.checked)
		formulario["problemasOtra"] = document.datosProblemas.otra.value;
		
	alert(JSON.stringify(formulario));
}

function agregarDatosMama(){
	formulario["problemasMama"] = {}; 
	if(document.datosMama.cardiacos.checked)
		formulario["problemasMama"]["cardiacos"] = document.datosMama.cardiacos.value;
	if(document.datosMama.circulación.checked)
		formulario["problemasMama"]["circulación"] = document.datosMama.circulación.value;
	if(document.datosMama.presión.checked)
		formulario["problemasMama"]["presión"] = document.datosMama.presión.value;
	if(document.datosMama.endocrino.checked)
		formulario["problemasMama"]["endocrino"] = document.datosMama.endocrino.value;
	if(document.datosMama.digestivo.checked)
		formulario["problemasMama"]["digestivo"] = document.datosMama.digestivo.value;
	if(document.datosMama.tensión.checked)
		formulario["problemasMama"]["tensión"] = document.datosMama.tensión.value;
	if(document.datosMama.neurológicas.checked)
		formulario["problemasMama"]["neurológicas"] = document.datosMama.neurológicas.value;
	if(document.datosMama.convulsiones.checked)
		formulario["problemasMama"]["convulsiones"] = document.datosMama.convulsiones.value;
	if(document.datosMama.otro.checked)
		formulario["problemasMamaOtra"] = document.datosMama.otra.value;

	
	alert(JSON.stringify(formulario));
}

function agregarDatosPapa(){
	formulario["problemasPapa"] = {}; 
	if(document.datosPapa.cardiacos.checked)
		formulario["problemasPapa"]["cardiacos"] = document.datosPapa.cardiacos.value;
	if(document.datosPapa.circulación.checked)
		formulario["problemasPapa"]["circulación"] = document.datosPapa.circulación.value;
	if(document.datosPapa.presión.checked)
		formulario["problemasPapa"]["presión"] = document.datosPapa.presión.value;
	if(document.datosPapa.endocrino.checked)
		formulario["problemasPapa"]["endocrino"] = document.datosPapa.endocrino.value;
	if(document.datosPapa.digestivo.checked)
		formulario["problemasPapa"]["digestivo"] = document.datosPapa.digestivo.value;
	if(document.datosPapa.tensión.checked)
		formulario["problemasPapa"]["tensión"] = document.datosPapa.tensión.value;
	if(document.datosPapa.neurológicas.checked)
		formulario["problemasPapa"]["neurológicas"] = document.datosPapa.neurológicas.value;
	if(document.datosPapa.convulsiones.checked)
		formulario["problemasPapa"]["convulsiones"] = document.datosPapa.convulsiones.value;
	if(document.datosPapa.otro.checked)
		formulario["problemasPapaOtra"] = document.datosPapa.otra.value;
	
	alert(JSON.stringify(formulario));
}

function agregarDatosAbuelos(){
	formulario["problemasAbuelos"] = {}; 
	if(document.datosAbuelos.cardiacos.checked)
		formulario["problemasAbuelos"]["cardiacos"] = document.datosAbuelos.cardiacos.value;
	if(document.datosAbuelos.circulación.checked)
		formulario["problemasAbuelos"]["circulación"] = document.datosAbuelos.circulación.value;
	if(document.datosAbuelos.presión.checked)
		formulario["problemasAbuelos"]["presión"] = document.datosAbuelos.presión.value;
	if(document.datosAbuelos.endocrino.checked)
		formulario["problemasAbuelos"]["endocrino"] = document.datosAbuelos.endocrino.value;
	if(document.datosAbuelos.digestivo.checked)
		formulario["problemasAbuelos"]["digestivo"] = document.datosAbuelos.digestivo.value;
	if(document.datosAbuelos.tensión.checked)
		formulario["problemasAbuelos"]["tensión"] = document.datosAbuelos.tensión.value;
	if(document.datosAbuelos.neurológicas.checked)
		formulario["problemasAbuelos"]["neurológicas"] = document.datosAbuelos.neurológicas.value;
	if(document.datosAbuelos.convulsiones.checked)
		formulario["problemasAbuelos"]["convulsiones"] = document.datosAbuelos.convulsiones.value;
	if(document.datosAbuelos.otro.checked)
		formulario["problemasAbuelosOtra"] = document.datosAbuelos.otra.value;
	
	alert(JSON.stringify(formulario));
}

function agregarAlimentacion(){
	formulario["alimentacion"] = document.datosAlimentacion.alimentacion.value;
	formulario["modoVida"] = document.datosAlimentacion.modoVida.value;
	formulario["actFisica"] = document.datosAlimentacion.actFisica.value;
	formulario["fuma"] = document.datosAlimentacion.fuma.value;
	formulario["bebe"] = document.datosAlimentacion.bebe.value;
	formulario["drogas"] = document.datosAlimentacion.drogas.value;
	formulario["sueno"] = document.datosAlimentacion.sueno.value;
	
	alert(JSON.stringify(formulario));
}

function enviarDatos(){
	
	const xhr = new XMLHttpRequest();
	xhr.open("POST","../controlador/agregarHojaClinica.php");
	xhr.setRequestHeader("Content-Type","application/json");
	xhr.send(JSON.stringify(formulario));
	
	// 4. This will be called after the response is received
	xhr.onload = function() {
	  if (xhr.status != 200) { // analyze HTTP status of the response
	    //error
	    alert("Lo sentimos, ocurrio un error al registrar sus dato despues nuevamente")
	  } else { // show the result
	    alert("Se registraron con exito sus datos"); // responseText is the server
	  }
	};
	
	xhr.onprogress = function(event) {
	  if (event.lengthComputable) {
	    alert(`Received ${event.loaded} of ${event.total} bytes`);
	  } else {
	    alert(`Received ${event.loaded} bytes`); // no Content-Length
	  }
	
	};
	
	xhr.onerror = function() {
	  alert("Request failed");
	};	
}

function accionGeneral(){
	document.getElementById("general").style.display = 'block';
	document.getElementById("padecimientos").style.display = 'none';
	document.getElementById("problemas").style.display = 'none';
	document.getElementById("antecedentes").style.display = 'none';
	document.getElementById("alimentacion").style.display = 'none';
}

function chale(){
	alert("chale");
}

function accionEstiloVida(){
	document.getElementById("general").style.display = 'none';
	document.getElementById("padecimientos").style.display = 'none';
	document.getElementById("problemas").style.display = 'none';
	document.getElementById("antecedentes").style.display = 'none';
	document.getElementById("alimentacion").style.display = 'block';
}

function accionPadecimiento(){
	var general = document.getElementById("general").style.display = 'none';
	var padecimiento = document.getElementById("padecimientos").style.display = 'block';
	var problemas = document.getElementById("problemas").style.display = 'none';
	var antecedentes = document.getElementById("antecedentes").style.display = 'none';
	var alime = document.getElementById("alimentacion").style.display = 'none';
	
	general.style.display = 'none';
	padecimiento.style.display = 'block';
	problemas.style.display = 'none';
	antecedentes.style.display = 'none';
	alime.style.display = 'none';
}

function accionProblema(){
	document.getElementById("general").style.display = 'none';
	document.getElementById("padecimientos").style.display = 'none';
	document.getElementById("problemas").style.display = 'block';
	document.getElementById("antecedentes").style.display = 'none';
	document.getElementById("alimentacion").style.display = 'none';
}

function accionAntecedente(){
	document.getElementById("general").style.display = 'none';
	document.getElementById("padecimientos").style.display = 'none';
	document.getElementById("problemas").style.display = 'none';
	document.getElementById("antecedentes").style.display = 'block';
	document.getElementById("alimentacion").style.display = 'none';
}

document.getElementById("general").onload = accionGeneral();
