@extends('layouts.dashboard')

@section('content')
    <h1>All posts for the Admin</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Cover</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td scoper="row">{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td> <img src="{{ asset('storage/' .$post->cover ) }}" alt=""> </td>
                <td> <a href="" class="btn btn-primary">View<i class="fas fa-eye fa-xs fa-fw"></i></a> </td> 
            </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection