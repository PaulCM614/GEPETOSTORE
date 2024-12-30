
@extends('layouts.app')

@section('content')
    <h3>Lista de Categorias</h3>

    <br>

    <a href="{{ route('category.create') }}" class="btn btn-success">Crear Categoria
    </a>

    <section class="section">
        <br>
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">CATEGORIAS</h4>
                    </div>
                    <div class="card-content">

                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>NOMBRE</th>
                                        <th>ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-bold-500">{{ $category->nombre }}</td>
                                            <td>

                                                <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary rounded-pill">Show
                                                </a>
                                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning rounded-pill">Edit
                                                </a>
                                                <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display: inline-block;">
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

@endsection