@extends('layouts.app')

@section('content')
    <h3>Modificar Cliente</h3>

    <br>

    <div class="col-md-6 col-12">
        <div class="card">
            <br>
            <div class="card-header">
                <h4 class="card-title">Ingrese datos de Cliente</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('customer.update', $customer->id) }}" method="POST" class="form form-vertical">

                        @csrf
                        @method('PUT')
                    
                        <div class="form-body">
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Nombre del Cliente</label>
                                        <div class="position-relative">
                                            <input name="nombre" type="text" class="form-control" value="{{ $customer->nombre }}" id="first-name-icon">
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
                                            <input name="apellido" type="text" class="form-control" value="{{ $customer->apellido }}" id="first-name-icon">
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
                                            <input name="email" type="email" class="form-control" value="{{ $customer->email }}" id="first-name-icon">
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
                                            <input name="telefono" type="number" class="form-control" value="{{ $customer->telefono }}" id="first-name-icon">
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
                                            <input name="direccion" type="text" class="form-control" value="{{ $customer->direccion }}" id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
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




@endsection