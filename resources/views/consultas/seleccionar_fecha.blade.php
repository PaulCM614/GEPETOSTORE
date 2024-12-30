@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Seleccionar Fecha</h1>
    <form action="{{ route('consultas.fecha.mostrar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="date">Seleccionar Fecha</label>
            <select name="date" id="date" class="form-control">
                <option value="">-- Selecciona una fecha --</option>
                @foreach ($dates as $date)
                    <option value="{{ $date->date }}">{{ $date->date }}</option>
                @endforeach
            </select>
            @error('date') 
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Consultar</button>
    </form>
</div>
@endsection