@extends('layouts.app')

@section('content')
    <div class="social-side">
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-pinterest"></i></a>
        <a href=""><i class="fas fa-plus"></i></a>
    </div>
    <div class="show">
        <img width="200px" src="{{ asset('storage/' .$post->cover ) }}" alt="">
        <div class="show-info">            
            <h1>{{ $post->title }}</h1>
            <h3> <span>U.S. Price: <span id="price">${{ $post->price }}</span></span> <a href="" class="buy-now"><span>BUY NOW</span></a></h3>
            <p>{{ $post->body }}</p>
        </div>       
    </div>
@endsection