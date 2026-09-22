@extends('layouts.app')
 
@section('titulo', 'Inicio')
 
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Kawasaki Motorcycles</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background-color: #f4f4f4;
        }

        .navbar {
            border-bottom: 4px solid #80c41c;
        }

        .text-kawasaki {
            color: #80c41c;
        }

        .btn-kawasaki {
            background-color: #80c41c;
            color: #000;
            font-weight: bold;
            border: none;
        }

        .btn-kawasaki:hover {
            background-color: #65a800;
            color: white;
        }

        .bg-kawasaki {
            background-color: #80c41c;
        }

        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .carousel-item img {
            height: 600px;
            object-fit: cover;
        }

        .producto-img {
            height: 230px;
            object-fit: cover;
        }

        .titulo-seccion {
            border-left: 6px solid #80c41c;
            padding-left: 15px;
        }
    </style>
</head>

<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                🏍️ KAWASAKI MOTORS
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Mostrar menú"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse"
                id="menuPrincipal"
            >

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#categorias">
                            Categorías
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#motos">
                            Motos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">
                            Nosotros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">
                            Contacto
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- Inicio / Carrusel -->
    <header id="inicio">

        <div
            id="carouselKawasaki"
            class="carousel slide"
            data-bs-ride="carousel"
        >

            <div class="carousel-indicators">

                <button
                    type="button"
                    data-bs-target="#carouselKawasaki"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>

                <button
                    type="button"
                    data-bs-target="#carouselKawasaki"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>

                <button
                    type="button"
                    data-bs-target="#carouselKawasaki"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>

            </div>

            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">

                    <img
                        src="https://images.unsplash.com/photo-1558981806-ec527fa84c39?auto=format&fit=crop&w=1600&q=80"
                        class="d-block w-100"
                        alt="Motocicleta deportiva"
                    >

                    <div class="carousel-caption d-none d-md-block">

                        <h1 class="fw-bold">
                            POTENCIA SIN LÍMITES
                        </h1>

                        <p>
                            Descubre la nueva generación de motocicletas Kawasaki.
                        </p>

                        <a
                            href="#motos"
                            class="btn btn-kawasaki"
                        >
                            VER MOTOS
                        </a>

                    </div>

                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">

                    <img
                        src="https://images.unsplash.com/photo-1568772585407-9361f9bf3a87?auto=format&fit=crop&w=1600&q=80"
                        class="d-block w-100"
                        alt="Motocicleta Kawasaki"
                    >

                    <div class="carousel-caption d-none d-md-block">

                        <h1 class="fw-bold">
                            DISEÑO DEPORTIVO
                        </h1>

                        <p>
                            Tecnología, velocidad y estilo en una sola máquina.
                        </p>

                        <a
                            href="#categorias"
                            class="btn btn-kawasaki"
                        >
                            CONOCER MODELOS
                        </a>

                    </div>

                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">

                    <img
                        src="https://images.unsplash.com/photo-1558981285-6f0c94958bb6?auto=format&fit=crop&w=1600&q=80"
                        class="d-block w-100"
                        alt="Moto deportiva"
                    >

                    <div class="carousel-caption d-none d-md-block">

                        <h1 class="fw-bold">
                            VIVE LA EXPERIENCIA
                        </h1>

                        <p>
                            Tu próxima aventura comienza sobre dos ruedas.
                        </p>

                        <a
                            href="#contacto"
                            class="btn btn-kawasaki"
                        >
                            CONTÁCTANOS
                        </a>

                    </div>

                </div>

            </div>

            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselKawasaki"
                data-bs-slide="prev"
            >

                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>

                <span class="visually-hidden">
                    Anterior
                </span>

            </button>

            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselKawasaki"
                data-bs-slide="next"
            >

                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>

                <span class="visually-hidden">
                    Siguiente
                </span>

            </button>

        </div>

    </header>

    <!-- Promoción -->
    <div class="container mt-4">

        <div
            class="alert alert-dark text-center shadow-sm"
            role="alert"
        >

            <strong class="text-kawasaki">
                🏍️ OFERTA ESPECIAL:
            </strong>

            Consulta nuestros modelos disponibles y promociones especiales.

        </div>

    </div>

    <!-- Categorías -->
    <section
        id="categorias"
        class="py-5"
    >

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold titulo-seccion">
                    CATEGORÍAS
                </h2>

                <p class="text-secondary">
                    Encuentra la Kawasaki perfecta para tu estilo de conducción.
                </p>

            </div>

            <div class="row g-4">

                <!-- Categoría 1 -->
                <div class="col-md-3">

                    <div class="card text-center h-100 shadow-sm border-0">

                        <div class="card-body">

                            <div class="display-3">
                                🏁
                            </div>

                            <h3 class="h5 mt-3 fw-bold">
                                Deportivas
                            </h3>

                            <p class="text-secondary">
                                Motos diseñadas para velocidad, potencia
                                y máximo rendimiento.
                            </p>

                            <a
                                href="#motos"
                                class="btn btn-outline-dark"
                            >
                                Ver modelos
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Categoría 2 -->
                <div class="col-md-3">

                    <div class="card text-center h-100 shadow-sm border-0">

                        <div class="card-body">

                            <div class="display-3">
                                🏍️
                            </div>

                            <h3 class="h5 mt-3 fw-bold">
                                Naked
                            </h3>

                            <p class="text-secondary">
                                Diseño agresivo y excelente rendimiento
                                para la ciudad.
                            </p>

                            <a
                                href="#motos"
                                class="btn btn-outline-dark"
                            >
                                Ver modelos
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Categoría 3 -->
                <div class="col-md-3">

                    <div class="card text-center h-100 shadow-sm border-0">

                        <div class="card-body">

                            <div class="display-3">
                                🛣️
                            </div>

                            <h3 class="h5 mt-3 fw-bold">
                                Touring
                            </h3>

                            <p class="text-secondary">
                                Comodidad y potencia para recorrer largas
                                distancias.
                            </p>

                            <a
                                href="#motos"
                                class="btn btn-outline-dark"
                            >
                                Ver modelos
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Categoría 4 -->
                <div class="col-md-3">

                    <div class="card text-center h-100 shadow-sm border-0">

                        <div class="card-body">

                            <div class="display-3">
                                🌄
                            </div>

                            <h3 class="h5 mt-3 fw-bold">
                                Adventure
                            </h3>

                            <p class="text-secondary">
                                Prepárate para explorar nuevos caminos
                                y vivir grandes aventuras.
                            </p>

                            <a
                                href="#motos"
                                class="btn btn-outline-dark"
                            >
                                Ver modelos
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Motos destacadas -->
    <section
        id="motos"
        class="py-5 bg-white"
    >

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold titulo-seccion">
                    MOTOS DESTACADAS
                </h2>

                <p class="text-secondary">
                    Conoce algunos de los modelos más destacados de Kawasaki.
                </p>

            </div>

            <div class="row g-4">

                <!-- Moto 1 -->
                <div class="col-sm-6 col-lg-3">

                    <div class="card h-100 shadow-sm border-0">

                        <img
                            src="https://images.unsplash.com/photo-1580310614729-ccd69652491d?auto=format&fit=crop&w=800&q=80"
                            class="card-img-top producto-img"
                            alt="Kawasaki Ninja"
                        >

                        <div class="card-body d-flex flex-column">

                            <span
                                class="badge bg-danger align-self-start mb-2"
                            >
                                DEPORTIVA
                            </span>

                            <h3 class="card-title h5 fw-bold">
                                Kawasaki Ninja
                            </h3>

                            <p class="card-text text-secondary">
                                Una motocicleta deportiva con diseño
                                agresivo y excelente rendimiento.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-success">
                                    $55.000.000
                                </p>

                                <button
                                    class="btn btn-dark w-100"
                                >
                                    🏍️ Ver detalles
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Moto 2 -->
                <div class="col-sm-6 col-lg-3">

                    <div class="card h-100 shadow-sm border-0">

                        <img
                            src="https://images.unsplash.com/photo-1609630875171-b1321377ee65?auto=format&fit=crop&w=800&q=80"
                            class="card-img-top producto-img"
                            alt="Kawasaki Z"
                        >

                        <div class="card-body d-flex flex-column">

                            <span
                                class="badge bg-success align-self-start mb-2"
                            >
                                NAKED
                            </span>

                            <h3 class="card-title h5 fw-bold">
                                Kawasaki Z
                            </h3>

                            <p class="card-text text-secondary">
                                Estilo moderno, carácter deportivo y
                                una conducción emocionante.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-success">
                                    $48.000.000
                                </p>

                                <button
                                    class="btn btn-dark w-100"
                                >
                                    🏍️ Ver detalles
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Moto 3 -->
                <div class="col-sm-6 col-lg-3">

                    <div class="card h-100 shadow-sm border-0">

                        <img
                            src="https://images.unsplash.com/photo-1558981359-219d6364c9c8?auto=format&fit=crop&w=800&q=80"
                            class="card-img-top producto-img"
                            alt="Kawasaki Versys"
                        >

                        <div class="card-body d-flex flex-column">

                            <span
                                class="badge bg-primary align-self-start mb-2"
                            >
                                ADVENTURE
                            </span>

                            <h3 class="card-title h5 fw-bold">
                                Kawasaki Versys
                            </h3>

                            <p class="card-text text-secondary">
                                Diseñada para viajes, aventuras y recorridos
                                de larga distancia.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-success">
                                    $52.000.000
                                </p>

                                <button
                                    class="btn btn-dark w-100"
                                >
                                    🏍️ Ver detalles
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Moto 4 -->
                <div class="col-sm-6 col-lg-3">

                    <div class="card h-100 shadow-sm border-0">

                        <img
                            src="https://images.unsplash.com/photo-1591637333184-19aa84b3e01f?auto=format&fit=crop&w=800&q=80"
                            class="card-img-top producto-img"
                            alt="Kawasaki Touring"
                        >

                        <div class="card-body d-flex flex-column">

                            <span
                                class="badge bg-warning text-dark align-self-start mb-2"
                            >
                                TOURING
                            </span>

                            <h3 class="card-title h5 fw-bold">
                                Kawasaki Touring
                            </h3>

                            <p class="card-text text-secondary">
                                Comodidad, estabilidad y potencia para
                                tus grandes recorridos.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-success">
                                    $60.000.000
                                </p>

                                <button
                                    class="btn btn-dark w-100"
                                >
                                    🏍️ Ver detalles
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Beneficios -->
    <section
        class="py-5 bg-dark text-white"
    >

        <div class="container">

            <div class="text-center mb-4">

                <h2 class="fw-bold">
                    ¿POR QUÉ ELEGIR KAWASAKI?
                </h2>

                <p>
                    Rendimiento, tecnología y pasión por las motocicletas.
                </p>

            </div>

            <div class="row text-center g-4">

                <div class="col-md-4">

                    <div class="fs-1 text-kawasaki">
                        ⚡
                    </div>

                    <h3 class="h5">
                        Potencia
                    </h3>

                    <p>
                        Motores diseñados para ofrecer una experiencia
                        de conducción emocionante.
                    </p>

                </div>

                <div class="col-md-4">

                    <div class="fs-1 text-kawasaki">
                        🛡️
                    </div>

                    <h3 class="h5">
                        Seguridad
                    </h3>

                    <p>
                        Tecnología y sistemas pensados para una conducción
                        segura y confiable.
                    </p>

                </div>

                <div class="col-md-4">

                    <div class="fs-1 text-kawasaki">
                        🔧
                    </div>

                    <h3 class="h5">
                        Servicio técnico
                    </h3>

                    <p>
                        Mantenimiento, repuestos y soporte especializado
                        para tu motocicleta.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Nosotros -->
    <section
        id="nosotros"
        class="bg-white py-5"
    >

        <div class="container">

            <div class="row align-items-center g-4">

                <div class="col-md-6">

                    <img
                        src="https://images.unsplash.com/photo-1558981806-ec527fa84c39?auto=format&fit=crop&w=1000&q=80"
                        class="img-fluid rounded shadow"
                        alt="Motocicleta Kawasaki"
                    >

                </div>

                <div class="col-md-6">

                    <h2 class="fw-bold titulo-seccion">
                        PASIÓN POR LAS DOS RUEDAS
                    </h2>

                    <p class="text-secondary">
                        Somos apasionados por las motocicletas y por
                        ofrecer a nuestros clientes modelos Kawasaki
                        que combinan diseño, tecnología y rendimiento.
                    </p>

                    <p class="text-secondary">
                        Nuestro objetivo es ayudarte a encontrar la
                        motocicleta ideal para tu estilo de vida,
                        acompañándote desde la compra hasta el
                        mantenimiento de tu moto.
                    </p>

                    <button class="btn btn-kawasaki">
                        CONOCE NUESTRAS MOTOS
                    </button>

                </div>

            </div>

            <!-- Razones -->
            <div class="row mt-5">

                <div class="col-md-8 mx-auto">

                    <div
                        class="card border-0 shadow-sm"
                        style="background-color: #e9f7d8;"
                    >

                        <div class="card-body p-4">

                            <h3 class="h5 fw-bold text-center">
                                ¿POR QUÉ ELEGIRNOS?
                            </h3>

                            <ul class="list-group list-group-flush">

                                <li class="list-group-item bg-transparent">
                                    ✓ Motos de alto rendimiento
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Asesoría personalizada
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Servicio técnico especializado
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Repuestos y accesorios
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Atención personalizada
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Contacto -->
    <section
        id="contacto"
        class="py-5"
    >

        <div class="container">

            <div class="text-center">

                <h2 class="fw-bold titulo-seccion">
                    CONTÁCTANOS
                </h2>

                <p class="text-secondary">
                    ¿Quieres conocer nuestras motos? Estamos para ayudarte.
                </p>

            </div>

            <div class="row justify-content-center mt-4 g-4">

                <!-- Dirección -->
                <div class="col-md-4">

                    <div
                        class="card border-0 shadow-sm h-100 text-center"
                    >

                        <div class="card-body">

                            <div class="fs-1">
                                📍
                            </div>

                            <h3 class="h5">
                                Dirección
                            </h3>

                            <p class="mb-0">
                                San Juan de Pasto, Nariño
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Horario -->
                <div class="col-md-4">

                    <div
                        class="card border-0 shadow-sm h-100 text-center"
                    >

                        <div class="card-body">

                            <div class="fs-1">
                                🕐
                            </div>

                            <h3 class="h5">
                                Horario
                            </h3>

                            <p class="mb-0">
                                Lunes a sábado
                            </p>

                            <p class="mb-0">
                                8:00 a. m. – 8:00 p. m.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Teléfono -->
                <div class="col-md-4">

                    <div
                        class="card border-0 shadow-sm h-100 text-center"
                    >

                        <div class="card-body">

                            <div class="fs-1">
                                📞
                            </div>

                            <h3 class="h5">
                                Teléfono
                            </h3>

                            <p class="mb-0">
                                300 000 0000
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Formulario -->
            <div class="row justify-content-center mt-5">

                <div class="col-md-8">

                    <div class="card shadow-sm border-0">

                        <div class="card-body p-4">

                            <h3 class="h4 fw-bold mb-4 text-center">
                                SOLICITA INFORMACIÓN
                            </h3>

                            <form>

                                <div class="mb-3">

                                    <label
                                        for="nombre"
                                        class="form-label"
                                    >
                                        Nombre
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nombre"
                                        placeholder="Escribe tu nombre"
                                    >

                                </div>

                                <div class="mb-3">

                                    <label
                                        for="correo"
                                        class="form-label"
                                    >
                                        Correo electrónico
                                    </label>

                                    <input
                                        type="email"
                                        class="form-control"
                                        id="correo"
                                        placeholder="ejemplo@correo.com"
                                    >

                                </div>

                                <div class="mb-3">

                                    <label
                                        for="moto"
                                        class="form-label"
                                    >
                                        Moto de interés
                                    </label>

                                    <select
                                        class="form-select"
                                        id="moto"
                                    >

                                        <option selected>
                                            Selecciona un modelo
                                        </option>

                                        <option>
                                            Kawasaki Ninja
                                        </option>

                                        <option>
                                            Kawasaki Z
                                        </option>

                                        <option>
                                            Kawasaki Versys
                                        </option>

                                        <option>
                                            Kawasaki Touring
                                        </option>

                                    </select>

                                </div>

                                <div class="mb-3">

                                    <label
                                        for="mensaje"
                                        class="form-label"
                                    >
                                        Mensaje
                                    </label>

                                    <textarea
                                        class="form-control"
                                        id="mensaje"
                                        rows="4"
                                        placeholder="Escribe tu mensaje"
                                    ></textarea>

                                </div>

                                <button
                                    type="submit"
                                    class="btn btn-kawasaki w-100"
                                >
                                    ENVIAR SOLICITUD
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer
        class="bg-dark text-white text-center py-4"
    >

        <div class="container">

            <p class="mb-1 fw-bold text-kawasaki">
                🏍️ KAWASAKI MOTORS
            </p>

            <p class="mb-0 text-white-50">
                Motocicletas, accesorios y servicio especializado.
            </p>

            <p class="mb-0 text-white-50 mt-2">
                © 2026 Kawasaki Motors - Todos los derechos reservados.
            </p>

        </div>

    </footer>

    <!-- Bootstrap JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>

@endsection
