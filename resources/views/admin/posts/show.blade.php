@extends('layouts.dashboard')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <img width="500px" src="{{ asset('storage/' .$post->cover ) }}" alt="">
@endsection