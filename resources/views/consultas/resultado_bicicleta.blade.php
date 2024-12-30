@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Resultados de la Consulta</h1>
    <h2>Bicicleta: {{ $byke->nombre }}</h2>
    <table id="bykeTable" class="table table-striped">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->customer->nombre }} {{ $sale->customer->apellido }}</td>
                    <td>{{ $sale->created_at }}</td>
                    <td>{{ $sale->cantidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#bykeTable').DataTable();
    });
</script>
@endsection