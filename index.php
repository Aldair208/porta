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

            <section id="Conocimientos" class="skills-section">
                <h1 class="skills-h1">Áreas de Especialización</h1>
                
                <div class="skills-container">
                    <div class="skill-card">
                        <i class="fa-solid fa-code-branch skill-icon"></i>
                        <h3>Desarrollo de Software</h3>
                        <p>Creación de aplicaciones robustas y multiplataforma.</p>
                        <div class="skill-tags">
                            <span>Java</span> <span>Python</span> <span>C++/C</span>
                        </div>
                    </div>

                    <div class="skill-card">
                        <i class="fa-solid fa-globe skill-icon"></i>
                        <h3>Desarrollo Web & AR</h3>
                        <p>Diseño de interfaces modernas y experiencias de Realidad Aumentada.</p>
                        <div class="skill-tags">
                            <span>HTML5</span> <span>CSS3</span> <span>JavaScript</span>
                        </div>
                    </div>

                    <div class="skill-card">
                        <i class="fa-solid fa-server skill-icon"></i>
                        <h3>Datos y Sistemas</h3>
                        <p>Gestión de bases de datos relacionales y sistemas distribuidos.</p>
                        <div class="skill-tags">
                            <span>SQL</span> <span>MySQL</span> <span>Firebase</span>
                        </div>
                    </div>

                    <div class="skill-card">
                        <i class="fa-solid fa-clapperboard skill-icon"></i>
                        <h3>Producción Digital</h3>
                        <p>Edición avanzada de video y post-producción audiovisual.</p>
                        <div class="skill-tags">
                            <span>3 Años de Exp.</span>
                        </div>
                    </div>
                </div>
            </section>

            <hr>

            <section id="Tecnologias" class="tech-section">
                <h2 class="tecnology-h2">Stack Tecnológico</h2>
                
                <div class="tech-grid">
                    <div class="tech-group">
                        <span class="group-title">Lenguajes de Programación</span>
                        <div class="tech-items">
                            <div class="tech-box" title="Dominio Intermedio">
                                <i class="fa-brands fa-python"></i>
                                <span>Python</span>
                            </div>
                            <div class="tech-box" title="Uso en Proyectos AR y Móvil">
                                <i class="fa-brands fa-java"></i>
                                <span>Java</span>
                            </div>
                            <div class="tech-box" title="Fundamentos de Algoritmos">
                                <i class="fa-solid fa-c"></i>
                                <span>C++</span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="tech-group">
                        <span class="group-title">Desarrollo Web (Frontend)</span>
                        <div class="tech-items">
                            <div class="tech-box learning">
                                <i class="fa-brands fa-html5"></i>
                                <span>HTML5</span>
                            </div>
                            <div class="tech-box learning">
                                <i class="fa-brands fa-css3-alt"></i>
                                <span>CSS3</span>
                            </div>
                            <div class="tech-box learning">
                                <i class="fa-brands fa-square-js"></i>
                                <span>JavaScript</span>
                            </div>
                        </div>
                    </div>

                    <div class="tech-group">
                        <span class="group-title">Base de Datos & Cloud</span>
                        <div class="tech-items">
                            <div class="tech-box">
                                <i class="fa-solid fa-database"></i>
                                <span>MySQL</span>
                            </div>
                            <div class="tech-box">
                                <i class="fa-solid fa-fire"></i>
                                <span>Firebase</span>
                            </div>
                            <div class="tech-box">
                                <i class="fa-solid fa-file-excel"></i>
                                <span>Excel DB</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>

        </article>
    </main>

    <footer class="main-footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3>Jefferson Camargo</h3>
            <p>Estudiante de Ingeniería de Sistemas apasionado por la programación distribuida y la realidad aumentada. Enfocado en crear soluciones tecnológicas que generen impacto positivo.</p>
            <p><i class="fa-solid fa-location-dot"></i> Ilo, Moquegua - Perú</p>
        </div>

        <div class="footer-column">
            <h3>Explorar</h3>
            <ul class="footer-links">
                <li><a href="#Home">Inicio</a></li>
                <li><a href="#About">Acerca de mí</a></li>
                <li><a href="#Proyects">Proyectos</a></li>
                <li><a href="contact.php">Contactame!</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Conectemos</h3>
            <p>¿Tienes un proyecto en mente? Hablemos.</p>
            <div class="footer-social">
                <a href="<?php echo $LINKS['discord']; ?>" target="_blank"><i class="fa-brands fa-discord"></i></a>
                <a href="<?php echo $LINKS['instagram']; ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="<?php echo $LINKS['github']; ?>" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="<?php echo $LINKS['facebook']; ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2026 Jefferson Aldair Camargo Mamani | Portafolio Profesional</p>
    </div>
</footer>

</body>
</html>
