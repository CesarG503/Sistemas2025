<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Registro de Visitas' ?></title>
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
                    <li class="nav-item">
                        <a class="nav-link active" href="/MVC/public/visitas">Registro de Visitas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="visitas-hero">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Registro de Visitas</h1>
            <p class="lead fs-5">Regístrate y forma parte!</p>
        </div>
    </div>

    <main class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="stats-card">
                    <h3 class="mb-2">Total de Visitas Registradas</h3>
                    <div class="stats-number"><?= $totalVisitas ?? 0 ?></div>
                    <p class="mb-0">¡Gracias por ser parte de este evento!</p>
                </div>
            </div>
        </div>

        
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="alert alert-success alert-custom alert-dismissible fade show" role="alert">
                <strong>¡Registro exitoso!</strong> Tu visita ha sido registrada correctamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if (isset($error) && $error): ?>
            <div class="alert alert-danger alert-custom alert-dismissible fade show" role="alert">
                <strong>Error:</strong> <?= $error ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

       
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-card">
                    <h2 class="text-center mb-4">Registra tu Visita</h2>
                    <p class="text-center text-muted mb-4">Completa el formulario para registrar tu participación en el evento</p>
                    
                    <form action="/MVC/public/visitas/registrar" method="POST">
                        <div class="mb-4">
                            <label for="nombre" class="form-label fw-semibold">Nombre Completo</label>
                            <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" 
                                   placeholder="Ingresa tu nombre completo" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="correo" class="form-label fw-semibold">Correo Electrónico</label>
                            <input type="email" class="form-control form-control-lg" id="correo" name="correo" 
                                   placeholder="tu@correo.com" required>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-register">
                                Registrar tu Visita
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card shadow border-0">
    <div class="card-header bg-dark text-white">
      <h5 class="mb-0">Nota para el Ing. Paiz</h5>
    </div>
    <div class="card-body">
      <p><strong></strong> Crear la base de datos y tabla necesarias</p>

      <h6 class="text-muted mt-3"> Instrucciones:</h6>
      <ol>
        <li>Abra <strong>phpMyAdmin</strong> <a href="http://localhost:8082/" target="_blank">http://localhost:8082/</a>.</li>
        <li>Seleccione la pestaña <strong>SQL</strong>.</li>
        <li>Copie y pegue el siguiente SQL</li>
        <li>Ejecute la consulta para crear la base de datos y la tabla.</li>
      </ol>

      <h6 class="text-muted mt-4">Script SQL:</h6>
      <pre class="bg-light border rounded p-3"><code>CREATE DATABASE IF NOT EXISTS visitas
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE visitas;

CREATE TABLE IF NOT EXISTS registro_visitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_fecha (fecha_registro DESC)
) ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;
</code></pre>

      <div class="text-end mt-3">
        <button class="btn btn-outline-secondary btn-sm" onclick="copySQL()">Copiar código</button>
      </div>
    </div>
  </div>

        <div class="row">
            <div class="col-12">
                <div class="table-card">
                    <h3 class="mb-4">Últimas 10 Visitas Registradas</h3>
                    
                    <?php if (!empty($ultimasVisitas)): ?>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Fecha de Registro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ultimasVisitas as $index => $visita): ?>
                                        <tr>
                                            <th scope="row"><?= $index + 1 ?></th>
                                            <td><?= htmlspecialchars($visita['nombre']) ?></td>
                                            <td><?= htmlspecialchars($visita['correo']) ?></td>
                                            <td><?= date('d/m/Y H:i', strtotime($visita['fecha_registro'])) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-info alert-custom">
                            <p class="mb-0 text-center">Aún no hay visitas registradas. ¡Sé el primero en registrarte!</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 Semana de Sistemas. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function copySQL() {
  const code = document.querySelector('pre code').innerText;
  navigator.clipboard.writeText(code).then(() => {
    Swal.fire({
      title: 'Copiado',
      text: 'El código SQL se ha copiado al portapapeles.',
      icon: 'success',
      confirmButtonColor: '#212529',
      confirmButtonText: 'Entendido'
    });
  }).catch(err => {
    Swal.fire({
      title: 'Error',
      text: 'No se pudo copiar el código.',
      icon: 'error',
      confirmButtonColor: '#212529',
      confirmButtonText: 'OK'
    });
  });
}
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
