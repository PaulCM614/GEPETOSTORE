@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Seleccionar Cliente</h1>
    <form action="{{ route('consultas.cliente.mostrar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="customer_id">Seleccionar Cliente</label>
            <select name="customer_id" id="customer_id" class="form-control">
                <option value="">-- Selecciona un cliente --</option>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->nombre }} {{ $customer->apellido }}</option>
                @endforeach
            </select>
            @error('customer_id') 
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Consultar</button>
    </form>
</div>
@endsection