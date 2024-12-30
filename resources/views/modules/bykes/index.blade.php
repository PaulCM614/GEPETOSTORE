@extends('layouts.app')

@section('content')
    <h3>Lista de Compras</h3>
    <a href="{{ route('purchase.create') }}" class="btn btn-success">Registrar Compra</a>

    
    <table class="table">
        
    <br>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Stock</th>
                <th>Proveedor</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bykes as $byke)
                <tr>
                    <td>{{ $byke->id }}</td>
                    <td>{{ $byke->nombre }}</td>
                    <td>{{ $byke->descripcion }}</td>
                    <td>S/ {{ number_format($byke->precio_compra, 2) }}</td>
                    <td>S/ {{ number_format($byke->precio_venta, 2) }}</td>
                    <td>{{ $byke->stock }}</td>
                    <td>{{ $byke->supplier->nombre ?? 'Sin proveedor' }}</td>
                    <td>{{ $byke->category->nombre ?? 'Sin categoría' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">No hay bicicletas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
