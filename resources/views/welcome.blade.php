<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THE JEPETO BIKE STORE</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Figtree, sans-serif;
            min-height: 100vh;
            background: url('{{ asset('images/samples/FONDO.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            color: white;
        }

        nav {
            display: flex;
            gap: 1rem;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        nav a {
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            font-weight: bold;
            text-decoration: none;
            color: white;
            border: 2px solid white;
            border-radius: 0.5rem;
            background-color: rgba(0, 0, 0, 0.6);
            transition: all 0.2s ease-in-out;
        }

        nav a:hover {
            background-color: #FF2D20;
            color: white;
            border-color: #FF2D20;
        }

        .carousel-item img {
            object-fit: cover;
            width: 100vw;
            height: 100vh;
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .overlay-text h1 {
            font-size: 4rem;
            margin: 0;
        }

        .overlay-text p {
            font-size: 1.5rem;
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <!-- Carrusel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/carrusel/6.png') }}" alt="Imagen 6">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carrusel/7.png') }}" alt="Imagen 7">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carrusel/8.png') }}" alt="Imagen 8">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carrusel/9.png') }}" alt="Imagen 9">
            </div>
        </div>
    </div>

    <!-- Texto Central -->
    <div class="overlay-text">
        <h1>THE JEPETO BIKE STORE</h1>
        <p>Cutipa Hancco Miguel Isac</p>
        <p>Charca Mamani Paul Geovanni</p>
        <p>Paja Quispe Michelly Rocio</p>
    </div>

    <nav>
        @auth
        <a href="{{ url('/home') }}">Dashboard</a>
        @else
        <a href="{{ route('login') }}">Log in</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
