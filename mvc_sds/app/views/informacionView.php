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
    <main class="info-main">
        <section class="info-section">
            <h1>Mi Información</h1>

            <div class="info-card">
                <img src="/mvc_sds/src/perfil.jpeg" alt="Foto de Miriam Castillo" class="perfil-foto">

                <div class="info-datos">
                    <p><strong>Nombre:</strong> Miriam Castillo</p>
                    <p><strong>Carrera:</strong> Ingeniería en Sistemas Informáticos</p>
                    <p><strong>Universidad:</strong> Universidad de El Salvador, FMO</p>
                    <p><strong>Año:</strong> 2025</p>
                    <p><strong>Proyecto:</strong> Blog Semana de Sistemas 2025</p>
                </div>
            </div>

            <div class="info-descripcion">
                <p>Durante la Semana de Sistemas 2025 participé en diferentes ponencias, talleres y actividades, aprendiendo sobre nuevas tecnologías, desarrollo web, inteligencia artificial y metodologías ágiles.</p>
                <p>Este blog documenta las experiencias de cada día, además de permitir a los visitantes dejar un registro de sus visitas y comentarios.</p>
            </div>
        </section>
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