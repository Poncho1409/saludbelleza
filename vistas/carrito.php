<?php 

include "encabezado.php";

$carrito1 =$_SESSION["carrito"];


?>


<h1>Tu carrito:</h1>

<?php 


var_dump($carrito1);
echo "<br>";


foreach($carrito1 as $i){
    echo $i."<br/>";

}
$total = 0;
echo "Total a pagar: $total";
?>


<?php
include "piepagina.php";

?>
