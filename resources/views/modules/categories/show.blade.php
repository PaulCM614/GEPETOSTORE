@extends('layouts.app')

@section('content')
    <h3> Categoria </h3>

    <br>

    <div class="col-md-6 col-12">
        <div class="card">
            <br>
            <div class="card-header">
                <h4 class="card-title">Datos de Categoria</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('category.index') }}" class="form form-vertical">

                    
                        <div class="form-body">
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Nombre de la Categoria</label>
                                        <div class="position-relative">
                                            <input name="nombre" type="text" class="form-control" placeholder="{{ $category->nombre }}" id="first-name-icon" disabled>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="country-id-icon">Descripción</label>
                                        <div class="position-relative">
                                            <textarea name="descripcion" class="form-control" placeholder="{{ $category->descripcion }}" id="country-id-icon" rows="4" disabled></textarea>
                                            <div class="form-control-icon">
                                                <i class="bi bi-geo-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection