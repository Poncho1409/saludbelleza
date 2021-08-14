<?php session_start();
if (isset($_SESSION['email'])) {
	header('Location: ../index.php');
	die();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    print "se enviarion los datos";
    $email=$_POST["correo"];
    $clave=$_POST["password"];
    $password = hash('sha512', $clave);
    echo "<br>";
    try {
		$conexion = new PDO('mysql:host=localhost;dbname=smbb', 'cliente-php', 'n0m3l0');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
    echo $password."</br> todo bien";
    echo "<br>";
    var_dump($password);
	$statement = $conexion->prepare('SELECT * FROM cliente WHERE email = :email AND password1 = :password2');
	$statement->execute(array(
			':email' => $email,
			':password2' => $password
        ));
    var_dump($statement);
    echo "<br>";
    $resultado = $statement->fetch();
    echo "<br>";
    var_dump($resultado);
    echo "<br>";
	if ($resultado !== false) {
		session_start();
        $_SESSION['email'] = $email;
        $_SESSION['carrito'] = array();
		$_SESSION['numero'] = $resultado['id_c'];
        print "Todo bien";
        //session_destroy();
        //$_SESSION = array();
       //print "si llego ha este punto";
	    header('Location: ../index.php');
	} else {
          
        /*Parte por si es un doctor el quien entra*/
    $statement1 = $conexion->prepare('SELECT * FROM doctor WHERE email = :email AND password1 = :password2');
	$statement1->execute(array(
			':email' => $email,
			':password2' => $password
        ));
        var_dump($statement1);
        echo "<br>";
        $resultado1 = $statement1->fetch();
        echo "<br>";
        var_dump($resultado1);
        echo "<br>";
        if ($resultado1 !== false) {
            $_SESSION['email1'] = $email;
            $_SESSION['id_d'] =$resultado1['id_d']; 
            print "Todo bien";
            //session_destroy();
            //$_SESSION = array();
           //print "si llego ha este punto";
            header('Location: ../index.php');
        } else {
            /*Parte del administrador*/
     $statement2 = $conexion->prepare('SELECT * FROM administrador WHERE email = :email AND password1 = :password2');
     $statement2->execute(array(
             ':email' => $email,
             ':password2' => $password
         ));
         echo "<br>";
         var_dump($statement2);
         echo "<br>";
         $resultado2 = $statement2->fetch();
         echo "<br>";
         var_dump($resultado2);
         echo "<br>";
         if ($resultado2 !== false) {
             $_SESSION['admin1'] = $resultado2['email'];
             echo $_SESSION['admin1'];
             print "Todo bien";
             //session_destroy();
             //$_SESSION = array();
            print "si llego ha este punto";
            header('Location: ../index.php');
            
         } else {
             $errores = '<li>Datos incorrectos en la parte del administrador</li>';
             print " algo malo ";
         }
        }
    }


 
    

}

//Header("Location: http://localhost/SaludYbelleza1/index.php");
//print "ya habia una sesión o paso algo";


?>