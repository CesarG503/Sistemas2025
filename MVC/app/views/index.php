<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Inicio' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/MVC/public/style/css.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/MVC/public/">Semana de Sistemas 2025</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/MVC/public/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MVC/public/dia1">Día 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MVC/public/dia2">Día 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MVC/public/dia3">Día 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MVC/public/dia4">Día 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MVC/public/dia5">Día 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MVC/public/yo">Mi Información</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-3 fw-bold mb-4">Bienvenido a la Semana de Sistemas 2025</h1>
                    <p class="lead fs-4 mb-4">
                        Un evento dedicado a explorar las tecnologías más innovadoras y transformadoras de nuestro tiempo. 
                        Descubre el mundo del Bitcoin, la Inteligencia Artificial Generativa y mucho más.
                    </p>
                    <p class="fs-5">
                        Este proyecto documenta las conferencias, talleres y experiencias compartidas durante la Semana de Sistemas, 
                        un espacio de aprendizaje y colaboración para estudiantes y profesionales apasionados por la tecnología.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <main class="container my-5">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Explora las Secciones del Evento</h2>
            <p class="text-muted fs-5">Navega por los diferentes días y descubre todo el contenido disponible</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card section-card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <span class="badge bg-primary fs-5 px-3 py-2">Dia 1</span>
                        </div>
                        <h3 class="card-title h4 mb-3">Bitcoin e IA Generativa</h3>
                        <p class="card-text text-muted">
                            Descubre el ABC del Bitcoin y la revolución de la Inteligencia Artificial Generativa. 
                            Dos temas fundamentales para entender el futuro de la tecnología.
                        </p>
                        <a href="/MVC/public/dia1" class="btn btn-outline-primary mt-3">Ver contenido</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card section-card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <span class="badge bg-success fs-5 px-3 py-2">Día 2</span>
                        </div>
                        <h3 class="card-title h4 mb-3">Dia 2</h3>
                        <p class="card-text text-muted">
                            Dia 2
                        </p>
                        <a href="/MVC/public/dia2" class="btn btn-outline-success mt-3">Ver contenido</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card section-card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <span class="badge bg-info fs-5 px-3 py-2">Sobre Mí</span>
                        </div>
                        <h3 class="card-title h4 mb-3">Mi Información</h3>
                        <p class="card-text text-muted">
                            Conoce más sobre el autor de este proyecto y su participación en la 
                            Semana de Sistemas 2025.
                        </p>
                        <a href="/MVC/public/yo" class="btn btn-outline-info mt-3">Ver perfil</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-10 mx-auto">
                <div class="card bg-light border-0">
                    <div class="card-body p-5 text-center">
                        <h3 class="h4 mb-3">Sobre el Evento</h3>
                        <p class="text-muted mb-0">
                            La Semana de Sistemas es un evento anual que reúne a estudiantes, profesores y profesionales 
                            del área de tecnología para compartir conocimientos, experiencias y visiones sobre las tendencias 
                            más relevantes en el mundo digital. A través de conferencias magistrales, talleres prácticos y 
                            espacios de networking, buscamos inspirar y formar a la próxima generación de innovadores tecnológicos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 Semana de Sistemas.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>