<?php

class Service {
    
    private $servicio;
    private $db;
    private $actualizar;

    public function __construct() {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=smbb', "cliente-php", "n0m3l0");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getProductos() {

        self::setNames();
        $sql = "SELECT  * FROM producto";
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }
        return $this->servicio;
        $this->db = null;
    }

    public function getInsertarU($nombre, $apellidoP,$apellidoM,$email,$password,$telefono) {

        self::setNames();
        $sql = "INSERT INTO cliente (nombre, apellidoP, apellidoM, email, password1 ,tel) VALUES ('". $nombre . "', '" . $apellidoP. "','".$apellidoM."','".$email."','".$password."','".$telefono."')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function getInsertarD($nombre, $apellidoP,$apellidoM,$email,$password,$telefono) {

        self::setNames();
        $sql = "INSERT INTO doctor (nombre, apellidoP, apellidoM, email, password1 ,tel) VALUES ('". $nombre . "', '" . $apellidoP. "','".$apellidoM."','".$email."','".$password."','".$telefono."')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function getInsertarP($nombre,$descripcion, $costo,$id_d) {

        self::setNames();
        $sql = "INSERT INTO producto (nombre, descripcion, costo, id_d) VALUES ('".$nombre."','". $descripcion . "', '" . $costo. "','".$id_d."')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

   
    public function setDeleteProducto($id1){
        self::setNames();
        $sql = "DELETE FROM producto WHERE id_producto='".$id1."'";
        $result =$this->db->query($sql);
    }


    public function setActualizarProducto($id_producto,$nombre,$descripcion,$costo,$id_d){
        self::setNames();
        $sql = "UPDATE producto
        SET nombre = '".$nombre."',
            descripcion = '".$descripcion."',
            costo = '".$costo."',
            id_d = '".$id_d."',
        WHERE id_producto = $id_producto";
        $result =$this->db->query($sql);
        print "Todo bien";
        
    } 
    
    
    public function setUnproducto($id){
        self::setNames();
        $sql = "SELECT *  FROM producto WHERE id_producto= '".$id."'";
        foreach ($this->db->query($sql) as $res) {
            $this->actualizar[] = $res;
        }
        return $this->actualizar;
        $this->db = null;
    }
	
	public function registrarCita($fecha,$hora,$total,$id_c,$id_tipo,$id_d){
		self::setNames();
		
        $sql = "insert into cita(fecha,hora,total,id_c,id_tipo,id_d) values('".$fecha."','".$hora."',".$total.",".$id_c.",".$id_tipo.",".$id_d.")";
		$result =$this->db->query($sql);
		
		if ($result) {
            return true;
        } else {
            return false;
        }
	}
	
	public function registrarHistorial($modoVida,$actFisica,$fuma,$bebe,$sueno,$drogas,$sexo,$peso,$estatura,$id_c,$padecimientos,$problemas,$problemasMama,$problemasPapa,$problemasAbuelos,$problemasOtra,$problemasMamaOtra,$problemasPapaOtra,$problemasAbuelosOtra,$medicamento){
		self::setNames();
		$sql = "begin";
		$result =$this->db->query($sql);
		
        $sql = "insert into alimentacion(modovida,actfisica,fuma,bebidas_alc,calidad_sueno,drogas_consumo) values(".$modoVida.",".$actFisica.",".$fuma.",".$bebe.",".$sueno.",".$drogas.")";
		$result =$this->db->query($sql);
		var_dump($result);
		echo "<br>";
		
		$sql = "insert into historialclinico(sexo,peso,estatura,id_c,id_a) values('".$sexo."',".$peso.",".$estatura.",".$id_c.",last_insert_id())";
		$result =$this->db->query($sql);
		var_dump($result);
		
		$sql = "select last_insert_id() as id";
		$result =$this->db->query($sql);
		var_dump($result);
		echo "<br>"; 
		$resultado = $result->fetch();
		$lastID = $resultado["id"];
		var_dump($resultado);
		
		foreach ($padecimientos as $key => $value) {
			echo $value."<br>";
			$sql = "insert into padecimiento_historial(id_padecimiento,id_h) values(".$value.",".$lastID.")";
			$result =$this->db->query($sql);
			var_dump($result);
		}
		
		foreach ($problemas as $key => $value) {
			echo $value."<br>";
			$sql = "insert into problema_historial(id_problema,id_h) values(".$value.",".$lastID.")";
			$result =$this->db->query($sql);
			var_dump($result);
		}
		
		foreach ($problemasMama as $key => $value) {
			echo $value."<br>";
			$sql = "insert into problema_mama_historial(id_problema,id_h) values(".$value.",".$lastID.")";
			$result =$this->db->query($sql);
			var_dump($result);
		}
		
		foreach ($problemasPapa as $key => $value) {
			echo $value."<br>";
			$sql = "insert into problema_papa_historial(id_problema,id_h) values(".$value.",".$lastID.")";
			$result =$this->db->query($sql);
			var_dump($result);
		}
		
		foreach ($problemasAbuelos as $key => $value) {
			echo $value."<br>";
			$sql = "insert into problema_abuelos_historial(id_problema,id_h) values(".$value.",".$lastID.")";
			$result =$this->db->query($sql);
			var_dump($result);
		}
		
		if (isset($problemasOtra)) {
			echo "33333333333333333 otra mia<br>";
			$sql = "select id_problema as id from problema where nombre = '".$problemasOtra."'";
			$result =$this->db->query($sql);
			$resultado = $result->fetch();
			var_dump($resultado);echo "<br>";
			if ($resultado == FALSE) {
				$sql = "insert into problema(nombre) values('".$problemasOtra."')";
				$result =$this->db->query($sql);
				var_dump($result);echo "<br>";
				$sql = "insert into problema_historial(id_problema,id_h) values(last_insert_id(),".$lastID.")";
				$result =$this->db->query($sql);
				var_dump($result);echo "<br>";
				
			}else{
				$id = $resultado["id"];
				$sql = "insert into problema_historial(id_problema,id_h) values(".$id.",".$lastID.")";
				$result =$this->db->query($sql);
				var_dump($result);echo "<br>";
			}
		}
		
		if (isset($problemasMamaOtra)) {
			echo "################### mama<br>";
			$sql = "select id_problema as id from problema where nombre = '".$problemasMamaOtra."'";
			$result =$this->db->query($sql);
			$resultado = $result->fetch();
			var_dump($resultado);echo "<br>";
			if ($resultado == FALSE) {
				$sql = "insert into problema(nombre) values('".$problemasMamaOtra."')";
				$result =$this->db->query($sql);
				$sql = "insert into problema_mama_historial(id_problema,id_h) values(last_insert_id(),".$lastID.")";
				$result =$this->db->query($sql);
				
			}else{
				$id = $resultado["id"];
				$sql = "insert into problema_mama_historial(id_problema,id_h) values(".$id.",".$lastID.")";
				$result =$this->db->query($sql);
			}
		}
		
		if (isset($problemasPapaOtra)) {
			echo "%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% papa<br>";
			$sql = "select id_problema as id from problema where nombre = '".$problemasPapaOtra."'";
			$result =$this->db->query($sql);
			$resultado = $result->fetch();
			if ($resultado == FALSE) {
				$sql = "insert into problema(nombre) values('".$problemasPapaOtra."')";
				$result =$this->db->query($sql);
				$sql = "insert into problema_papa_historial(id_problema,id_h) values(last_insert_id(),".$lastID.")";
				$result =$this->db->query($sql);
				
			}else{
				$id = $resultado["id"];
				$sql = "insert into problema_papa_historial(id_problema,id_h) values(".$id.",".$lastID.")";
				$result =$this->db->query($sql);
			}
		}
		
		if (isset($problemasAbuelosOtra)) {
			echo "))))))))))))))))))))))))))))))abuelos<br>";
			$sql = "select id_problema as id from problema where nombre = '".$problemasAbuelosOtra."'";
			$result =$this->db->query($sql);
			$resultado = $result->fetch();
			if ($resultado == FALSE) {
				$sql = "insert into problema(nombre) values('".$problemasAbuelosOtra."')";
				$result =$this->db->query($sql);
				$sql = "insert into problema_abuelos_historial(id_problema,id_h) values(last_insert_id(),".$lastID.")";
				$result =$this->db->query($sql);
				
				
			}else{
				$id = $resultado["id"];
				$sql = "insert into problema_abuelos_historial(id_problema,id_h) values(".$id.",".$lastID.")";
				$result =$this->db->query($sql);
			}
		}
		
		if (isset($medicamento)) {
			echo "<br>222222222222222222222222222<br>";
			$sql = "select id_medicamento as id from medicamento where nombre = '".$medicamento."'";
			$result =$this->db->query($sql);
			$resultado = $result->fetch();
			echo "<br>";var_dump($resultado);echo "<br>";
			if ($resultado == FALSE) {
				$sql = "insert into medicamento(nombre) values('".$medicamento."')";
				$result =$this->db->query($sql);
			
				$sql = "insert into medicamento_historial(id_medicamento,id_h) values(last_insert_id(),".$lastID.")";
				$result =$this->db->query($sql);
			}else{
				$id = $resultado["id"];
				$sql = "insert into medicamento_historial(id_medicamento,id_h) values(".$id.",".$lastID.")";
				$result =$this->db->query($sql);
			}
		}
		
		$sql = "commit";
		$result =$this->db->query($sql);
		
		return $result->fetch;
	}

	public function listarPadecimientos($problemasOtra){
		self::setNames();
			$sql = "select id_problema as id from problema where nombre = '".$problemasOtra."'";
			$result =$this->db->query($sql);
			$resultado = $result->fetch();
		return $resultado;     
	}
	
	public function listarProximasCitas($id_c,$fechaActual){
		self::setNames();
		$citas;
		$sql="select * from cita where id_c = ".$id_c." and fecha >= '".$fechaActual."'";
        foreach ($this->db->query($sql) as $res)
        {
            $citas[]=$res;
        }
        return $citas;
        $this->db=null; 
	}
	
	public function listarHistorialCitas($id_c,$fechaActual){
		self::setNames();
		$citas;
		$sql="select * from cita where id_c = ".$id_c." and fecha <= '".$fechaActual."'";
        foreach ($this->db->query($sql) as $res)
        {
            $citas[]=$res;
        }
        return $citas;
        $this->db=null; 
	}
	
	public function eliminarCita($id_c,$fechaActual){
		self::setNames();
		$sql = "delete from cita where id_c = ".$id_c." and fecha > '".$fechaActual."'";
        $res = $this->db->query($sql);
        return $res;
        $this->db=null;
	}
	
	public function actualizarCita($id_c,$fechaActual,$fechaNueva,$horaNueva){
		self::setNames();
		$sql = "update cita set fecha = '".$fechaNueva."',hora = '".$horaNueva."' where id_c = ".$id_c." and fecha > '".$fechaActual."'";
        $res = $this->db->query($sql);
        return $res;
        $this->db=null;
	}
	
	public function consultarClienteHistorial()
	{
		self::setNames();
		$resultado;
		$sql="select h.id_h, c.nombre, c.apellidoP, c.apellidoM from historialclinico h, cliente c where h.id_c=c.id_c";
        foreach ($this->db->query($sql) as $res)
        {
            $resultado[]=$res;
        }
        return $resultado;
        $this->db=null; 
	}
	
	public function consultarHistorial($id_h){
		self::setNames();
		$sql = "select h.id_h, c.nombre, c.apellidoP, c.apellidoM,h.sexo,h.peso,h.estatura from historialclinico h, cliente c where h.id_c=c.id_c and h.id_h = ".$id_h;
        $res = $this->db->query($sql);
		$resultado = $res->fetch();
        return $resultado;
		$this->db = null;
	}
	
	public function consultarAlimentacion($id_h){
		self::setNames();
		$sql = "select a.modovida,a.actfisica,a.fuma,a.bebidas_alc,a.calidad_sueno,a.drogas_consumo from alimentacion a, historialclinico h where a.id_a = h.id_a and h.id_h = ".$id_h;
        $res = $this->db->query($sql);
        $resultado = $res->fetch();
        return $resultado;
        $this->db=null;
	}
	
	public function consultarMedicamentos($id_h){
		self::setNames();
		$resultado;
		$sql="select m.nombre from medicamento m, medicamento_historial mh, historialclinico h where h.id_h = mh.id_h and m.id_medicamento = mh.id_medicamento and h.id_h = ".$id_h;
        foreach ($this->db->query($sql) as $res)
        {
            $resultado[]=$res;
        }
        return $resultado;
        $this->db=null; 
	}
	
	public function consultarPadecimientos($id_h){
		self::setNames();
		$resultado;
		$sql="select p.nombre from padecimiento p, padecimiento_historial ph, historialclinico h where h.id_h = ph.id_h and p.id_padecimiento = ph.id_padecimiento and h.id_h = ".$id_h;
        foreach ($this->db->query($sql) as $res)
        {
            $resultado[]=$res;
        }
        return $resultado;
        $this->db=null; 
	}
	
	public function consultarProblemas($id_h){
		self::setNames();
		$resultado;
		$sql="select p.nombre from problema p, problema_historial ph, historialclinico h where h.id_h = ph.id_h and p.id_problema = ph.id_problema and h.id_h = ".$id_h;
        foreach ($this->db->query($sql) as $res)
        {
            $resultado[]=$res;
        }
        return $resultado;
        $this->db=null; 
	}
	
	public function consultarAntePapa($id_h){
		self::setNames();
		$resultado;
		$sql="select p.nombre from problema p, problema_papa_historial ph, historialclinico h where h.id_h = ph.id_h and p.id_problema = ph.id_problema and h.id_h =".$id_h;
        foreach ($this->db->query($sql) as $res)
        {
            $resultado[]=$res;
        }
        return $resultado;
        $this->db=null; 
	}
	
	public function consultarAnteMama($id_h){
		self::setNames();
		$resultado;
		$sql="select p.nombre from problema p, problema_mama_historial ph, historialclinico h where h.id_h = ph.id_h and p.id_problema = ph.id_problema and h.id_h =".$id_h;
        foreach ($this->db->query($sql) as $res)
        {
            $resultado[]=$res;
        }
        return $resultado;
        $this->db=null; 
	}
	
	public function consultarAnteAbuelos($id_h){
		self::setNames();
		$resultado;
		$sql="select p.nombre from problema p, problema_abuelos_historial ph, historialclinico h where h.id_h = ph.id_h and p.id_problema = ph.id_problema and h.id_h =".$id_h;
        foreach ($this->db->query($sql) as $res)
        {
            $resultado[]=$res;
        }
        return $resultado;
        $this->db=null; 
	}

}
?>