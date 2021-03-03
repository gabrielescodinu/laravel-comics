@extends('layouts.dashboard')

@section('content')
<div class="admin">
    <h1>Admin</h1>

    <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Create a new post</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Cover</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td scoper="row">{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td> <img width="200px" src="{{ asset('storage/' .$post->cover ) }}" alt=""> </td>
                <td>
                    <a href="{{route('admin.posts.show', ['post'=> $post->id])}}" class="btn btn-primary">View<i class="fas fa-eye fa-xs fa-fw"></i></a>
                    <a href="#" class="btn btn-warning">Edit<i class="fas fa-pencil-ruler fa-xs fa-fw"></i></a>
                    <a href="#" class="btn btn-danger">Delete<i class="fas fa-trash fa-xs fa-fw"></i></a>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
@endsection