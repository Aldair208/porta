<?php 

$servidor = "localhost";
$db = "portafolio";
$username = "root";
$password = "";
$puerto = 33065;

try {
    $conexion = new PDO("mysql:host=$servidor; dbname=$db; port=$puerto", $username, $password);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

?>