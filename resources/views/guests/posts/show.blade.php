@extends('layouts.app')

@section('content')
    <div class="show">
        <div class="show-info">            
            <h1>{{ $post->title }}</h1>
            <h3> <span>U.S. Price: ${{ $post->price }}</span> <a href="" class="buy-now"><span>BUY NOW</span></a></h3>
            <p>{{ $post->body }}</p>
        </div>       
    </div>
@endsection