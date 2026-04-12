<?php

// 1. Cargar la conexión y PHPMailer
require_once 'includes/conexion.php'; 
require_once 'includes/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './libs/PHPMailer/src/Exception.php';
require './libs/PHPMailer/src/PHPMailer.php';
require './libs/PHPMailer/src/SMTP.php';

// 2. Recibir los datos del script.js
$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    $name = $data['name'];
    $email = $data['email'];
    $message = $data['message'];

    try {
        // 3. Insertar en la Base de Datos usando sentencias preparadas (Seguridad)
        $sql = "INSERT INTO contacto (nombre, email, contenido) VALUES (:name, :email, :message)";
        // Cambia $conexion por $pdo (o el nombre que uses en conexion.php)
        
        $stmt = $conexion->prepare($sql); 
        $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

        // 4. Configurar el envío de correo
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'jefferson.camargo.ing@gmail.com'; // Tu Gmail
        $mail->Password   = 'imqttcyzxgqvdbth'; // La clave de aplicación de Google
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->setFrom('jefferson.camargo.ing@gmail.com', 'Portafolio Aldair');
        $mail->addAddress('jefferson.camargo.ing@gmail.com'); // Tu correo destino
        $mail->addReplyTo($email, $name); // Para que cuando respondas, le llegue a él

        $mail->isHTML(true);
        $mail->Subject = "Nuevo contacto de: $name";
        $mail->Body    = "<h3>Has recibido un mensaje desde tu portafolio</h3>
                          <p><b>Nombre:</b> $name</p>
                          <p><b>Correo:</b> $email</p>
                          <p><b>Mensaje:</b><br>$message</p>";

        $mail->send();
        echo json_encode(["success" => true]);

    } catch (Exception $e) {
        // Si falla el correo pero se guardó en DB, igual avisamos
        echo json_encode(["success" => true, "note" => "Guardado en DB, pero error al enviar mail"]);
    }
} else {
    echo json_encode(["success" => false, "error" => "No se recibieron datos"]);
}
?>
