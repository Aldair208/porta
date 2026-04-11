<?php 
$servidor = "localhost";
$db = "portafolio";
$username = "root";
$password = "";
$puerto = 3307;

try {
    // Usamos PDO porque es más seguro contra inyecciones SQL
    $conexion = new PDO("mysql:host=$servidor;dbname=$db;port=$puerto", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>