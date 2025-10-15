<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Día 2' ?></title>
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

    <div class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge badge-custom mb-3">Día 2 - Semana de Sistemas</span>
                    <h1 class="display-4 fw-bold mb-3">Datos, Desarrollo y AI Multimodal</h1>
                    <p class="lead fs-5">
                        Explorando estrategias basadas en datos, desarrollo ágil con Laravel y Filament, 
                        y el futuro visual e inteligente con IA Multimodal.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main class="container my-5">
        <section class="mb-5">
            <div class="card topic-card gradient-card-1 shadow-lg">
                <div class="card-body p-5 position-relative">
                    
                    <div class="icon-box data-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h2 class="display-6 fw-bold mb-3">Toma de decisiones – Estrategias basadas en datos</h2>
                    <p class="mb-2"><strong>Ponente:</strong> Msc. Enrique Cortez</p>
                    <hr class="my-4 bg-dark-c">
                    
                    <p class="lead mb-4">
                        En un mundo impulsado por la información, tomar decisiones basadas en datos se ha convertido 
                        en una habilidad esencial tanto en los negocios como en la vida diaria.
                    </p>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-4 bg-white-10">
                                <h4 class="fw-bold mb-3">¿Qué es un dato?</h4>
                                <p class="mb-0">
                                    Un dato es la unidad mínima de información, un registro sin contexto que por sí solo 
                                    puede parecer insignificante, pero que, al organizarse y analizarse, se transforma en 
                                    información valiosa. Por ejemplo, un número en una hoja de cálculo no nos dice mucho 
                                    hasta que lo relacionamos con un gasto, un ingreso o una actividad específica.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 bg-white-10">
                                <h4 class="fw-bold mb-3">De datos a información</h4>
                                <p class="mb-0">
                                    Cuando los datos adquieren contexto, dejan de ser simples valores y se convierten en 
                                    información útil para la toma de decisiones. Esta conversión es lo que permite que los 
                                    negocios, instituciones e incluso las personas puedan interpretar la realidad y planificar 
                                    con mayor inteligencia.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 p-4 bg-dark-23">
                        <h4 class="fw-bold mb-3">Aplicación en la vida cotidiana</h4>
                        <p class="mb-3">
                            En la vida cotidiana esto ocurre constantemente: al observar nuestros pasos diarios, registrar 
                            los gastos o evaluar nuestros hábitos, generamos datos que, bien analizados, nos ayudan a 
                            entender patrones y mejorar nuestro comportamiento. Lo mismo sucede en las empresas que observan 
                            volúmenes de datos para anticipar tendencias, optimizar recursos y diseñar estrategias efectivas.
                        </p>
                        <div class="alert alert-light mb-0">
                            <strong>Recursos educativos:</strong> Plataformas como Khan Academy o Tú Chance.org ofrecen 
                            cursos sobre análisis de datos y certificaciones, ayudando a estudiantes y profesionales a 
                            fortalecer sus habilidades digitales.
                        </div>
                    </div>

                    <div class="mt-4 p-4 text-center bg-white-20">
                        
                        <p class="mb-0 fs-5">
                            En la era de la información, los datos son el nuevo combustible que impulsa las estrategias 
                            más exitosas. Quien sabe analizarlos y darles significado, tiene la ventaja de ver más allá 
                            de lo evidente.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-5">
            <div class="card topic-card gradient-card-2 shadow-lg">
                <div class="card-body p-5 position-relative">
                   
                    <div class="icon-box code-icon">
                    </div>
                    <h2 class="display-6 fw-bold mb-3">Construye un CRUD en minutos con Laravel y Filament</h2>
                    <p class="mb-2"><strong>Ponente:</strong> Ing. Gabriel Castro</p>
                    <hr class="my-4 bg-dark-c">
                    
                    <p class="lead mb-4">
                        El desarrollo web moderno busca una sola cosa: eficiencia. Laravel y Filament se han convertido 
                        en herramientas clave para los programadores que desean crear aplicaciones funcionales en el menor 
                        tiempo posible.
                    </p>

                    <div class="row g-4 mb-4">
                        <div class="col-md-4">
                            <div class="text-center p-4 bg-dark-c" >
                                <div class="fs-1 mb-3"></div>
                                <h5 class="fw-bold">Composer</h5>
                                <p class="mb-0 small">Gestor de dependencias de PHP</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-4 bg-dark-c">
                                <div class="fs-1 mb-3"></div>
                                <h5 class="fw-bold">Artisan</h5>
                                <p class="mb-0 small">CLI de Laravel para automatización</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-4 bg-dark-c" >
                                <div class="fs-1 mb-3"></div>
                                <h5 class="fw-bold">Filament</h5>
                                <p class="mb-0 small">Paneles admin elegantes y personalizables</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 mb-4 bg-dark-c" >
                        <h4 class="fw-bold mb-3">¿Qué es un CRUD?</h4>
                        <p class="mb-3">
                            Un CRUD (Create, Read, Update, Delete) es el conjunto básico de operaciones que permiten 
                            manipular datos dentro de una aplicación. Crear un CRUD desde cero puede ser un proceso largo, 
                            pero gracias a Laravel y Filament, hoy se puede construir un sistema completo en cuestión de minutos.
                        </p>
                        <div class="row g-3">
                            <div class="col-6 col-md-3">
                                <div class="text-center p-3 bg-dark-c">
                                    <strong>Create</strong><br>Crear
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="text-center p-3 bg-dark-c" >
                                    <strong>Read</strong><br>Leer
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="text-center p-3 bg-dark-c">
                                    <strong>Update</strong><br>Actualizar
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="text-center p-3 bg-dark-c" >
                                    <strong>Delete</strong><br>Eliminar
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 bg-dark-c" >
                        <h4 class="fw-bold mb-3">El poder de Filament</h4>
                        <p class="mb-3">
                            Filament entra en acción: una herramienta moderna que permite generar paneles administrativos 
                            elegantes, interactivos y totalmente personalizables con solo unas líneas de código. Su diseño 
                            se adapta fácilmente a las necesidades del proyecto, y su interfaz es tan intuitiva que incluso 
                            los nuevos desarrolladores pueden manejarla sin dificultad.
                        </p>
                        <div class="alert alert-light mb-0">
                            <strong>Oportunidad laboral:</strong> Dominar Laravel y Filament abre puertas al mundo del 
                            desarrollo profesional, ya que ambas tecnologías son muy demandadas en el ámbito laboral.
                        </div>
                    </div>

                    <div class="mt-4 p-4 text-center bg-dark-c">
                        <h5 class="fw-bold mb-2"></h5>
                        <p class="mb-0 fs-5">
                            Crear un CRUD con Laravel y Filament no solo es una demostración de eficiencia técnica, 
                            sino una manera de entender el poder de la automatización en la programación moderna.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-5">
            <div class="card topic-card gradient-card-3 shadow-lg">
                <div class="card-body p-5 position-relative">
                    <div class="icon-box ai-icon">
                        
                    </div>
                    <h2 class="display-6 fw-bold mb-3">IA Multimodal – Creando el futuro visual e inteligente con N8N</h2>
                    <p class="mb-2"><strong>Ponente:</strong> Msc. José Salmerón</p>
                    <hr class="my-4 bg-dark-c">
                    
                    <p class="lead mb-4">
                        La Inteligencia Artificial Multimodal está marcando el siguiente gran salto en la evolución 
                        tecnológica. Este tipo de IA no solo interpreta texto, sino también imágenes, sonidos y videos, 
                        combinando múltiples formas de información para crear resultados más naturales y poderosos.
                    </p>

                    <div class="p-4 mb-4 bg-white-15">
                        <h4 class="fw-bold mb-3">Ingeniería de Prompts</h4>
                        <p class="mb-0">
                            La ingeniería de prompts (las instrucciones que damos a los modelos) es clave para obtener 
                            buenos resultados en la generación de contenido mediante IA. A través de herramientas multimodales, 
                            hoy es posible transformar texto en imágenes, videos o incluso experiencias interactivas, lo que 
                            está revolucionando campos como el diseño, la publicidad, la educación y el arte digital.
                        </p>
                    </div>

                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="p-4 bg-dark-c">
                                <h5 class="fw-bold mb-3"> Pioneros de la creatividad IA</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2">✓ DALL·E</li>
                                    <li class="mb-2">✓ Stable Diffusion</li>
                                    <li class="mb-2">✓ Midjourney</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 bg-dark-c">
                                <h5 class="fw-bold mb-3"> Modelos avanzados</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2">✓ GPT-5</li>
                                    <li class="mb-2">✓ Gemini 1.5</li>
                                    <li class="mb-2">✓ Claude 3</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 mb-4 bg-dark-c">
                        <h4 class="fw-bold mb-3">N8N: El puente entre creatividad e IA</h4>
                        <p class="mb-3">
                            N8N es una herramienta de automatización visual que permite conectar diferentes servicios de IA 
                            para crear flujos de trabajo inteligentes. Con N8N, se pueden construir procesos donde, por ejemplo, 
                            un texto generado por IA se transforma automáticamente en una imagen, luego se analiza y se envía 
                            por correo o se publica en una red social, todo sin escribir una sola línea de código compleja.
                        </p>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="text-center p-3 bg-white-15 rounded-2">
                                    <div class="fs-3 mb-2"><i class="fas fa-1"></i></div>
                                    <small>Genera texto con IA</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center p-3 bg-white-15 rounded-2">
                                    <div class="fs-3 mb-2"><i class="fas fa-2"></i></div>
                                    <small>Transforma en imagen</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center p-3 bg-white-15 rounded-2">
                                    <div class="fs-3 mb-2"><i class="fas fa-3"></i></div>
                                    <small>Publica automáticamente</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 bg-white-10">
                        <h4 class="fw-bold mb-3"><i class="fas fa-lightbulb"></i> El impacto de la IA Multimodal</h4>
                        <p class="mb-0">
                            Esta tecnología demuestra que la IA no solo genera contenido, sino que también puede organizarlo, 
                            conectarlo y transformarlo en acciones útiles del mundo real. Nos dirigimos hacia una era donde 
                            las máquinas no solo entienden nuestras palabras, sino también nuestro entorno visual y emocional.
                        </p>
                    </div>

                    <div class="mt-4 p-4 text-center bg-white-25">
                        
                        <p class="mb-0 fs-5">
                            El futuro de la IA multimodal está apenas comenzando, pero su impacto será profundo. 
                            Herramientas como N8N son el puente entre la creatividad humana y la inteligencia artificial aplicada.
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