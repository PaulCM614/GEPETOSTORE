@extends('layouts.app')

@section('content')
    <h3>Modificar Categoria</h3>

    <br>

    <div class="col-md-6 col-12">
        <div class="card">
            <br>
            <div class="card-header">
                <h4 class="card-title">Ingrese datos de Categoria</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="POST" class="form form-vertical">

                        @csrf
                        @method('PUT')
                    
                        <div class="form-body">
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Nombre de la Categoria</label>
                                        <div class="position-relative">
                                            <input name="nombre" type="text" class="form-control" value="{{ $category->nombre }}" id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="country-id-icon">Descripcion</label>
                                        <div class="position-relative">
                                            <input name="descripcion" type="text" class="form-control" value="{{ $category->descripcion }}" id="country-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-geo-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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