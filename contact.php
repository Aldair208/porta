
<?php $url_con="/modulos/index" ?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact-style.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/5c162ed7a5.js" crossorigin="anonymous"></script>
    <title>Contactame!</title>
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
        <h1>Contactame</h1>
        <hr>
        <div class="social-icons">
            <a href="https://discord.gg/u4XvD9mY" target="_blank" class="fot-icons"><i class="fa-brands fa-discord"></i></a>
            <a href="https://www.instagram.com/jefff._.xd/" target="_blank" class="fot-icons"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://github.com/Aldair208?tab=overview&from=2024-05-01&to=2024-05-06" target="_blank" class="fot-icons"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.facebook.com/jefferson.camargo.948011/" target="_blank" class="fot-icons"><i class="fa-brands fa-facebook"></i></a>
        </div>

        <div class="contact-form">
            <form action="jeffers0ncamargo208@gmail.com" method="post" enctype="text/plain" id="userForm">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Gmail:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Descripcion:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">ingrese</button>
            </form>
        </div>
        <div>
            <a href="<?php echo $url_con;?>"  class="btn btn-success" >sistema para gestionar las consultas - Solo ingresar personal "hacer click"</a>
        </div>
    </div>
    <script>
        function enviarCorreo() {
            alert('Correo enviado correctamente');
        }
    </script>
    <footer>
        <div class="about-section">
          <p>sobre mi...<p>
          <hr>
          <p>Mi nombre es Jefferson Camargo y he trabajado en el sector pesquero por dos años.</p>
        </div>
        <div class="bottom-section">
          <hr>
          <p>2024</p>
        </div>
    </footer>
    <script src="script.js"></script>

    <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
</html>
