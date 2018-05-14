<?php

$server = "localhost";
$usuario = "root";
$pass = "";
$nombreBase = "nuevaBase";


// $conexion = new mysqli($server, $usuario, $pass, $nombreBase);
// echo "Tipo variable:  ".gettype($conexion)."<br>";
// echo "Contenido variable: "."<br>";
// var_dump($conexion);
// echo "<br><br>";


// /* Conexion con MySQLi */
// $conexion = mysqli_connect($server,$usuario,$pass,$nombreBase);
// //validamos si la condicion nos da un falso
// if (!$conexion) 
// {
//     //Si devuelve un valor falso entonces la conexion falla
//     echo "La conexion fallo";
//     //Elimina la conexion
//     exit();
// }
// else
// {
//     //si devuelve un valor verdadero entonces la conexion es exitosa
//     echo "La conexion es exitosa <br>".mysqli_get_host_info($conexion);
// }



// $objetoMySQLi = new mysqli($server,$usuario,$pass,$nombreBase);
// //var_dump($objetoMySQLi);
// //la funcion mysql_connect ya no se usa mas
// //Validamos la propiedad error de la conexion para saber cual fue el error
// if ($objetoMySQLi->connect_errno) {
//     echo "fallo la conexion ".$objetoMySQLi->connect_error;
// }


//PDO se puede conectar a diferentes bases de datos
//primero se le pasa el tipo de base de datos, luego se define el host y por ultimo el nombre de la base
//$objetoPDO = new PDO("mysql:host=$server;dbname=$nombreBase",$usuario,$pass);


/* Se puede mandar a llamar a los metodos de la clase PDO con :: sin necesidad 
de instanciar la clase, porque es un metodo estatico */
var_dump(PDO::getAvailableDrivers());

try
{
    $objetoPDO = new PDO("mysql:host=$server;dbname=$nombreBase",$usuario,$pass);
}
catch(PDOException $e)
{
    echo "El error es: ".$e->getMessage();
    exit();
}
echo "<br>Sistema funcionando";