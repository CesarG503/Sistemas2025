<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Día 3' ?></title>
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
                        <a class="nav-link" href="/MVC/public/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MVC/public/dia1">Día 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MVC/public/dia2">Día 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/MVC/public/dia3">Día 3</a>
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
    <div class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge badge-custom mb-3">Día 3 - Semana de Sistemas</span>
                    <h1 class="display-4 fw-bold mb-3">Torneo de futbol</h1>
                    <p class="lead fs-5">
                        Torneo de fútbol 11, compite en una cancha amplia, demostrando habilidad, estrategia y pasión por el juego.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body text-center p-4">
                        <h2 class="h4 mb-3">Torneo cancelado</h2>
                        <p class="text-muted mb-4">El torneo de fútbol programado para el Día 3 fue cancelado debido a fuertes lluvias.</p>
                        <div class="mb-4">
                            <img src="/MVC/public/img/dia-3-1.jpeg" alt="Torneo Día 3 - imagen" class="img-fluid rounded">
                        </div>
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
