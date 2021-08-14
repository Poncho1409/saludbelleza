<?php session_start();

$producto =$_GET["variable"];

if((isset($_GET["variable"]))&& ($_GET["variable"]!='')){
array_push($_SESSION["carrito"],$producto);
var_dump($_SESSION["carrito"]);
}
header('Location: http://localhost/SaludYbelleza1/vistas/productos.php');






?>