@extends('layouts.app')

@section('title', 'Clientes registrados')

@section('contenido')
    <div class="d-flex flex-column flex-md-row justify-content-between mb-4 gap-3">
        <div>
            <h1 class="h3 fw-bold mb-1">Clientes registrados</h1>
            <p class="text-secondary mb-0">
                Información consultada desde la base de datos.
            </p>
        </div>

        <a href="" class="btn btn-cafe align-self-start">
            Registrar cliente
        </a>
    </div>

    @if (session('exito'))
        <div class="alert alert-success">
            {{ session('exito') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Ciudad</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->correo }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->ciudad }}</td>
                                <td>{{ $cliente->mensaje }}</td>
                                <td>{{ $cliente->created_at->format('d/m/Y H:i') }}</td>
                                <td><a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-secondary">
                                    Todavía no existen registros.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

