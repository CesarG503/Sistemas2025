<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Día 4' ?></title>
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
                        <a class="nav-link active" href="/MVC/public/dia4">Día 4</a>
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

    
    
    <div class="day4-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge bg-dark mb-3 px-3 py-2">Día 4 - Semana de Sistemas</span>
                    <h1 class="display-4 fw-bold mb-3">Feria de Logros y Competencias</h1>
                    <p class="lead fs-5">
                        Un día lleno de innovación y diversión: desde proyectos tecnológicos impresionantes 
                        hasta una emocionante competencia gastronómica que puso a prueba el apetito de nuestros participantes.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <main>
       
        <section class="day4-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title display-5">Feria de Logros</h2>
                    <p class="text-muted mt-4 fs-5">
                        La Feria de Logros fue un espacio dedicado a mostrar el talento y la creatividad. 
                        Diversos equipos presentaron proyectos innovadores que demuestran el dominio de tecnologías modernas 
                        y la capacidad de resolver problemas reales mediante la programación.
                    </p>
                </div>

                <div class="row g-4">

                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">
                            <img src="/MVC/public/img/dia-4-1.jpg" alt="Sistema de Bingo">
                            <div class="project-card-body">
                                <span class="project-number">Proyecto 1</span>
                                <h3 class="h4 fw-bold mb-3">Sistema de Bingo Multiplataforma</h3>
                                <p class="text-muted mb-3">
                                    Un sistema de bingo interactivo y moderno desarrollado con tecnologías web avanzadas. 
                                    Permite la conexión simultánea de múltiples usuarios en tiempo real, creando una 
                                    experiencia de juego dinámica y emocionante.
                                </p>
                                <div class="mb-2">
                                    <span class="tech-badge">JavaScript</span>
                                    <span class="tech-badge">Node.js</span>
                                    <span class="tech-badge">WebSockets</span>
                                    <span class="tech-badge">Multiplataforma</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">
                            <img src="/MVC/public/img/dia-4-2.jpg" alt="TechMarket">
                            <div class="project-card-body">
                                <span class="project-number">Proyecto 2</span>
                                <h3 class="h4 fw-bold mb-3">TechMarket</h3>
                                <p class="text-muted mb-3">
                                    Una plataforma de comercio electrónico especializada para emprendedores técnicos 
                                    y profesionales de la programación. Facilita la compra y venta de servicios, 
                                    productos digitales y soluciones tecnológicas entre expertos del sector.
                                </p>
                                <div class="mb-2">
                                    <span class="tech-badge">E-commerce</span>
                                    <span class="tech-badge">Full Stack</span>
                                    <span class="tech-badge">Marketplace</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">
                            <img src="/MVC/public/img/dia-4-5.jpg" alt="Sistema de Parqueo">
                            <div class="project-card-body">
                                <span class="project-number">Proyecto 3</span>
                                <h3 class="h4 fw-bold mb-3">Sistema de Parqueo Inteligente</h3>
                                <p class="text-muted mb-3">
                                    Solución integral que combina hardware y software para la gestión automatizada 
                                    de estacionamientos. Utiliza Arduino para el control físico de barreras y sensores, 
                                    complementado con una aplicación móvil para administración y monitoreo en tiempo real.
                                </p>
                                <div class="mb-2">
                                    <span class="tech-badge">Arduino</span>
                                    <span class="tech-badge">IoT</span>
                                    <span class="tech-badge">App Móvil</span>
                                    <span class="tech-badge">Automatización</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">
                            <img src="/MVC/public/img/dia-4-3.jpg" alt="Sistema de Cámaras">
                            <div class="project-card-body">
                                <span class="project-number">Proyecto 4</span>
                                <h3 class="h4 fw-bold mb-3">Sistema de Vigilancia con Cámaras</h3>
                                <p class="text-muted mb-3">
                                    Sistema de seguridad basado en cámaras inteligentes con capacidades de monitoreo 
                                    remoto y detección de eventos. Proporciona una solución completa para la vigilancia 
                                    y protección de espacios, con almacenamiento en la nube y alertas en tiempo real.
                                </p>
                                <div class="mb-2">
                                    <span class="tech-badge">Visión por Computadora</span>
                                    <span class="tech-badge">Streaming</span>
                                    <span class="tech-badge">Seguridad</span>
                                </div>
                            </div>
                        </div>
                    </div>
              
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">
                            <img src="/MVC/public/img/dia-4-4.jpg" alt="Cajero UES">
                            <div class="project-card-body">
                                <span class="project-number">Proyecto 5</span>
                                <h3 class="h4 fw-bold mb-3">Cajero UES</h3>
                                <p class="text-muted mb-3">
                                    Simulador de cajero automático desarrollado con C# y Windows Forms, presentando 
                                    una interfaz moderna e intuitiva. El sistema replica las funcionalidades principales 
                                    de un cajero real, incluyendo consultas de saldo, retiros, depósitos y transferencias, 
                                    con un diseño visual atractivo y profesional.
                                </p>
                                <div class="mb-2">
                                    <span class="tech-badge">C#</span>
                                    <span class="tech-badge">Windows Forms</span>
                                    <span class="tech-badge">UI/UX Moderna</span>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); display: flex; align-items: center; justify-content: center;">
                            <div class="project-card-body text-center">
                                <div style="font-size: 3rem; margin-bottom: 1rem;">🏆</div>
                                <h3 class="h4 fw-bold mb-3">Innovación y Talento</h3>
                                <p class="text-muted mb-0">
                                    Cada proyecto demostró el compromiso y la creatividad, 
                                    aplicando conocimientos técnicos para crear soluciones innovadoras que impactan 
                                    positivamente en la comunidad.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="day4-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="event-card">
                            <div class="text-center mb-4">
                                <div class="pupusa-icon">🫓</div>
                                <h2 class="section-title display-5">Comilona de Pupusas</h2>
                            </div>
                            
                            <p class="lead text-center mb-4">
                                El segundo evento del día fue una competencia gastronómica que puso a prueba el apetito 
                                y la resistencia de nuestros valientes participantes.
                            </p>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h4 class="fw-bold mb-3">Sobre la Competencia</h4>
                                    <p class="mb-3">
                                        La "Comilona de Pupusas" fue un evento emocionante y divertido donde los participantes 
                                        compitieron para ver quién podía comer la mayor cantidad de pupusas en un tiempo determinado. 
                                        Entre risas, ánimos del público y mucha comida tradicional salvadoreña, la competencia 
                                        se convirtió en uno de los momentos más memorables del día.
                                    </p>
                                    <p class="mb-0">
                                        Este tipo de actividades no solo fomentan la camaradería entre estudiantes y profesores, 
                                        sino que también celebran nuestra cultura y tradiciones de una manera única y entretenida.
                                    </p>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="p-4 bg-white rounded-4 shadow-sm">
                                        <h4 class="fw-bold mb-3">Ganador</h4>
                                        <div class="winner-badge mb-3">
                                            Ing. Guandique
                                        </div>
                                        <div class="mt-3">
                                            <p class="h2 fw-bold mb-2" style="color: #fcb69f;">16 Pupusas</p>
                                            <p class="text-muted mb-0">¡Un récord impresionante!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center my-4"></div>
                            <div class="d-flex flex-column align-items-center">
                                <img src="/MVC/public/img/dia-4-6.jpeg" alt="Foto de la Comilona de Pupusas" class="img-fluid rounded-4 shadow" style="max-width: 500px;">
                                <p class="text-muted mt-2 text-center"> Competencia gastronómica.</p>
                            </div>

                            <div class="alert alert-light border-0 mt-4 text-center" style="background: rgba(255, 255, 255, 0.6);">
                                <p class="mb-0 fw-bold" style="color: #2c3e50;">
                                    Felicitaciones al Ing. Guandique por su increíble hazaña participe y no puedo creer aun que se comio 16
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="day4-section" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h3 class="display-6 fw-bold mb-3" style="color: #2c3e50;">Un Día de Logros y Celebración</h3>
                        <p class="lead" style="color: #2c3e50;">
                            El Día 4 de la Semana de Sistemas combinó perfectamente la innovación tecnológica con la 
                            diversión y la cultura. Desde proyectos impresionantes que demuestran el futuro de la tecnología, 
                            hasta momentos de alegría compartida alrededor de nuestra comida tradicional, este día quedará 
                            grabado en la memoria de todos los participantes.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 Semana de Sistemas.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
