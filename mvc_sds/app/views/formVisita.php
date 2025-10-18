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
            <a href="/mvc_sds/public/visitas" class="nav_link">Registrar Visita</a>
            <a href="https://github.com/isabeCastillo/SemanaDeSistemas2025.git" class="nav_link">Github</a>
        </div>
    </nav>
    <main class="form-visita-main">
        <section class="form-visita-section">
            <h1>Registro de Visita</h1>
            <p>Gracias por visitar el Blog de la Semana de Sistemas 2025. Por favor completa tus datos:</p>

            <form action="/mvc_sds/public/visitas/registrar" method="POST" class="form-visita">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" required>

                <label for="comentario">Comentario:</label>
                <textarea id="comentario" name="comentario" rows="4" placeholder="Escribe tu comentario aquí..." required></textarea>

                <button type="submit" class="btn-enviar">Enviar Visita</button>
            </form>

            <?php if (isset($_GET['ok'])): ?>
                <p class="mensaje-exito">¡Gracias por registrarte! Tu visita ha sido guardada correctamente.</p>
            <?php endif; ?>
        </section>

        <hr>

        <section class="lista-visitas">
            <h2>Últimos comentarios registrados</h2>

            <?php if (!empty($visitas)): ?>
                <?php foreach ($visitas as $v): ?>
                    <div class="tarjeta-visita">
                        <h3><?= htmlspecialchars($v['nombre']) ?></h3>
                        <p><strong>Correo:</strong> <?= htmlspecialchars($v['correo']) ?></p>
                        <p><strong>Comentario:</strong> <?= htmlspecialchars($v['comentario']) ?></p>
                        <p class="fecha-visita"><em>Fecha: <?= htmlspecialchars($v['fecha']) ?></em></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay visitas registradas aún.</p>
            <?php endif; ?>
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