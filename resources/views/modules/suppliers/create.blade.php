@extends('layouts.app')

@section('content')
    <h3>Crear Proveedor</h3>

    <br>

    <div class="col-md-6 col-12">
        <div class="card">
            <br>
            <div class="card-header">
                <h4 class="card-title">Ingrese datos de Proveedor</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('supplier.store') }}" method="POST" class="form form-vertical">

                        @csrf
                    
                        <div class="form-body">
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Nombre del Proveedor</label>
                                        <div class="position-relative">
                                            <input name="nombre" type="text" class="form-control" placeholder="Nombre" id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-icon">Email</label>
                                        <div class="position-relative">
                                            <input name="email" class="form-control" placeholder="Email" id="email-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="web-id-icon">Página web</label>
                                        <div class="position-relative">
                                            <input name="pagina_web" class="form-control" placeholder="www.ejemplo.com" id="web-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-globe"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="country-id-icon">País</label>
                                        <div class="position-relative">
                                            <input name="pais" type="text" class="form-control" placeholder="Ejemplo: Perú" id="country-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-geo-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection