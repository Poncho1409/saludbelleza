<?php
echo $_POST["descripcion"];
echo $_POST["costo"];

if((isset($_POST["descripcion"]))&& ($_POST["descripcion"]!='') && (isset($_POST["costo"]))&& ($_POST["costo"]!='')){
    require_once("../modelos/conexion.php");
    $descripcion = $_POST["descripcion"];
    $costo =$_POST["costo"];
    $insertar4 = new Service();
    $datos4 = $insertar4->getInsertarP($descripcion,$costo);
    //var_dump($datos4);
    //print "todobien";
    header("Location: htttp://localhost/SaludYbelleza/vistas/insertarProductos.php");

}





?>