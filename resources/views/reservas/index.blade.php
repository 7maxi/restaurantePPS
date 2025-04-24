@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Reservar Mesa</h2>
            <form action="{{ route('reservas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="mesa_id" class="form-label">Mesa:</label>
                    <select name="mesa_id" class="form-select" required>
                        @foreach ($mesas as $mesa)
                            <option value="{{ $mesa->id }}">{{ $mesa->numero_sillas }} sillas</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" name="telefono" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="numero_comensales" class="form-label">Número de Comensales:</label>
                    <input type="number" name="numero_comensales" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="fecha_inicio" class="form-label">Fecha y Hora de Inicio:</label>
                    <input type="datetime-local" name="fecha_inicio" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Reservar</button>
            </form>
        </div>
    </div>
@endsection
