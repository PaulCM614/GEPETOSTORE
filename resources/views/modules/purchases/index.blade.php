@extends('layouts.app')

@section('content')
    <h3>Lista de Compras</h3>
    <br>

    <a href="{{ route('purchase.create') }}" class="btn btn-success">Registrar Compra</a>

    <section class="section">
        <br>
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">COMPRAS</h4>
                    </div>
                    <div class="card-content">
                        <!-- Tabla -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>Bicicleta</th>
                                        <th>Proveedor</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Total</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases as $purchase)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ optional($purchase->byke)->nombre }}</td>
                                            <td>{{ optional($purchase->byke->supplier)->nombre }}</td>
                                            <td>{{ $purchase->cantidad }}</td>
                                            <td>S/ {{ number_format($purchase->precio_unitario, 2) }}</td>
                                            <td>S/ {{ number_format($purchase->cantidad * $purchase->precio_unitario, 2) }}</td>
                                            <td>{{ $purchase->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <form action="{{ route('purchase.destroy', $purchase->id) }}" method="POST" style="display: inline-block;">
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
