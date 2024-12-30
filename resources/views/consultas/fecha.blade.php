@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Consultas por Fecha</h1>
    <table id="fechaTable" class="table table-striped">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->created_at }}</td>
                    <td>{{ $venta->customer->nombre }}</td>
                    <td>{{ $venta->byke->nombre }}</td>
                    <td>{{ $venta->cantidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#fechaTable').DataTable();
    });
</script>
@endsection