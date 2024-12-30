
@extends('layouts.app')

@section('content')
    <h3>Lista de Proveedores</h3>

    <br>

    <a href="{{ route('supplier.create') }}" class="btn btn-success">Crear Proveedor
    </a>

    <section class="section">
        <br>
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">PROVEEDORES</h4>
                    </div>
                    <div class="card-content">

                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>NOMBRE</th>
                                        <th>PAÍS</th>
                                        <th>ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suppliers as $supplier)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-bold-500">{{ $supplier->nombre }}</td>
                                            <td>{{ $supplier->pais }}</td>
                                            <td>

                                                <a href="{{ route('supplier.show', $supplier->id) }}" class="btn btn-primary rounded-pill">Show
                                                </a>
                                                <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-warning rounded-pill">Edit
                                                </a>
                                                <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger rounded-pill">Delete
                                                    </button>
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

    @if (session('success'))
    <script>
        Swal.fire({
            title: '¡Éxito!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'Entendido'
        });
    </script>
    @endif

    @if (session('error'))
    <script>
        Swal.fire({
            title: '¡Éxito!',
            text: '{{ session('error') }}',
            icon: 'error',
            confirmButtonText: 'Entendido'
        });
    </script>
    @endif

    @if (session('warning'))
    <script>
        Swal.fire({
            title: '¡Éxito!',
            text: '{{ session('warning') }}',
            icon: 'warning',
            confirmButtonText: 'Entendido'
        });
    </script>
    @endif

@endsection