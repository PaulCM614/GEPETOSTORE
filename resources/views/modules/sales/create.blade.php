@extends('layouts.app')

@section('content')
    <h3>Registrar Venta</h3>
    <br>

    <form action="{{ route('sale.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="byke_id">Seleccionar Bicicleta</label>
            <select name="byke_id" id="byke_id" class="form-control">
                <option value="">-- Selecciona una bicicleta --</option>
                @foreach ($bykes as $byke)
                    <option value="{{ $byke->id }}">{{ $byke->nombre }} (Stock: {{ $byke->stock }})</option>
                @endforeach
            </select>
            @error('byke_id') 
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

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

        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" required>
            @error('cantidad') 
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success mt-3">Registrar Venta</button>
    </form>
@endsection
