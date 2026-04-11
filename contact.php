
<?php 
require_once 'includes/config.php';; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contact-style.css">
    <script src="https://kit.fontawesome.com/5c162ed7a5.js" crossorigin="anonymous"></script>
    <title>Contactame</title>
</head>

<body>
    <header class="sticky-header">
        <nav>
            <ul class="header-ul">
                <li>
                    <a href="index.html" class="header-link">Regresar</a>
                </li>
            </ul>
        </nav>
        <i class="header-icon fa-solid fa-code"></i>
    </header>

    <div class="container contact-section">
        <div class="contact-header">
            <h1>¡Hablemos!</h1>
            <p>¿Tienes alguna duda o propuesta? Envíame un mensaje y te responderé lo antes posible.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <h3>Mis Redes</h3>
                <div class="social-icons-wrapper">
                    <a href="https://discord.gg/u4XvD9mY" target="_blank" class="social-btn"><i class="fa-brands fa-discord"></i> Discord</a>
                    <a href="https://www.instagram.com/jefff._.xd/" target="_blank" class="social-btn"><i class="fa-brands fa-instagram"></i> Instagram</a>
                    <a href="https://github.com/Aldair208" target="_blank" class="social-btn"><i class="fa-brands fa-github"></i> GitHub</a>
                    <a href="https://www.facebook.com/jefferson.camargo.948011/" target="_blank" class="social-btn"><i class="fa-brands fa-facebook"></i> Facebook</a>
                </div>
            </div>

            <div class="contact-form-container">
                <form id="userForm" class="modern-form">
                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" id="name" name="name" placeholder="Tu nombre..." required>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" placeholder="ejemplo@gmail.com" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="message" rows="5" placeholder="Cuéntame sobre tu proyecto..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Enviar Mensaje <i class="fa-solid fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function enviarCorreo() {
            alert('Correo enviado correctamente');
        }
    </script>


    <script src="js/script.js"></script> 

</body>
</html>
