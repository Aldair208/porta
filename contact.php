
<?php 
require_once 'includes/config.php';
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

    <div class="back-nav">
        <a href="index.php" class="back-link">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Volver</span>
        </a>
    </div>

    <div class="container contact-section">
        <div class="contact-header">
            <h1>Propuestas y Colaboraciones</h1>
            <p>¿Tienes alguna propuesta? Envíame un mensaje y te responderé lo antes posible.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <h3>Mis Redes</h3>
                <div class="social-icons-wrapper">
                    <a href="<?php echo $LINKS['linkedin']; ?>" target="_blank" class="social-btn linkedin">
                        <i class="fa-brands fa-linkedin-in"></i> LinkedIn
                    </a>
                    
                    <a href="<?php echo $LINKS['github']; ?>" target="_blank" class="social-btn github">
                        <i class="fa-brands fa-github"></i> GitHub
                    </a>
                    
                    <a href="<?php echo $LINKS['instagram']; ?>" target="_blank" class="social-btn instagram">
                        <i class="fa-brands fa-instagram"></i> Instagram
                    </a>
                    
                    <a href="<?php echo $LINKS['facebook']; ?>" target="_blank" class="social-btn facebook">
                        <i class="fa-brands fa-facebook-f"></i> Facebook
                    </a>
                    
                    <a href="<?php echo $LINKS['whatsapp']; ?>" target="_blank" class="social-btn whatsapp">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp
                    </a>
                    
                    <a href="<?php echo $LINKS['spotify']; ?>" target="_blank" class="social-btn spotify">
                        <i class="fa-brands fa-spotify"></i> Spotify
                    </a>

                </div>
            </div>

            <div class="contact-form-container">
                <form id="userForm" class="modern-form">
                    <div class="form-group">
                        <label for="name">Representante o Nombre Completo</label>
                        <input type="text" id="name" name="name" placeholder="Tu nombre..." required>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Institucional o Corporativo</label>
                        <input type="email" id="email" name="email" placeholder="ejemplo@gmail.com" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Descripción de la Propuesta o Proyecto</label>
                        <textarea id="message" name="message" rows="5" placeholder="Cuéntame ..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Enviar Mensaje <i class="fa-solid fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script> 

</body>
</html>
