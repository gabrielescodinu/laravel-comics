@extends('layouts.app')

@section('content')
    <h1>Comics and Graphic Novel</h1>

    <div class="comics">
        @foreach ($posts as $post)
        <div>
            <a href=""><img src="{{ asset('storage/' .$post->cover ) }}" alt=""></a>
            <h5> {{ $post->title }} </h5>
            <h6> AVAILABLE NOW </h6>
        </div>            
        @endforeach
    </div>
@endsection