@extends('layouts.dashboard')

@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <!-- <img width="200px" src="img/DC_Main.png" alt=""> -->
                </div>

                <div class="links">
                    <a href="{{ route('posts') }}">SEE ALL COMICS</a>
                </div>
            </div>
        </div>
@endsection