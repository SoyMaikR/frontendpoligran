<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politecnico Grancolombiano</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style-home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="contenedor">
            <div class="logo">
                <img src="assets/img/Logo.png" alt="">
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Tecnologías</a></li>
                        <li><a href="#">Pregrados</a></li>
                        <li><a href="#">Posgrados</a></li>
                        <li><a href="#">Admisiones</a></li>
                        <li><a href="#">Institución</a></li>
                        <li><a href="#">Noticias</a></li>
                    </ul>
                </nav>
            </div>
            <div class="iconos">
                <a href="#"><img src="assets/img/usuario.svg"></a>
                <a href="#"><img src="assets/img/buscar.svg"></a>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="contenedor">
            <div class="frase">
                <h2>El primer paso hacia tus sueños comienza aquí</h2>
                <p>Descubre nuestras carreras y fórmate con una educación de calidad que te llevará al siguiente nivel.</p>
                <button class="boton-1">¡Inicia tu camino hoy!</button>
            </div>
            <img src="assets/img/banner.png" alt="">
        </div>
    </div>
    <div class="indicadores">
        <div class="contenedor">
            <div class="titular">Indicadores de calidad</div>
            <div class="columna">
                <img src="assets/img/indicador-1.svg" alt="">
                <div class="valor">+120.000</div>
                <div class="titulo">Estudiantes graduados</div>
            </div>
            <div class="columna">
                <img src="assets/img/indicador-2.svg" alt="">
                <div class="valor">92</div>
                <div class="titulo">Programas académicos</div>
            </div>
            <div class="columna">
                <img src="assets/img/indicador-3.svg" alt="">
                <div class="valor">+100</div>
                <div class="titulo">Educadores certificados</div>
            </div>
            <div class="columna">
                <img src="assets/img/indicador-4.svg" alt="">
                <div class="valor">+52.000</div>
                <div class="titulo">Estudiantes activos</div>
            </div>
        </div>
    </div>
    <div class="programas-academicos">
        <div class="contenedor">
            <div class="titular">Programas académicos</div>
            <div class="tabs">
                <div id="tab-tecnicas-tecnologias" class="tab-button active">Técnicas / Tecnologías</div>
                <div id="tab-profesional" class="tab-button">Profesional</div>
                <div id="tab-posgrado" class="tab-button">Posgrado</div>
            </div>
            <div id="tecnicas-tecnologias" class="tab-content active">
                <div class="contenedor">
                    <div class="programa">
                        <div class="imagen">
                            <div class="fecha">01 de Octubre de 2024</div>
                            <img src="assets/img/programa-1.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="modalidad">Virtual | 6 semestres</div>
                            <div class="titulo">Tecnología en gestión bancaria y entidades financieras</div>
                            <button class="boton-1">Más información</button>
                        </div>
                    </div>
                    <div class="programa">
                        <div class="imagen">
                            <div class="fecha">01 de Octubre de 2024</div>
                            <img src="assets/img/programa-1.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="modalidad">Virtual | 6 semestres</div>
                            <div class="titulo">Tecnología en gestión bancaria y entidades financieras</div>
                            <button class="boton-1">Más información</button>
                        </div>
                    </div>
                    <div class="programa">
                        <div class="imagen">
                            <div class="fecha">01 de Octubre de 2024</div>
                            <img src="assets/img/programa-1.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="modalidad">Virtual | 6 semestres</div>
                            <div class="titulo">Tecnología en gestión bancaria y entidades financieras</div>
                            <button class="boton-1">Más información</button>
                        </div>
                    </div>
                    <div class="programa">
                        <div class="imagen">
                            <div class="fecha">01 de Octubre de 2024</div>
                            <img src="assets/img/programa-1.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="modalidad">Virtual | 6 semestres</div>
                            <div class="titulo">Tecnología en gestión bancaria y entidades financieras</div>
                            <button class="boton-1">Más información</button>
                        </div>
                    </div>
                    <div class="programa">
                        <div class="imagen">
                            <div class="fecha">01 de Octubre de 2024</div>
                            <img src="assets/img/programa-1.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="modalidad">Virtual | 6 semestres</div>
                            <div class="titulo">Tecnología en gestión bancaria y entidades financieras</div>
                            <button class="boton-1">Más información</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="profesional" class="tab-content">
                <h3>Profesional</h3>
                <p>Contenido sobre profesional.</p>
            </div>
            <div id="posgrado" class="tab-content">
                <h3>Posgrado</h3>
                <p>Contenido sobre posgrado.</p>
            </div>
        </div>
    </div>
    <div class="contacto">
        <div class="contenedor">
            <img src="assets/img/contacto.png" alt="">
            <div class="formulario">
                <p>Escríbenos y comienza<br>tu proceso con nosotros</p>
                <form action="" class="form">
                    <input type="text" placeholder="Nombre completo">
                    <input type="text" placeholder="Correo electrónico">
                    <input type="text" placeholder="Teléfono o celular">
                    <input type="text" placeholder="Programa de interes">
                    <textarea name=""  placeholder="Déjanos un mensaje"></textarea>
                    <button class="boton-1">Más información</button>
                </form>
            </div>
        </div>
    </div>
    <div class="noticias">
        <div class="contenedor">
            <div class="cards-noticias">
                <div class="card">
                    <img src="assets/img/programa-1.jpg" alt="">
                    <div class="info">
                        <div class="fecha">06 de Septiembre de 2024</div>
                        <div class="titulo">Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia</div>
                        <div class="texto">Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia</div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/programa-1.jpg" alt="">
                    <div class="info">
                        <div class="fecha">06 de Septiembre de 2024</div>
                        <div class="titulo">Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia</div>
                        <div class="texto">Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia</div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/programa-1.jpg" alt="">
                    <div class="info">
                        <div class="fecha">06 de Septiembre de 2024</div>
                        <div class="titulo">Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia</div>
                        <div class="texto">Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia</div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/programa-1.jpg" alt="">
                    <div class="info">
                        <div class="fecha">06 de Septiembre de 2024</div>
                        <div class="titulo">Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia</div>
                        <div class="texto">Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <!-- <script src="assets/js/main.js"></script> -->
    </footer>
</body>
</html>