@extends('layouts.app')

@section('content')
    <h3> Cliente </h3>

    <br>

    <div class="col-md-6 col-12">
        <div class="card">
            <br>
            <div class="card-header">
                <h4 class="card-title">Datos de Cliente</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('customer.index') }}" class="form form-vertical">

                    
                        <div class="form-body">
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Nombre del Cliente</label>
                                        <div class="position-relative">
                                            <input name="nombre" type="text" class="form-control" placeholder="{{ $customer->nombre }}" id="first-name-icon" disabled>
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
                                            <input name="nombre" type="text" class="form-control" placeholder="{{ $customer->apellido }}" id="first-name-icon" disabled>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Email del Cliente</label>
                                        <div class="position-relative">
                                            <input name="email" type="email" class="form-control" placeholder="{{ $customer->email }}" id="first-name-icon" disabled>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Telefono del Cliente</label>
                                        <div class="position-relative">
                                            <input name="telefono" type="number" class="form-control" placeholder="{{ $customer->telefono }}" id="first-name-icon" disabled>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Direccion del Cliente</label>
                                        <div class="position-relative">
                                            <input name="direccion" type="text" class="form-control" placeholder="{{ $customer->direccion }}" id="first-name-icon" disabled>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
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