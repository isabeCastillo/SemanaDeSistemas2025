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
            <a href="" class="nav_link">Tercer Día</a>
            <a href="" class="nav_link">Cuarto Día</a>
            <a href="" class="nav_link">Quinto Día</a>
            <a href="" class="nav_link">Mi Información</a>
            <a href="" class="nav_link">Registrar Visita</a>
            <a href="https://github.com/isabeCastillo/SemanaDeSistemas2025.git" class="nav_link">Github</a>
        </div>
    </nav>
    <main>
        <h1><?= $descripcion ?></h1>
        <div class="main-content-wrapper">
            <div class="text-column">
                <p>La Semana de Sistema arrancó con una bienvenida inspiradora a cargo de la Ing. Cesar Franco donde en primer lugar se le dio la bienvenida a la mesa de honor, se canto el himno nacional y para dar por inahurado cada uno de los integrantes de dicha mesa dieron palabras de bienvenida.</p>
            </div>
            <div class="carrusel-column">
                <div class="carrusel-container">
                    <div class="carrusel">
                        <span style="--i:1"><img class="sds2025" src="/mvc_sds/src/7.jpeg" alt=""></span>
                        <span style="--i:2"><video class="sds2025" src="/mvc_sds/src/8.mp4" controls autoplay loop muted></video></span>
                        <span style="--i:3"><img class="sds2025" src="/mvc_sds/src/11.jpeg" alt=""></span>
                        <span style="--i:4"><video class="sds2025" src="/mvc_sds/src/10.mp4" controls autoplay loop muted></video></span>
                        <span style="--i:5"><img class="sds2025" src="/mvc_sds/src/11.jpeg" alt=""></span>
                        <span style="--i:6"><video class="sds2025" src="/mvc_sds/src/12.mp4" controls autoplay loop muted></video></span>
                        <span style="--i:7"><img class="sds2025" src="/mvc_sds/src/13.jpeg" alt=""></span>
                        <span style="--i:8"><img class="sds2025" src="/mvc_sds/src/14.jpeg" alt=""></span>
                        <span style="--i:9"><img class="sds2025" src="/mvc_sds/src/5.jpeg" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="conferencia1"></div>
        <div class="conferencia2"></div>
        <div class="hackathon"></div>
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