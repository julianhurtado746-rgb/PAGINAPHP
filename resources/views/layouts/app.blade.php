<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
 
    <title>@yield('titulo') | Kawasaki Motorcycles</title>
 
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
 
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        rel="stylesheet"
    >
 
    <style>
        :root {
            --cafe-oscuro: #0bd00b86;
            --cafe: #000000;
            --caramelo: #c8873a;
            --crema: #fff7ed;
            --texto: #2d201c;
        }
 
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #fffaf5;
            color: var(--texto);
        }
 
        .navbar-cafe {
            background: linear-gradient(
                90deg,
                var(--cafe-oscuro),
                var(--cafe)
            );
        }
 
        .navbar .nav-link {
            border-radius: 0.6rem;
            padding-left: 0.9rem !important;
            padding-right: 0.9rem !important;
        }
 
        .navbar .nav-link.active,
        .navbar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.14);
        }
 
        .hero-cafe {
            background:
                radial-gradient(
                    circle at top right,
                    rgba(200, 135, 58, 0.35),
                    transparent 40%
                ),
                linear-gradient(135deg, #fff7ed, #f5e2cd);
            border-radius: 1.5rem;
        }
 
        .card-cafe {
            border: 0;
            border-radius: 1.2rem;
            transition: transform 0.25s ease,
                        box-shadow 0.25s ease;
        }
 
        .card-cafe:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 2rem rgba(62, 39, 35, 0.13);
        }
 
        .icono-cafe {
            width: 78px;
            height: 78px;
            display: grid;
            place-items: center;
            margin: 0 auto;
            border-radius: 50%;
            background-color: #f8e5cf;
            color: var(--cafe);
            font-size: 2rem;
        }
 
        .btn-cafe {
            color: white;
            background-color: var(--cafe);
            border-color: var(--cafe);
        }
 
        .btn-cafe:hover {
            color: white;
            background-color: var(--cafe-oscuro);
            border-color: var(--cafe-oscuro);
        }
 
        .titulo-seccion {
            color: var(--cafe-oscuro);
        }
 
        footer {
            margin-top: auto;
            background-color: var(--cafe-oscuro);
        }
    </style>
</head>
 
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-cafe shadow-sm">
        <div class="container py-2">
            <a class="navbar-brand fw-bold" href="#">
                
                🏍️Kawasaki Motorcycles🏍️
            </a>
 
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Abrir menú"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
 
            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav ms-auto gap-lg-1">
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}"
                            href="#"
                        >
                            Inicio
                        </a>
                    </li>
 
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}"
                            href="{{ route('menu') }}"
                        >
                            Menú
                        </a>
                    </li>
 
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}"
                            href="#"
                        >
                            Nosotros
                        </a>
                    </li>
 
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}"
                            href="#"
                        >
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 
    <main>
        @yield('contenido')
    </main>
 
    <footer class="text-white text-center py-4">
        <div class="container">
            <p class="mb-1 fw-semibold">Kawasaki Motorcycles</p>
            <p class="mb-0 small text-white-50">
                Laboratorio de vistas y rutas en Laravel 12
            </p>
        </div>
    </footer>
 
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    ></script>
</body>
</html>
