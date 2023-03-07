@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($foods as $food)
            <div class="col-sm-6 col-md-4">
                <div class="card mb-4">
                    <img src="{{ $food->image }}" class="card-img-top" alt="{{ $food->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $food->name }}</h5>
                        <p class="card-text">{{ $food->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $food->category }}</li>
                        <li class="list-group-item">Price: {{ $food->price }}$</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
