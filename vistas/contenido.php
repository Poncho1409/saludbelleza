<?php
include "encabezado.php";

if(isset($_SESSION["email"])){
    echo $_SESSION["email"];
    var_dump($_SESSION);

    
}elseif(isset($_SESSION["email1"])){
    echo $_SESSION["email1"];
    echo $_SESSION["id_d"];
    var_dump($_SESSION);
}elseif(isset($_SESSION["admin1"])){
        echo $_SESSION["admin1"];

        var_dump($_SESSION);

}else{
    
}
?>