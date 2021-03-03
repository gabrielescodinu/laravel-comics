@extends('layouts.dashboard')

@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ route('admin.index') }}">Admin</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <img width="200px" src="img/DC_Main.png" alt="">
        </div>

        <div class="links">
            <a href="{{ route('posts') }}">SEE ALL COMICS</a>
        </div>
    </div>
</div>

@endsection
