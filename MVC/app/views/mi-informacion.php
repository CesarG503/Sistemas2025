<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Día 5' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/MVC/public/style/css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
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
                        <a class="nav-link" href="/MVC/public/dia3">Día 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MVC/public/dia4">Día 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MVC/public/dia5">Día 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/MVC/public/yo">Mi Información</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <div class="bento-container">
    <h1 class="personal-h1">Informacion personal</h1>
        <div class="bento-grid">

            <div class="bento-item profile-card">
                <img src="/MVC/public/img/dia-1-1.jpeg" class="profile-img">
                <h1>Cesar Alexander<br>Garay Ortez</h1>
            </div>

           
            <div class="bento-item name-card">
                <div class="card-icon">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div class="card-label">DUE / Carrera</div>
                <div class="card-value">GO22007</div>
                <div class="card-value">Ing. Sistemas Informáticos</div>
            </div>

          
            <div class="bento-item academic-card">
                <div class="card-label">Información Académica</div>
                <div class="info-row">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span>Estudiante de Ingeniería de Sistemas Informáticos</span>
                </div>
                <div class="info-row">
                    <i class="bi bi-calendar-check"></i>
                    <span>Año de estudio: 3°</span>
                </div>
                <div class="info-row">
                    <i class="bi bi-building"></i>
                    <span>Universidad de El Salvador</span>
                </div>
                <div class="info-row">
                    <i class="bi bi-person"></i>
                    <span>21 años</span>
                </div>
            </div>

          
            <div class="bento-item email-card">
                <div class="card-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="card-label">Correo Institucional</div>
                <div class="card-value">
                    <a href="mailto:go22007@ues.edu.sv">go22007@ues.edu.sv</a>
                </div>
            </div>

         
            <div class="bento-item email-card">
                <div class="card-icon">
                    <i class="bi bi-envelope-at-fill"></i>
                </div>
                <div class="card-label">Correo Personal</div>
                <div class="card-value">
                    <a href="mailto:cesargaray06@gmail.com">cesargaray06@gmail.com</a>
                </div>
            </div>

            
            <div class="bento-item github-card">
                <div class="card-icon">
                    <i class="bi bi-github"></i>
                </div>
                <div class="card-label">GitHub</div>
                <div class="card-value">
                    <a href="https://github.com/CesarG503" target="_blank">@CesarG503</a>
                </div>
            </div>

          
            <div class="bento-item phone-card">
                <div class="card-icon">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="card-label">Teléfono</div>
                <div class="card-value">
                    <a href="tel:77345940">7734-5940</a>
                </div>
            </div>

   
            <div class="bento-item location-card">
                <div class="card-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="card-label">Residencia</div>
                <div class="card-value">Jucuapa, El Salvador</div>
            </div>

 
            <div class="bento-item age-card">
                <div class="card-icon">
                    <i class="bi bi-cake2-fill"></i>
                </div>
                <div class="card-label">Edad</div>
                <div class="card-value">21 años</div>
            </div>
        </div>
    </div>


    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 Semana de Sistemas.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
