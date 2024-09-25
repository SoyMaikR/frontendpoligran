<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - POLITÉCNICO GRANCOLOMBIANO</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
<header>
    <nav>
        <img class="logo" src="assets/img/Logo.png">
        <ul>
            <li><a href="#">Tecnologías</a></li>
            <li><a href="#">Pregrados</a></li>
            <li><a href="#">Posgrados</a></li>
            <li><a href="#">Admisiones</a></li>
            <li><a href="#">Institución</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#" class="circle-icon"><i class="fas fa-user"></i></a></li>
            <li><a href="#" class="circle-icon"><i class="fas fa-search"></i></a></li>
        </ul>
    </nav>
</header>

<section class="registro">
    <div class="oval">
        <img src="images/blissful-dark-haired-girl-with-laptop-touching-her-glasses-outdoor-portrait-happy-latin-female-freelancer.jpg" alt="Estudiante">
    </div>
    <div class="form-container">
        <form>
            <h2 class="titleForm">Es hora de dar el siguiente <br>paso hacia tu futuro</h2>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>
            <input type="email" id="correo" name="correo" placeholder="Correo electrónico ó documento" required>
            <input type="tel" id="telefono" name="telefono" placeholder="Teléfono celular" required>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <input type="password" id="password2" name="password2" placeholder="Repetir contraseña" required>
            <span style="color: #8a8686; font-size: small"><input type="checkbox" class="mantener_conectado">Mantenerme conectado</span>
            <div class="button-group">
                <button class="submit" type="submit">¡Registrarme ahora!</button>
                <button class="button" type="button">Ingresar ahora</button>
            </div>
        </form>
    </div>
</section>

<footer>
    <div class="footer-container">
        <!-- Columna 1: Contacto -->
        <div class="footer-column">
            <h4>Contáctenos</h4>
            <p><strong>Línea de Servicio:</strong><br>
                Línea Gratuita 01 8000 180 779</p>
            <p><strong>Línea de Admisiones:</strong><br>
                (601) 744 08 94 - 302 2907400<br>
                Línea gratuita 01 8000 180537</p>
            <p><strong>Digiturno Teams</strong><br>
                <a href="#">Consulta aquí</a></p>
        </div>

        <!-- Columna 2: Enlaces de Interés -->
        <div class="footer-column">
            <h4>Enlaces de Interés</h4>
            <ul>
                <li><a href="#">¿Quiénes somos?</a></li>
                <li><a href="#">Cartelera de notificaciones</a></li>
                <li><a href="#">Políticas y reglamentos</a></li>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Manual gestión PQRSDF y Requerimientos</a></li>
                <li><a href="#">Línea Ética - Buen Gobierno</a></li>
                <li><a href="#">Verificaciones Académicas</a></li>
            </ul>
        </div>

        <!-- Columna 3: Certificaciones -->
        <div class="footer-column certifications">
            <h4>Certificaciones</h4>
            <div class="certifications-logos">
                <img src="assets/img/icontec-9001-sc-cer660310.svg" alt="Certificación 1">
                <img src="assets/img/icontec-14001-sa-cer660016.svg" alt="Certificación 2">
                <img src="assets/img/icontec-45001-st-cer66017.svg" alt="Certificación 3">
            </div>
            <div class="footer-logo">
                <img src="https://www.poli.edu.co/themes/custom/ptecnico2023/logo-politecnico-grancolombiano-white.svg" alt="Poli Logo">
                <p>Somos diferentes, somos POLI.</p>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Politécnico Grancolombiano. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>
