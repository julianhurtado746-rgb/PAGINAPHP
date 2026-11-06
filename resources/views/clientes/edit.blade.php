<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Editar cliente</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body class="bg-light">

    <header class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="h2 mb-1">Editar cliente</h1>
            <p class="mb-0">
                Modifique la información y guarde los cambios.
            </p>
        </div>
    </header>

    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Revise los siguientes datos:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form
                            action="{{ route('clientes.update', $cliente) }}"
                            method="POST">

                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nombre" class="form-label">
                                    Nombre
                                </label>
                                <input
                                    type="text"
                                    id="nombre"
                                    name="nombre"
                                    class="form-control"
                                    value="{{ old('nombre', $cliente->nombre) }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="correo" class="form-label">
                                    Correo electrónico
                                </label>
                                <input
                                    type="email"
                                    id="correo"
                                    name="correo"
                                    class="form-control"
                                    value="{{ old('correo', $cliente->correo) }}"
                                    required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="telefono" class="form-label">
                                        Teléfono
                                    </label>
                                    <input
                                        type="text"
                                        id="telefono"
                                        name="telefono"
                                        class="form-control"
                                        value="{{ old('telefono', $cliente->telefono) }}"
                                        required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="ciudad" class="form-label">
                                        Ciudad
                                    </label>
                                    <input
                                        type="text"
                                        id="ciudad"
                                        name="ciudad"
                                        class="form-control"
                                        value="{{ old('ciudad', $cliente->ciudad) }}"
                                        required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="mensaje" class="form-label">
                                    Mensaje
                                </label>
                                <textarea
                                    id="mensaje"
                                    name="mensaje"
                                    class="form-control"
                                    rows="4">{{ old('mensaje', $cliente->mensaje) }}</textarea>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit"
                                        class="btn btn-primary">
                                    Guardar cambios
                                </button>

                                <a href="{{ route('clientes.index') }}"
                                   class="btn btn-outline-secondary">
                                    Cancelar
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
