@extends('layouts.base')
@section('head')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

<div id="auth">
    <div class="row h-100">

        <div class="col-lg-5 col-12 d-flex align-items-center justify-content-center">
            <div id="auth-left">
                <h1 class="auth-title">Iniciar Sesión</h1>
                <br>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" id="email" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo" required autocomplete="email" autofocus>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input class="form-control form-control-xl" placeholder="Contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <button class="btn btn-dark btn-block btn-lg shadow-lg mt-5" type="submit">Ingresar</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-900">¿No tienes una cuenta? <a href="{{ route('register') }}" class="font-bold text-black">Crear Cuenta</a></p>
                </div>
            </div>
        </div>

        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/carrusel/1.png') }}" alt="Imagen 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/carrusel/2.png') }}" alt="Imagen 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/carrusel/3.png') }}" alt="Imagen 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/carrusel/4.png') }}" alt="Imagen 4">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/carrusel/5.png') }}" alt="Imagen 5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
