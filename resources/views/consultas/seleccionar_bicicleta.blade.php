@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Seleccionar Bicicleta</h1>
    <form action="{{ route('consultas.bicicleta.mostrar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="byke_id">Seleccionar Bicicleta</label>
            <select name="byke_id" id="byke_id" class="form-control">
                <option value="">-- Selecciona una bicicleta --</option>
                @foreach ($bykes as $byke)
                    <option value="{{ $byke->id }}">{{ $byke->nombre }}</option>
                @endforeach
            </select>
            @error('byke_id') 
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Consultar</button>
    </form>
</div>
@endsection