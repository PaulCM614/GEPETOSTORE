@extends('layouts.app')

@section('content')
    <h3>Lista de Ventas</h3>
    <br>

    <a href="{{ route('sale.create') }}" class="btn btn-success">Registrar Venta</a>

    <section class="section">
        <br>
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">VENTAS</h4>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>Bicicleta</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Total</th>
                                        <th>Cliente</th>
                                        <th>Vendedor</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales as $sale)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ optional($sale->byke)->nombre }}</td>
                                            <td>{{ $sale->cantidad }}</td>
                                            <td>S/ {{ number_format($sale->precio_unitario, 2) }}</td>
                                            <td>S/ {{ number_format($sale->total, 2) }}</td>
                                            <td>{{ optional($sale->customer)->nombre }} {{ optional($sale->customer)->apellido }}</td>
                                            <td>{{ optional($sale->user)->name }}</td>
                                            <td>{{ $sale->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <a href="{{ route('sale.pdf', $sale->id) }}" class="btn btn-secondary rounded-pill">PDF</a>
                                                <form action="{{ route('sale.destroy', $sale->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger rounded-pill">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
