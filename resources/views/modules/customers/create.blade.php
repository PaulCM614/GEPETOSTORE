@extends('layouts.app')

@section('content')
    <h3>Crear Cliente</h3>

    <br>

    <div class="col-md-6 col-12">
        <div class="card">
            <br>
            <div class="card-header">
                <h4 class="card-title">Ingrese datos de Cliente</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('customer.store') }}" method="POST" class="form form-vertical">

                        @csrf
                    
                        <div class="form-body">
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Nombre del Cliente</label>
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
                                        <label for="first-name-icon">Apellido del Cliente</label>
                                        <div class="position-relative">
                                            <input name="apellido" type="text" class="form-control" placeholder="Apellido" id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Email Cliente</label>
                                        <div class="position-relative">
                                            <input name="email" type="email" class="form-control" placeholder="Email" id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Telefono Cliente</label>
                                        <div class="position-relative">
                                            <input name="telefono" type="number" class="form-control" placeholder="Telefono" id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Direccion Cliente</label>
                                        <div class="position-relative">
                                            <input name="direccion" type="text" class="form-control" placeholder="Direccion" id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
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