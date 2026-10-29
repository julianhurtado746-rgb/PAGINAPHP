<h1>Editar Cliente: {{ $cliente->nombre }}</h1>

<form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
    @csrf
    @method('PUT')

    Nombre: <input type="text" name="nombre" value="{{ $cliente->nombre }}" required><br><br>
    Correo: <input type="email" name="correo" value="{{ $cliente->correo }}" required><br><br>
    Teléfono: <input type="text" name="telefono" value="{{ $cliente->telefono }}" required><br><br>
    Ciudad: <input type="text" name="ciudad" value="{{ $cliente->ciudad }}" required><br><br>
    Mensaje: <textarea name="mensaje">{{ $cliente->mensaje }}</textarea><br><br>

    <button type="submit">Actualizar</button>
    <a href="{{ route('clientes.index') }}">Cancelar</a>
</form>
