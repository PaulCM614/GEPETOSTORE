@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Resultados de la Consulta</h1>
    <h2>Fecha: {{ request('date') }}</h2>
    <table id="dateTable" class="table table-striped">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Bicicleta</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->customer->nombre }} {{ $sale->customer->apellido }}</td>
                    <td>{{ $sale->byke->nombre }}</td>
                    <td>{{ $sale->cantidad }}</td>
                    <td>{{ $sale->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#dateTable').DataTable();
    });
</script>
@endsection