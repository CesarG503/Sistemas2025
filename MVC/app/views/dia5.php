<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Día 5' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/MVC/public/style/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
                        <a class="nav-link active" href="/MVC/public/dia5">Día 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MVC/public/yo">Mi Información</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Added light-themed hero banner for Day 5 -->
    <div class="day5-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge day5-badge mb-3 px-3 py-2">Día 5 - Semana de Sistemas</span>
                    <h1 class="display-4 fw-bold mb-3">Día de Competencias y Diversión</h1>
                    <p class="lead fs-5">
                        Una jornada llena de emoción y entretenimiento donde la tecnología y los juegos se unieron 
                        para crear momentos inolvidables. Desde el innovador sistema de Bingo hasta las intensas 
                        batallas de Clash Royale, el Día 5 fue pura adrenalina y camaradería.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main>
        <!-- Added photo gallery section -->
        <section class="day5-section">
            <div class="container">
                <h2 class="text-center mb-5 section-title-day5">Galería del Evento</h2>
                <div class="photo-grid">
                    <div class="photo-item">
                        <img src="/MVC/public/img/dia-5-1.jpeg" class="img-fluid rounded" alt="Evento Día 5">
                    </div>
                    <div class="photo-item tall">
                        <img src="/MVC/public/img/dia-5-2.jpeg" class="img-fluid rounded" alt="Evento Día 5">
                    </div>
                    <div class="photo-item">
                        <img src="/MVC/public/img/dia-5-3.jpeg" class="img-fluid rounded" alt="Evento Día 5">
                    </div>
                    <div class="photo-item wide">
                        <img src="/MVC/public/img/dia-5-4.jpeg" class="img-fluid rounded" alt="Evento Día 5">
                    </div>
                    <div class="photo-item">
                        <img src="/MVC/public/img/dia-5-5.jpeg" class="img-fluid rounded" alt="Evento Día 5">
                    </div>
                </div>
            </div>
        </section>

        <!-- Added Bingo event section with modern light design -->
        <section class="day5-section bg-white">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="event-icon-day5 mb-4">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h2 class="display-5 fw-bold mb-4" style="color: #2c3e50;">Bingo Interactivo</h2>
                        <p class="lead mb-4" style="color: #495057;">
                            Una experiencia de juego moderna y emocionante que reunió a toda la comunidad estudiantil 
                            en una competencia llena de diversión, tecnología y premios increíbles.
                        </p>
                        
                        <div class="day5-info-card mb-4">
                            <h4 class="fw-bold mb-3" style="color: #2c3e50;">
                                <i class="fas fa-users me-2" style="color: #667eea;"></i>
                                Participación Masiva
                            </h4>
                            <p class="mb-0" style="color: #6c757d;">
                                El evento de Bingo fue una actividad grupal que logró reunir a todos los estudiantes 
                                de la carrera de Ingeniería de Sistemas. La emoción se sentía en el ambiente mientras 
                                cada participante esperaba ansiosamente que sus números fueran llamados, con la esperanza 
                                de llevarse a casa uno de los increíbles premios en juego.
                            </p>
                        </div>

                        <div class="day5-info-card mb-4">
                            <h4 class="fw-bold mb-3" style="color: #2c3e50;">
                                <i class="fas fa-gift me-2" style="color: #667eea;"></i>
                                Premios Espectaculares
                            </h4>
                            <p class="mb-0" style="color: #6c757d;">
                                Los ganadores tuvieron la oportunidad de llevarse premios de gran valor como bocinas 
                                Bluetooth de alta calidad, audífonos premium, y otros artículos tecnológicos que 
                                cualquier estudiante de sistemas apreciaría. La variedad de premios mantuvo la 
                                competencia emocionante hasta el último momento.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-12">
                                <img src="/MVC/public/img/dia-5-1.jpeg" class="img-fluid rounded-4 shadow-sm" alt="Bingo evento">
                            </div>
                            <div class="col-6">
                                <img src="/MVC/public/img/dia-5-2.jpeg" class="img-fluid rounded-4 shadow-sm" alt="Bingo participantes">
                            </div>
                            <div class="col-6">
                                <img src="/MVC/public/img/dias-5-extra.jpeg" class="img-fluid rounded-4 shadow-sm" alt="Bingo premios">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="day5-tech-card">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <h4 class="fw-bold mb-3" style="color: #2c3e50;">
                                        <i class="fas fa-code me-2" style="color: #667eea;"></i>
                                        Tecnología de Vanguardia
                                    </h4>
                                    <p class="mb-3" style="color: #495057;">
                                        El sistema de Bingo no fue un juego ordinario. Fue desarrollado completamente 
                                        desde cero utilizando tecnologías web modernas y profesionales. El proyecto 
                                        demuestra el nivel de conocimiento técnico alcanzado por los estudiantes de 
                                        la carrera.
                                    </p>
                                    <p class="mb-0" style="color: #6c757d;">
                                        Construido con el poderoso framework <strong>Node.js</strong>, el sistema 
                                        implementa comunicación en tiempo real mediante <strong>WebSockets</strong>, 
                                        permitiendo que múltiples jugadores participen simultáneamente desde diferentes 
                                        dispositivos. La arquitectura del proyecto garantiza una experiencia fluida, 
                                        sincronizada y sin retrasos, donde cada número cantado se refleja instantáneamente 
                                        en todas las pantallas conectadas.
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <div class="tech-stack-day5">
                                        <div class="tech-item-day5">
                                            <i class="fab fa-node-js"></i>
                                            <span>Node.js</span>
                                        </div>
                                        <div class="tech-item-day5">
                                            <i class="fas fa-network-wired"></i>
                                            <span>WebSockets</span>
                                        </div>
                                        <div class="tech-item-day5">
                                            <i class="fas fa-code"></i>
                                            <span>JavaScript</span>
                                        </div>
                                        <div class="tech-item-day5">
                                            <i class="fas fa-mobile-alt"></i>
                                            <span>Multiplataforma</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="day5-highlight-box text-center">
                            <p class="mb-0 fs-5 fw-bold" style="color: #2c3e50;">
                                El Bingo Interactivo fue más que un juego: fue una demostración del talento, 
                                la creatividad y las habilidades técnicas de nuestros estudiantes, combinando 
                                diversión con innovación tecnológica.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="day5-section" style="background: linear-gradient(135deg, #f8f9ff 0%, #e8eeff 100%);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                        <div class="event-icon-day5 mb-4">
                            <i class="fas fa-gamepad"></i>
                        </div>
                        <h2 class="display-5 fw-bold mb-4" style="color: #2c3e50;">Torneo de Clash Royale</h2>
                        <p class="lead mb-4" style="color: #495057;">
                            Las batallas más intensas y estratégicas se vivieron en el torneo de Clash Royale, 
                            donde los mejores jugadores de la carrera se enfrentaron en duelos épicos por la gloria 
                            y premios espectaculares.
                        </p>

                        <div class="day5-info-card mb-4">
                            <h4 class="fw-bold mb-3" style="color: #2c3e50;">
                                <i class="fas fa-chess me-2" style="color: #667eea;"></i>
                                Estrategia y Habilidad
                            </h4>
                            <p class="mb-0" style="color: #6c757d;">
                                Clash Royale es mucho más que un simple juego móvil: es un campo de batalla donde 
                                la estrategia, los reflejos rápidos y el conocimiento profundo de las mecánicas del 
                                juego determinan al ganador. Los participantes demostraron sus mejores tácticas, 
                                construyendo mazos perfectamente balanceados y ejecutando jugadas magistrales que 
                                dejaron al público asombrado.
                            </p>
                        </div>

                        <div class="day5-info-card mb-4">
                            <h4 class="fw-bold mb-3" style="color: #2c3e50;">
                                <i class="fas fa-medal me-2" style="color: #667eea;"></i>
                                Competencia por el Podio
                            </h4>
                            <p class="mb-0" style="color: #6c757d;">
                                El torneo se disputó en un formato de eliminación directa, donde cada partida contaba 
                                y un solo error podía significar la diferencia entre la victoria y la derrota. Los 
                                jugadores lucharon ferozmente por alcanzar el primer y segundo lugar, posiciones que 
                                no solo otorgaban reconocimiento, sino también premios valiosos que recompensaban su 
                                dedicación y habilidad.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 order-lg-1">
                        <div class="row g-3">
                            <div class="col-6">
                                <img src="/MVC/public/img/dia-5-4.jpeg" class="img-fluid rounded-4 shadow-sm" alt="Torneo Clash Royale">
                            </div>
                            <div class="col-6">
                                <img src="/MVC/public/img/dia-5-5.jpeg" class="img-fluid rounded-4 shadow-sm" alt="Participantes torneo">
                            </div>
                            <div class="col-12">
                                <img src="/MVC/public/img/dia-5-3.jpeg" class="img-fluid rounded-4 shadow-sm" alt="Ambiente del torneo">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <div class="day5-highlight-box text-center">
                        
                            <p class="mb-0 fs-5 fw-bold" style="color: #2c3e50;">
                                El Torneo de Clash Royale demostró que los videojuegos también son un espacio 
                                para la competencia sana, el desarrollo de habilidades estratégicas y la creación 
                                de comunidad entre estudiantes apasionados por la tecnología y el entretenimiento digital.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Added closing section -->
        <section class="day5-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="day5-closing-card">
                            <h3 class="display-6 fw-bold mb-4" style="color: #2c3e50;">
                                Así finaliza la Semana de Sistemas 2025
                            </h3>
                            <p class="lead mb-0" style="color: #495057;">
                                Cerramos la Semana de Sistemas 2025 celebrando la innovación, la competencia y la
                                camaradería que nos distinguió durante toda la semana. Actividades como el Bingo
                                Interactivo y el Torneo de Clash Royale mostraron el talento y la creatividad de
                                nuestra comunidad. Gracias a estudiantes, docentes y organizadores por formar parte
                                de una experiencia inolvidable.
                            </p>
                        </div>
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
