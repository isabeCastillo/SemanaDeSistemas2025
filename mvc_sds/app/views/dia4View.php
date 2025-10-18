<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/mvc_sds/style/style.css">
    <link rel="icon" href="/mvc_sds/src/SDS.png"/>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="/mvc_sds/src/SDS.png" alt="logo">
        </div>
        <input type="checkbox" id="menu-toggle" style="display: none;">
        <label for="menu-toggle" class="menu-icon">☰</label>
        <div class="nav_items">
            <a href="/mvc_sds/public/" class="nav_link">Inicio</a>
            <a href="/mvc_sds/public/dia1" class="nav_link">Primer Día</a>
            <a href="/mvc_sds/public/dia2" class="nav_link">Segundo Día</a>
            <a href="/mvc_sds/public/dia3" class="nav_link">Tercer Día</a>
            <a href="/mvc_sds/public/dia4" class="nav_link">Cuarto Día</a>
            <a href="/mvc_sds/public/dia5" class="nav_link">Quinto Día</a>
            <a href="/mvc_sds/public/info" class="nav_link">Mi Información</a>
            <a href="" class="nav_link">Registrar Visita</a>
            <a href="https://github.com/isabeCastillo/SemanaDeSistemas2025.git" class="nav_link">Github</a>
        </div>
    </nav>
    <main>
        <h1 style="justify-content: center; text-align: center; margin: 40px;"><?= $descripcion ?></h1>
        <div class="bienvenida">
            <div class="intro">
                <img src="/mvc_sds/src/grupo.jpeg" alt="">
                <p>Este dia se realizo la tan esperada feria de logros donde se presentaron las distintas obras reañizadas por los estudiantes de la carrera de Sistemas informaticos de los diferentes años</p>
            </div>
        </div>
        <div class="bienvenida"> 
            <div class="intro introvideo">
                <video class="video-element" src="/mvc_sds/src/recap.mp4" controls autoplay loop muted playsinline></video>
                <p>Desde tempranas horas, nos entregamos con entusiasmo a preparar cada detalle para la feria de logros. Apoyamos en la decoración con creatividad y cuidado, organizamos los espacios para que cada presentación brillara, y colaboramos en todo lo necesario para que el ambiente reflejara el esfuerzo y dedicación de nuestra comunidad. Fue un día de trabajo en equipo, alegría y compromiso compartido.</p>
            </div>
        </div>
        <div class="hackathon">
            <h3>Feria de logros</h3>
            <p>Proyectos presentados en la feria de logros y los ganadores</p>
            <div class="proyectos-galeria">
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/bingo.jpeg" alt="Proyecto">
                    <p>Bingo</p>
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/cajero.jpeg" alt="Proyecto">
                    <p>C# Bank</p>
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/farmaLab.jpeg" alt="Proyecto">
                    <p>FarmaLab Proyecto Innovador</p>
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/Innova.jpeg" alt="Proyecto">
                    <p>Innova Rent</p>
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/parqueoAuto.jpeg" alt="Proyecto">
                    <p>Parqueo automatico con arduino y aplicacion movil</p>
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/radar.jpeg" alt="Proyecto">
                    <p>El radar de moises</p>
                    <p>Ganador elegido por los ingenieros</p>
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/siget.jpeg" alt="Proyecto">
                    <p>Sistema de gestion de planillas SIGET</p>
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/tsi.jpeg" alt="Proyecto">
                    <p>Blogs de TSI</p>
                    <p>Ganador elegido por votos</p>
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/atm.jpeg" alt="Proyecto">
                    <p>Sistema de cajero automatico</p>
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/parqueoAuto.jpeg" alt="Proyecto">
                    <p>Parqueo automatico con arduino y aplicacion movil</p>
                </div>
            </div>
        </div>
        <div class="main-content-wrapper">
            <div class="text-column">
                <p>Una de las dinámicas más divertidas y esperadas del día fue la comelona de pupusas, donde los participantes pusieron a prueba su apetito y velocidad. El reto era claro: comer la mayor cantidad de pupusas posibles en solo 10 minutos. Entre risas, aplausos y mucho entusiasmo, los competidores se enfrentaron al delicioso desafío, demostrando valentía y buen humor en cada bocado. Fue un momento lleno de sabor, energía y espíritu de celebración que dejó a todos con el corazón contento… ¡y el estómago también!</p>
            </div>
            <div class="carrusel-column">
                <div class="carrusel-container">
                    <div class="carrusel">
                        <span style="--i:1"><img class="sds2025" src="/mvc_sds/src/p1.jpeg" alt=""></span>
                        <span style="--i:2"><video class="sds2025" src="/mvc_sds/src/p9.mp4" controls autoplay loop muted></video></span>
                        <span style="--i:3"><img class="sds2025" src="/mvc_sds/src/p2.jpeg" alt=""></span>
                        <span style="--i:4"><video class="sds2025" src="/mvc_sds/src/p10.mp4" controls autoplay loop muted></video></span>
                        <span style="--i:5"><img class="sds2025" src="/mvc_sds/src/p3.jpeg" alt=""></span>
                        <span style="--i:6"><video class="sds2025" src="/mvc_sds/src/p8.mp4" controls autoplay loop muted></video></span>
                        <span style="--i:7"><img class="sds2025" src="/mvc_sds/src/p4.jpeg" alt=""></span>
                        <span style="--i:8"><img class="sds2025" src="/mvc_sds/src/p5.jpeg" alt=""></span>
                        <span style="--i:9"><img class="sds2025" src="/mvc_sds/src/p6.jpeg" alt=""></span>
                        <span style="--i:9"><img class="sds2025" src="/mvc_sds/src/p7.jpeg" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bienvenida">
            <div class="intro">
                <video  src="/mvc_sds/src/p8.mp4" controls autoplay loop muted playsinline></video>
                <p>Ganador de comelona</p>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <img src="/mvc_sds/src/SDS.png" alt="Logo">
            </div>
            <div class="footer-links">
                <a href="/mvc_sds/public/">Inicio</a>
                <a href="/mvc_sds/public/dia1">Primer Día</a>
                <a href="/mvc_sds/public/dia2">Segundo Día</a>
                <a href="/mvc_sds/public/dia3">Tercer Día</a>
                <a href="/mvc_sds/public/dia4">Cuarto Día</a>
                <a href="/mvc_sds/public/dia5">Quinto Día</a>
                <a href="https://github.com/isabeCastillo/SemanaDeSistemas2025.git">Github</a>
            </div>
            <div class="copyright footer-desarrollador">
                <p>&copy; 2025 - Semana de Sistemas | Blog desarrollado por <a href="https://github.com/isabeCastillo">Miriam Castillo</a></p>
            </div>
        </div>
    </footer>
</body>
</html>