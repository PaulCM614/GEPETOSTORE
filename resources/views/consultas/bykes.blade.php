@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Consultas por Bicicleta</h1>
    <table id="bykesTable" class="table table-striped">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio Unitario</th>
                <th>Proveedor</th>
                <th>Stock</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bykes as $byke)
                <tr>
                    <td>{{ $byke->nombre }}</td>
                    <td>{{ $byke->precio_venta }}</td>
                    <td>{{ $byke->supplier->nombre }}</td>
                    <td>{{ $byke->stock }}</td>
                    <td>{{ $byke->category->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#bykesTable').DataTable();
    });
</script>
@endsection