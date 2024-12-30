@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Consultas por Cliente</h1>
    <table id="customerTable" class="table table-striped">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Producto</th>
                <th>Fecha</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->customer->nombre }}</td>
                    <td>{{ $venta->customer->email }}</td>
                    <td>{{ $venta->customer->telefono }}</td>
                    <td>{{ $venta->customer->direccion }}</td>
                    <td>{{ $venta->byke->nombre }}</td>
                    <td>{{ $venta->created_at }}</td>
                    <td>{{ $venta->cantidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#customerTable').DataTable();
    });
</script>
@endsection