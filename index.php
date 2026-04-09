<?php 
$url_contact = "http://localhost:3000/contact.php";
$url_prueba = "/contact.php";
?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/5c162ed7a5.js" crossorigin="anonymous"></script>
    <title>My portafolio</title>
</head>
<body>
    <header class="sticky-header">
        <nav>
            <ul class="header-ul">
                <li>
                    <a href="#Home" class="header-link">Home</a>
                    <a href="#About" class="header-link">Acerca de mi</a>
                    <a href="#Skills" class="header-link">Conocimientos</a>
                    <a href="#Proyects" class="header-link">Proyectos</a>
                    <a href="#Tecnologies" class="header-link">Tecnologías</a>
                    <a href="<?php echo $url_prueba; ?>" class="header-link">Contactame!</a>
                </li>
            </ul>
        </nav>
        <i class="header-icon fa-solid fa-code"></i>
    </header>

    <hr>

    <main>
        <article>

            <section id="Home">
                <h1 class="home-h1">Jefferson Aldair</h1>
                <h2 class="home-h2">Camargo Mamani</h2>
                <img src="img/mifoto.jpg" alt="mi foto" style="width: 250px; height: auto;">
                <p class="home-p">Estudiante de Ingeneria de sistemas e informatica</p>
                <p class="home-p">analista :p</p>
                <a href="<?php echo $url_prueba; ?>" class="home-link">Contactame!</a>
            </section>

            <hr>

            <section id="About">
                <div class="about-div">
                    <h1 class="about-h1">Mas sobre mi...</h1>
                    <p class="about-p">Mi nombre es Jefferson, también conocido como Jeff. Soy un estudiante que anteriormente estudiaba una carrera tecnica, pero encontré mi pasión en la programación con tan solo 3 años en este mundo. He descubierto varias cosas que me apasionan, pero mi sueño es poder vivir trabajando en línea y así tener la posibilidad de viajar por el mundo mientras trabajo. Me gustaría enfocarme principalmente en el redes, pero también tengo interés en aprender vistas, base de datos, poo, FrontEnd, Desarrollo Android y todo lo demás que encuentre en mi camino. Actualmente, mis habilidades más destacadas son Base de datos y FrontEnd, ¡aunque sigo aprendiendo!
                    </p>
                </div>
            </section>

            <hr>

            <section id="Proyects" class="proyectos-container">
                <h2 class="proyect-h2">Mis Proyectos</h2>

                <div class="proyecto">

                    <img src="img/eco-portal.jpg" alt="Vista previa EcoPortal AR">
                    <h3>EcoPortal AR: Visualización de Impacto Ambiental en el Litoral de Ilo</h3>
                    <p>Aplicación de Realidad Aumentada (AR) diseñada para concientizar sobre la preservación marina mediante una experiencia inmersiva de 360 grados. El sistema utiliza un "portal virtual" para explorar escenarios comparativos del Muelle de Southern Perú.</p>
                    
                    <div class="botones-proyecto">
                        <a href="TU_LINK_DE_VIDEO_O_DEMO" class="btn-demo" target="_blank">
                            <i class="fa-solid fa-play"></i> Ver Demo
                        </a>
                        
                        <a href="https://github.com/Aldair208/AplicacionParaFomentarLaConcienciacionSobreLaContaminacionAmbientalDeOrigenMinero" class="btn-repo" target="_blank">
                            <i class="fa-brands fa-github"></i> Repositorio
                        </a>
                    </div>
                </div>

                <div class="proyecto">

                    <img src="img/finanzas-unam.jpg" alt="Vista previa Finanzas Siempre a la Mano">
                    <h3>Finanzas Siempre a la Mano: Gestión Personal UNAM</h3>
                    <p>Sistema móvil desarrollado para la gestión de finanzas personales, integrando una arquitectura híbrida que utiliza <strong>Firebase</strong> para la autenticación segura y <strong>Excel</strong> como motor de base de datos para el reporte de gastos.</p>
                    
                    <div class="botones-proyecto">
                        <a href="URL_A_TU_APK" class="btn-demo" target="_blank">
                            <i class="fa-solid fa-download"></i> Descargar APK
                        </a>
                        
                        <a href="https://github.com/Aldair208/FinanzasSiempreALaMano" class="btn-repo" target="_blank">
                            <i class="fa-brands fa-github"></i> Repositorio
                        </a>
                    </div>
                </div>

                <div class="proyecto">
                    <img src="img/chat-distribuido.jpg" alt="Vista previa Sistema de Comunicación UNAM">
                    
                    <h3>Sistema de Comunicación Distribuida en Tiempo Real - UNAM</h3>
                    
                    <p>Plataforma de mensajería instantánea diseñada para la coordinación del personal de supervisión de la Universidad Nacional de Moquegua. El sistema facilita la comunicación interconectada entre las distintas sedes universitarias mediante una arquitectura de programación distribuida.</p>
                    
                    <div class="botones-proyecto">
                        <a href="https://chat-unam-dis.onrender.com/" class="btn-demo" target="_blank">
                            <i class="fa-solid fa-rocket"></i> Ver Sistema
                        </a>
                        
                        <a href="https://github.com/Aldair208/sistema_entrada_unam" class="btn-repo" target="_blank">
                            <i class="fa-brands fa-github"></i> Repositorio
                        </a>
                    </div>
                </div>

                <p class="toggle-more" onclick="toggleProyectos()">Ver más 👇</p>
            </section>

            <hr>

            <section id="Conocimientos">
                <h1 class="skills-h1">Mis Conocimientos</h1>
                <table>
                    <tr>
                        <td><i class="fa-brands fa-java"></i> Java <i class="fa-brands fa-android"></i></td>
                        <td>Dominio intermedio</td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-python"></i> Python <i class="fa-solid fa-robot"></i></td>
                        <td>Domino intermedio</td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-square-js"></i> JavaScript <i class="fa-solid fa-window-maximize"></i></td>
                        <td>2 meses</td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-html5"></i> HTML y Css <i class="fa-brands fa-css3-alt"></i></td>
                        <td>6 meses</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-c"></i> C++/C <i class="fa-solid fa-gamepad"></i></td>
                        <td>1 Año - Conocimientos Básicos-</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-server"></i> Sql <i class="fa-solid fa-database"></i></td>
                        <td>Intermedio</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-video"></i> Edicion de Video <i class="fa-solid fa-clapperboard"></i></td>
                        <td>3 Años</td>
                    </tr>
                </table>
            </section>

            <hr>

            <section id="Tecnologias">
                <h2 class="tecnology-h2">Tecnologías Utilizadas</h2>

                <!-- Aprendiendo -->
                <h4 class="tecnology-h4 frontend-dev">Aprediendo</h4>
                <div class="tecnologia frontend-dev">
                    <i class="fa-brands fa-css3-alt"></i>
                    <h3>CSS</h3>
                </div>

                <div class="tecnologia frontend-dev">
                    <i class="fa-brands fa-html5"></i>
                    <h3>HTML</h3>
                </div>

                <div class="tecnologia frontend-dev">
                    <i class="fa-brands fa-square-js"></i>
                    <h3>JS</h3>
                </div>

                <!-- Lo que sé -->
                <a href="https://experiencev.github.io/isaDev.github.io/SRC/templates/home.html" target="_blank">
                    <h4 class="tecnology-h4 tecnology-h4-isa backend-dev">Lo que se</h4>
                </a>
                <div class="tecnologia backend-dev">
                    <i class="fa-brands fa-python"></i>
                    <h3>Python</h3>
                    <p>Lenguaje de programación de uso general</p>
                </div>

                <div class="tecnologia backend-dev">
                    <i class="fa-brands fa-java"></i>
                    <h3>Java</h3>
                    <p>Lenguaje de uso ocasional</p>
                </div>
            </section>

        </article>
    </main>

    <footer>
        <div class="about-section">
            <p>Sobre mi</p>
            <hr>
            <p>Mi nombre es Jefferson Camargo y he trabajado en el sector pesquero por dos años.</p>
        </div>
        <div class="contact-section">
            <p>Contactame</p>
            <hr>
            <div class="social-icons">
                <a href="https://discord.gg/u4XvD9mY" target="_blank" class="fot-icons"><i class="fa-brands fa-discord"></i></a>
                <a href="https://www.instagram.com/jefff._.xd/" target="_blank" class="fot-icons"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://github.com/Aldair208?tab=overview&from=2024-05-01&to=2024-05-06" target="_blank" class="fot-icons"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.facebook.com/jefferson.camargo.948011/" target="_blank" class="fot-icons"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
        <div class="bottom-section">
            <hr>
            <p>2024</p>
        </div>
    </footer>

</body>
</html>
