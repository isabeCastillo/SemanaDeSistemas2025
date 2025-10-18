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
    <main>
        <h1 style="justify-content: center; text-align: center; margin: 40px;"><?= $descripcion ?></h1>
        <div class="bingo">
            <div class="hackathon">
            <h3>Bingo</h3>
            <p>Una dinámica que combinó emoción, risas y compañerismo. El juego del bingo reunió a estudiantes en un ambiente de sana convivencia, donde cada número cantado despertaba alegría y expectativa. Más que una competencia, fue una oportunidad para compartir, relajarse y disfrutar juntos. Entre aplausos y momentos divertidos, el bingo se convirtió en un espacio de conexión y entretenimiento que fortaleció los lazos entre todos los participantes.</p>
            <div class="proyectos-galeria">
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/inicioB.jpg" alt="Juego">
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/creditos.jpg" alt="Juego">
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/1.1juga.jpg" alt="Juego">
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/jugada.jpg" alt="Juego">
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/carton1.jpg" alt="Juego">
                </div>
            </div>
        </div>
        <div class="ganadoresbingo">
            <div class="hackathon">
                <h3>Ganadores</h3>
                <p>Dentro de los ganadores estan aquellos que ganaron un obsequio de parte de los patrocinadores</p>
                <div class="proyectos-galeria">
                    <div class="proyecto-item">
                        <img src="/mvc_sds/src/primerganaB.jpg" alt="Juego">
                    </div>
                    <div class="proyecto-item">
                        <img src="/mvc_sds/src/ac2.jpg" alt="Juego">
                    </div>
                    <div class="proyecto-item">
                        <img src="/mvc_sds/src/acop.jpg" alt="Juego">
                    </div>
                    <div class="proyecto-item">
                        <img src="/mvc_sds/src/g1.jpg" alt="Juego">
                    </div>
                    <div class="proyecto-item">
                        <img src="/mvc_sds/src/preAcop.jpg" alt="Juego">
                    </div>
                </div>
            </div>
        </div>
        <div class="hackathon">
            <h3>Torneo de Clash Royale</h3>
            <p>¡La emoción estuvo al máximo! En este torneo, los estudiantes se enfrentaron en épicas batallas estratégicas, demostrando su habilidad, rapidez mental y dominio del juego. Cada partida fue una mezcla de tensión y adrenalina, mientras los competidores luchaban por coronarse campeones del campo de batalla virtual. Más que un juego, fue una experiencia de convivencia, risas y sana competencia, donde el respeto y el entusiasmo marcaron cada ronda. ¡Un verdadero choque de talentos que dejó huella en la feria de logros!</p>
            <div class="proyectos-galeria">
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/clas2.jpeg" alt="Juego">
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/clas1.jpeg" alt="Juego">
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/clas3.jpeg" alt="Juego">
                </div>
                <div class="proyecto-item">
                    <img src="/mvc_sds/src/clas4.jpeg" alt="Juego">
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