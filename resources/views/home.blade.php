@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @php
            $bikes = [
                ['name' => 'Canyon Sender', 'image' => 'images/bikes/10.png'],
                ['name' => 'Santa Cruz V10', 'image' => 'images/bikes/11.png'],
                ['name' => 'Specialized Demo 8', 'image' => 'images/bikes/12.png'],
                ['name' => 'Specialized Demo Expert', 'image' => 'images/bikes/13.png'],
                ['name' => 'Canyon Torque', 'image' => 'images/bikes/14.png'],
                ['name' => 'Commencal DH', 'image' => 'images/bikes/15.png'],
                ['name' => 'Trek Session', 'image' => 'images/bikes/16.png'],
                ['name' => 'Giant Glory 2024', 'image' => 'images/bikes/17.png'],
                ['name' => 'Scott Gambler', 'image' => 'images/bikes/18.png'],
            ];
        @endphp

        @foreach ($bikes as $bike)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset($bike['image']) }}" 
                     class="card-img-top" 
                     alt="{{ $bike['name'] }}" 
                     style="width: 410px; height: 390px; object-fit: cover; margin: 0 auto;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $bike['name'] }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
