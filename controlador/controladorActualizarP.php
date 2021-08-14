<?php 


if((isset($_GET["id"]))&& ($_GET["id"]!='')){
    $id=$_GET["id"];
    echo $id;
    require_once("../modelos/conexion.php");
    $insertar4 = new Service();
    $datos4 = $insertar4->setUnproducto($id);
    var_dump($datos4);
}else{
    
}

?>