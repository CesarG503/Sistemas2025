<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Día 1' ?></title>
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
                        <a class="nav-link active" href="/MVC/public/dia1">Día 1</a>
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

    <div class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge badge-custom mb-3">Día 1 - Semana de Sistemas</span>
                    <h1 class="display-4 fw-bold mb-3">Bitcoin e Inteligencia Artificial</h1>
                    <p class="lead fs-5">
                        Explorando las tecnologías que están transformando nuestro mundo: 
                        desde la revolución financiera del Bitcoin hasta el poder creativo de la IA Generativa.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main class="container">
        <section class="my-5">
            <h2 class="text-center mb-4 fw-bold">Galería del Evento</h2>
            <div class="photo-grid">
                <div class="photo-item">
                    <img src="/MVC/public/img/dia-1-8.jpeg" class="img-fluid rounded">
                </div>
                <div class="photo-item tall">
                    <img src="/MVC/public/img/dia-1-2.jpeg" class="img-fluid rounded">
                </div>
                <div class="photo-item">
                    <img src="/MVC/public/img/dia-1-7.jpeg"  class="img-fluid rounded">
                </div>
                <div class="photo-item wide">
                     <video src="/MVC/public/img/dia-1-6.mp4"  class="img-fluid rounded" autoplay loop muted playsinline></video>
                </div>
                <div class="photo-item">
                    <img src="/MVC/public/img/dia-1-9.jpeg"  class="img-fluid rounded">
                </div>
                <div class="photo-item">
                     <img src="/MVC/public/img/dia-1-4.jpeg" class="img-fluid rounded"></div>
            </div>
        </section>
        <section class="topic-section">
            <div class="topic-header">
                <h2 class="display-6 fw-bold text-primary mb-2">Tema 1: El ABC del Bitcoin</h2>
                <p class="text-muted mb-0"><strong>Ponente:</strong> Maestro Luis Contreras</p>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <p class="lead">
                        El Bitcoin es la primera criptomoneda creada en el mundo y una de las innovaciones tecnológicas 
                        más revolucionarias del siglo XXI. Su origen se remonta al año 2009, cuando un desarrollador o 
                        grupo de desarrolladores bajo el seudónimo <strong>Satoshi Nakamoto</strong> presentó al mundo 
                        una propuesta de dinero digital que no dependiera de gobiernos ni bancos.
                    </p>

                    <p>
                        El objetivo principal era crear un sistema financiero descentralizado, donde las personas pudieran 
                        tener control directo sobre su dinero. La tecnología que hace posible el funcionamiento del Bitcoin 
                        se llama <strong>Blockchain</strong>. Esta funciona como un registro público y transparente donde 
                        se almacenan todas las transacciones realizadas.
                    </p>

                    <div class="highlight-box">
                        <h4 class="fw-bold mb-3">¿Cómo funciona Blockchain?</h4>
                        <p class="mb-0">
                            Cada bloque contiene información encriptada que se enlaza con el siguiente, garantizando así 
                            la seguridad e integridad del sistema. Gracias a esta estructura, el Bitcoin no necesita 
                            intermediarios para validar las operaciones.
                        </p>
                    </div>

                    <h4 class="fw-bold mt-4 mb-3">Ideología y Principios</h4>
                    <p>
                        La ideología detrás de Bitcoin promueve la <strong>libertad económica</strong>, la 
                        <strong>autonomía individual</strong> y una forma moderna y segura de ahorrar dinero sin 
                        depender de instituciones financieras tradicionales. Además, el sistema de Bitcoin tiene un 
                        límite de emisión: solo existirán <strong>21 millones de bitcoins</strong>.
                    </p>

                    <p>
                        Este control se mantiene gracias a un proceso llamado <strong>Halving</strong>, que ocurre 
                        aproximadamente cada cuatro años y reduce a la mitad la recompensa por minar nuevos bloques, 
                        asegurando que su valor se mantenga con el tiempo.
                    </p>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Herramientas Útiles</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <strong>Explorador:</strong><br>
                                    <a href="https://mempool.space" target="_blank" class="text-decoration-none">
                                        mempool.space
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <strong>Billeteras:</strong>
                                    <ul class="mt-2">
                                        <li>Blue Wallet</li>
                                        <li>Blind Wallet</li>
                                        <li>Aqua Wallet</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Dato Clave</h5>
                            <p class="mb-0">
                                Para quienes deseen explorar más a fondo el funcionamiento de la red, existen 
                                herramientas donde se pueden visualizar las transacciones y bloques en tiempo real.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="alert alert-info border-0">

                        <p class="mb-0">
                            El Bitcoin representa mucho más que una moneda digital: es una nueva forma 
                            de entender la economía, basada en la <strong>confianza matemática</strong>, la 
                            <strong>transparencia</strong> y la <strong>independencia financiera</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5">
        <section class="topic-section">
            <div class="topic-header">
                <h2 class="display-6 fw-bold text-primary mb-2">Tema 2: La Inteligencia Artificial Generativa</h2>
                <p class="text-muted mb-0"><strong>Ponente:</strong> Maestro Luis Contreras</p>
                <p class="text-muted fst-italic">De la idea a la acción</p>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <p class="lead">
                        La Inteligencia Artificial Generativa (IA) está transformando la manera en que vivimos, 
                        trabajamos y aprendemos. Su impacto es tan profundo que muchos la describen como una 
                        <strong>revolución transformacional</strong>, comparable a la invención de Internet.
                    </p>

                    <p>
                        Cada día surgen nuevas herramientas y modelos que nos sorprenden por su velocidad y capacidad 
                        para crear contenido, resolver problemas y aprender patrones complejos.
                    </p>

                    <h4 class="fw-bold mt-4 mb-3">El Gran Debate: ¿Reemplazo o Herramienta?</h4>
                    <p>
                        Uno de los grandes debates en torno a la IA gira en torno a la incertidumbre: ¿acabarán estas 
                        tecnologías con los empleos humanos? Aunque existen temores, la realidad es que 
                        <strong>la IA no nos reemplaza, sino que nos hace más eficientes</strong>. Se trata de una 
                        herramienta transversal, que influye en prácticamente todas las profesiones.
                    </p>

                    <div class="highlight-box">
                        <h5 class="fw-bold mb-3">IA vs. Inteligencia Humana</h5>
                        <p class="mb-0">
                            A lo largo del tiempo, los científicos han intentado dotar a la inteligencia artificial de 
                            rasgos antropomórficos, es decir, semejantes al pensamiento y comportamiento humano. Sin 
                            embargo, la diferencia clave es que <strong>la IA almacena información</strong>, mientras 
                            que <strong>el ser humano construye conocimiento</strong> a partir de la experiencia y la 
                            comprensión.
                        </p>
                    </div>

                    <h4 class="fw-bold mt-4 mb-3">Clasificación de la IA</h4>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card h-100 border-primary">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">IA Débil o Estrecha</h5>
                                    <p class="card-text">
                                        Se enfoca en tareas específicas como asistentes virtuales o sistemas de 
                                        recomendación.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-success">
                                <div class="card-body">
                                    <h5 class="card-title text-success fw-bold">IA Fuerte o General</h5>
                                    <p class="card-text">
                                        Busca imitar la inteligencia humana en sentido amplio, con capacidad de 
                                        razonamiento general.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Fundamentos Técnicos</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Machine Learning</li>
                                <li class="list-group-item">Deep Learning</li>
                                <li class="list-group-item">Foundation Models</li>
                                <li class="list-group-item">GAN (Redes Generativas)</li>
                                <li class="list-group-item">LLM (Modelos de Lenguaje)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Herramientas Destacadas</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <strong>N8N</strong><br>
                                    <small class="text-muted">Automatización de flujos</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Power IA</strong><br>
                                    <small class="text-muted">"Excel con superpoderes"</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Nano Banana</strong><br>
                                    <small class="text-muted">Generación de imágenes avanzada</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <h4 class="fw-bold mb-3">Tecnologías Clave</h4>
                    <p>
                        Dentro de sus fundamentos técnicos encontramos ramas como el <strong>Machine Learning</strong>, 
                        el <strong>Deep Learning</strong> y los <strong>Modelos Fundamentales (Foundation Models)</strong>, 
                        que sirven como base para sistemas avanzados como las <strong>Redes Generativas Antagónicas (GAN)</strong>.
                    </p>

                    <p>
                        Estas redes funcionan mediante un proceso de entrenamiento compuesto por un generador y un 
                        discriminador, que aprenden a distinguir entre imágenes reales y falsas a partir de datos o 
                        incluso de ruido aleatorio.
                    </p>

                    <div class="alert alert-success border-0 mt-4">
                        <p class="mb-0">
                            La inteligencia artificial ya no es un concepto del futuro, sino una 
                            <strong>realidad presente</strong> que impulsa la creatividad, la productividad y la 
                            innovación en todos los ámbitos. Los modelos de lenguaje grande (LLM) se entrenan con 
                            enormes cantidades de texto estructurado, permitiéndoles comprender y generar respuestas 
                            coherentes que transforman la forma en que interactuamos con la tecnología.
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
