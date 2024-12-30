@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Resultados de la Consulta</h1>
    <h2>Cliente: {{ $customer->nombre }} {{ $customer->apellido }}</h2>
    <table id="customerTable" class="table table-striped">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Fecha</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->byke->nombre }}</td>
                    <td>{{ $sale->created_at }}</td>
                    <td>{{ $sale->cantidad }}</td>
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