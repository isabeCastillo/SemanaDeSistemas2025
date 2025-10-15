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
            <a href="" class="nav_link">Inicio</a>
            <a href="" class="nav_link">Primer Día</a>
            <a href="" class="nav_link">Segundo Día</a>
            <a href="" class="nav_link">Tercer Día</a>
            <a href="" class="nav_link">Cuarto Día</a>
            <a href="" class="nav_link">Quinto Día</a>
            <a href="" class="nav_link">Mi Información</a>
            <a href="" class="nav_link">Registrar Visita</a>
            <a href="https://github.com/isabeCastillo/SemanaDeSistemas2025.git" class="nav_link">Github</a>
        </div>
    </nav>
    <main>
        <div class="main-content-wrapper">
            <div class="text-column">
                <h1><?= $mensaje ?></h1>
                <p>Blog de la <strong>Semana de Sistemas 2025</strong>, donde estaremos comentando las ponencias, los talleres y actividades recreativas de los 5 días de este evento magnifico que nos deja muchos aprendizajes nuevos.</p>
                <p>Conoce las diferentes secciones del evento haciendo clic en los enlaces de arriba.</p>
            </div>
            
            <div class="carrusel-column">
                <div class="carrusel-container">
                    <div class="carrusel">
                        <span style="--i:1"><img class="sds2025" src="/mvc_sds/src/1.jpeg" alt=""></span>
                        <span style="--i:2"><img class="sds2025" src="/mvc_sds/src/2.jpeg" alt=""></span>
                        <span style="--i:3"><img class="sds2025" src="/mvc_sds/src/3.jpeg" alt=""></span>
                        <span style="--i:4"><img class="sds2025" src="/mvc_sds/src/4.jpeg" alt=""></span>
                        <span style="--i:5"><img class="sds2025" src="/mvc_sds/src/5.jpeg" alt=""></span>
                        <span style="--i:6"><img class="sds2025" src="/mvc_sds/src/6.jpeg" alt=""></span>
                        <span style="--i:7"><img class="sds2025" src="/mvc_sds/src/7.jpeg" alt=""></span>
                        <span style="--i:8"><video class="sds2025" src="/mvc_sds/src/8.mp4" controls autoplay loop muted></video></span>
                        <span style="--i:9"><img class="sds2025" src="/mvc_sds/src/9.jpeg" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <img src="/mvc_sds/src/SDS.png" alt="Logo">
            </div>
            <div class="footer-links">
                <a href="">Inicio</a>
                <a href="">Primer Día</a>
                <a href="">Segundo Día</a>
                <a href="">Tercer Día</a>
                <a href="">Cuarto Día</a>
                <a href="">Quinto Día</a>
                <a href="https://github.com/isabeCastillo/SemanaDeSistemas2025.git">Github</a>
            </div>
            <div class="copyright footer-desarrollador">
                <p>&copy; 2025 - Semana de Sistemas | Blog desarrollado por <a href="https://github.com/isabeCastillo">Miriam Castillo</a></p>
            </div>
        </div>
    </footer>
</body>
</html>