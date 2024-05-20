<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portafolio";
$puerto = 33065;

$conn = new mysqli($servername, $username, $password, $dbname, $puerto);

if ($conn-> connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    $name = $data['name'];
    $email = $data['email'];
    $message = $data['message'];

    $sql = "INSERT INTO contacto (nombre, email, contenido) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("success" => true));
    } else {
        echo json_encode(array("success" => false));
    }
} else {
    $sql = "SELECT * FROM contacto";
    $result = $conn->query($sql);
    $users = array();

    if ($result->num_rows > 1) {
        while($row = $result->fetch_assoc()) {
            $users[] = array("name" => $row["nombre"], "email" => $row["email"], "message" => $row["message"]);
        }
    }

    echo json_encode($users);
}

$conn->close();
?>