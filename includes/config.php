<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'tu_base_de_datos');
define('DB_USER', 'root');
define('DB_PASS', '');

define('SMTP_USER', 'jefferson.camargo.ing@gmail.com');
define('SMTP_PASS', 'imqttcyzxgqvdbth'); // Tu clave de 16 letras


ini_set('display_errors', 1);
error_reporting(E_ALL);

$LINKS = [
    

    "contacto"  => "contact.php",

    "whatsapp"  => "https://wa.me/993972276",
    "instagram" => "https://www.instagram.com/jeff_.camargo/",
    "github"    => "https://github.com/Aldair208",
    "facebook"  => "https://www.facebook.com/jeff.camargo208/",
    "linkedin"  => "https://www.linkedin.com/in/jefferson-aldair-camargo-mamani/",
    "spotify"   => "https://open.spotify.com/user/21xsrocqend2mfufk455sfa4y?si=EWCzruo8T5eGT0ee2T72Ew",

    "admin"     => "/modulo/index", // Tu sistema de gestión
    "repo_ar"   => "https://github.com/Aldair208/EcoPortal-AR" // Ejemplo
];

// Función para generar botones estéticos automáticamente
function crearBotonSocial($red, $icon, $url) {
    return "<a href='$url' target='_blank' class='social-btn'>
                <i class='$icon'></i> " . ucfirst($red) . "
            </a>";
}
?>