@extends('layouts.app')

@section('content')
<style>
    body {
    background-image: url('img/background2.jpg');
    background-size: cover;
    background-attachment: fixed;
}
</style>
<div class="home">
        <div class="social-side">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-pinterest"></i></a>
            <a href=""><i class="fas fa-plus"></i></a>
        </div>
    <a href="{{ route('posts') }}"><img height="400px" src="img/DC-logo-infinite.svg" alt="">  </a>  
</div>

@endsection