<?php

if(isset($_GET["id"])){
    require_once("../modelos/conexion.php");
    $id_producto = $_GET["id"];
    $delete4 = new Service();
    $datos7 = $delete4->setDeleteProducto($id_producto);
    var_dump($datos7);
    HEADER("location: http://localhost/SaludYbelleza1/vistas/insertarProductos.php");
}

?>