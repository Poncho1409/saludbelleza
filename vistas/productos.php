<?php
include "encabezado.php";



require_once("../modelos/conexion.php");
$insertar5 = new Service();
$datos5 = $insertar5->getProductos();
//var_dump($datos5);
?>

<h3>Listado de productos</h3>
                <table>
                    <tr>
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
                            <?php if(isset($_SESSION['email'])){ ?>
                            <td> <a href='../controlador/controladorCarrito.php/?variable=<?php  echo $datos5[$i]['id_producto']; ?>' >añadir</a></td>
                            <?php } ?>
            
                            
                        </tr>
                        <?php
                    }
                    ?>


                </table>


                    

<?php
include "piepagina.php";

?>