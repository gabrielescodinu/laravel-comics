@extends('layouts.app')

@section('content')
    <div class="show">
        <img width="200px" src="{{ asset('storage/' .$post->cover ) }}" alt="">
        <div class="show-info">            
            <h1>{{ $post->title }}</h1>
            <h3>U.S. Price: ${{ $post->price }}</h3>
            <p>{{ $post->body }}</p>
        </div>
        
    </div>
@endsection