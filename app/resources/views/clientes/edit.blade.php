@extends('layouts.app')
@section('content')
<div class="container">
<h2>Editar Cliente</h2>
<form action="{{ route('clientes.update', $cliente) }}" method="POST">
@csrf
@method('PUT')
Nombre: <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="form-control" required><br>
Correo: <input type="email" name="correo" value="{{ $cliente->correo }}" class="form-control" required><br>
Teléfono: <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="form-control" required><br>
Ciudad: <input type="text" name="ciudad" value="{{ $cliente->ciudad }}" class="form-control" required><br>
Mensaje: <textarea name="mensaje" class="form-control">{{ $cliente->mensaje }}</textarea><br>
<button type="submit" class="btn btn-primary">Actualizar</button>
</form>
</div>
@endsection
