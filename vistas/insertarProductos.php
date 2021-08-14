<?php

include 'encabezado.php';


if((isset($_POST["descripcion"]))&& ($_POST["descripcion"]!='') && (isset($_POST["costo"]))&& ($_POST["costo"]!='')&&
(isset($_POST["nombreProducto"]))&& ($_POST["nombreProducto"]!='')){
    require_once("../modelos/conexion.php");
    $descripcion = $_POST["descripcion"];
    $costo =$_POST["costo"];
    $id_d = $_SESSION["id_d"];
    $nombreProductos = $_POST["nombreProducto"];
    $insertar4 = new Service();
    $datos4 = $insertar4->getInsertarP($nombreProductos,$descripcion,$costo,$id_d);
    var_dump($datos4);
}
require_once("../modelos/conexion.php");
$insertar5 = new Service();
$datos5 = $insertar5->getProductos();
?>




<form action="#" method="post">
    <div class="inputBox"> 
            <label>Nombre:</label>
            <input type="text" name="nombreProducto" required>
           
    </div>
    <div class="inputBox">
            <label>descripcion:</label>
            <input type="text" name="descripcion" required>
            
    </div>
    <div class="inputBox">
            <label>costo:</label>
            <input type="text" name="costo" required>
            
    </div>
    <input class="button" type="submit" name="ok" value="Agregar">

</form>
<h3>Listado de productos</h3>
                <table>
                    <tr>
                        <td><strong>Nombre:</strong></td>
                        <td><strong>DESCRIPCION:</strong></td>
                        <td><strong>COSTO</strong></td>
                       
                        
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos5); $i++) {
                        ?>
                        <tr>
                            <td><?php echo $datos5[$i]["nombre"]; ?></td>
                            <td><?php echo $datos5[$i]["descripcion"]; ?></td>
                            <td>$<?php echo $datos5[$i]["costo"]; ?></td>
                            <td><a href="actualizarProducto.php/?id=<?php echo $datos5[$i]["id_producto"]; ?>">Actualizar</a></td>
                            <td><a href="../controlador/deleteP.php/?id=<?php echo $datos5[$i]["id_producto"]; ?>">Borrar</a></td>

                        </tr>
                        <?php
                    }
                    ?>
                </table>
<?php

include 'piepagina.php';

?>