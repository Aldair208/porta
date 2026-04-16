<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'nombre_de_tu_db');
define('DB_USER', 'tu_usuario');
define('DB_PASS', 'tu_contraseña');

// Credenciales de PHPMailer (Gmail)
define('SMTP_USER', 'tu-correo@gmail.com');
define('SMTP_PASS', 'tu-clave-de-aplicacion-de-16-letras');

// Configuración de errores (1 para desarrollo, 0 para producción)
ini_set('display_errors', 1);
error_reporting(E_ALL);

$LINKS = [
    

    "contacto"  => "contact.php",

    "whatsapp"  => "https://wa.me/tu-numero",
    "instagram" => "https://www.instagram.com/tu-perfil/",
    "github"    => "https://github.com/tu-usuario",
    "facebook"  => "https://www.facebook.com/tu-perfil/",
    "linkedin"  => "https://www.linkedin.com/in/tu-perfil/",
    "spotify"   => "tu-enlace-de-spotify"

    "admin"     => "/modulo/index", // Tu sistema de gestión
];

// Función para generar botones estéticos automáticamente
function crearBotonSocial($red, $icon, $url) {
    return "<a href='$url' target='_blank' class='social-btn'>
                <i class='$icon'></i> " . ucfirst($red) . "
            </a>";
}
?>