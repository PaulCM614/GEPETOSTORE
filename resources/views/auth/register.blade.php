@extends('layouts.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div id="auth">
    <div class="row h-100">
        <!-- Columna izquierda -->
        <div class="col-lg-3 col-15 d-flex align-items-center justify-content-center">
            <div id="auth-left">
                <h1 class="auth-title">Registrate</h1>
                <br>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control form-control-xl @error('name') is-invalid @enderror" placeholder="Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="form-control form-control-xl @error('name') is-invalid @enderror" placeholder="Username">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control form-control-xl @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control form-control-xl" placeholder="Confirm Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <button class="btn btn-dark btn-block btn-lg shadow-lg mt-5" type="submit">Crear Cuenta</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Ya tienes una cuenta? <a href="{{ route('login') }}" class="font-bold text-black">Iniciar Sesion</a>.</p>
                </div>
            </div>
        </div>
        <!-- Columna derecha -->
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
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
@endsection

