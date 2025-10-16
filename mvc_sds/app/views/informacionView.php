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
            <a href="/mvc_sds/public/dia2" class="nav_link">Mi Información</a>
            <a href="" class="nav_link">Registrar Visita</a>
            <a href="https://github.com/isabeCastillo/SemanaDeSistemas2025.git" class="nav_link">Github</a>
        </div>
    </nav>
    <main>
        <h1><?= $descripcion ?></h1>
        <div class="bienvenida"></div>
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