@extends('layouts.app')

@section('content')
    <h1 class="novel">Comics and Graphic Novels</h1>

    <div class="comics">
        @foreach ($posts as $post)
        <div>
            <a href="{{ route('show', ['post'=> $post->id]) }}"><img src="{{ asset('storage/' .$post->cover ) }}" alt=""></a>
            <h5> {{ $post->title }} </h5>
            <h6> AVAILABLE NOW </h6>
        </div>            
        @endforeach
    </div>

    <div class="must-reads">
        <h1>Must Reads</h1>
        <div class="must-reads-container">
            <div>
                <a href=""><img src="img/cover1.jpg" alt=""></a>
                <h6>GET THE INSIDE TRACK ON ALL THINGS DC</h6>
                <h3>DC CONNECT</h3>
                <p>The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</p> 
            </div> 
            <div>
                <a href=""><img src="img/cover2.jpg" alt=""></a>
                <h6>GET THE INSIDE TRACK ON ALL THINGS DC</h6>
                <h3>DC CONNECT</h3>
                <p>The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</p> 
            </div>  
            <div>
                <a href=""><img src="img/cover3.jpg" alt=""></a>
                <h6>GET THE INSIDE TRACK ON ALL THINGS DC</h6>
                <h3>DC CONNECT</h3>
                <p>The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</p> 
            </div>  
        </div>
    </div>

    <div class="new">
        <h1>NEW ON DC UNIVERSE INFINITE</h1>
        <div class="new-container">
            <a href="">
                <div class="banner">
                    <img src="img/banner1.jpg" alt="">
                    <div class="banner-info">
                        <h3>Harleen</h3>
                        <div></div>
                        <h6>Explorer More</h6>
                    </div>
                </div> 
            </a>
            <a href="">
                <div class="banner">
                    <img src="img/banner2.jpg" alt="">
                    <div class="banner-info">
                        <h3>Harleen</h3>
                        <div></div>
                        <h6>Explorer More</h6>
                    </div>
                </div> 
            </a>
            <a href="">
                <div class="banner">
                    <img src="img/banner3.jpg" alt="">
                    <div class="banner-info">
                        <h3>Harleen</h3>
                        <div></div>
                        <h6>Explorer More</h6>
                    </div>
                </div> 
            </a>
            <a href="">
                <div class="banner">
                    <img src="img/banner4.png" alt="">
                    <div class="banner-info">
                        <h3>Harleen</h3>
                        <div></div>
                        <h6>Explorer More</h6>
                    </div>
                </div> 
            </a>
            <a href="">
                <div class="banner">
                    <img src="img/banner5.png" alt="">
                    <div class="banner-info">
                        <h3>Harleen</h3>
                        <div></div>
                        <h6>Explorer More</h6>
                    </div>
                </div> 
            </a>
            <a href="">
                <div class="banner">
                    <img src="img/banner6.jpg" alt="">
                    <div class="banner-info">
                        <h3>Harleen</h3>
                        <div></div>
                        <h6>Explorer More</h6>
                    </div>
                </div> 
            </a>
            <a href="">
                <div class="banner">
                    <img src="img/banner7.png" alt="">
                    <div class="banner-info">
                        <h3>Harleen</h3>
                        <div></div>
                        <h6>Explorer More</h6>
                    </div>
                </div> 
            </a>
            <a href="">
                <div class="banner">
                    <img src="img/banner8.png" alt="">
                    <div class="banner-info">
                        <h3>Harleen</h3>
                        <div></div>
                        <h6>Explorer More</h6>
                    </div>
                </div> 
            </a>
            <a href="">
                <div class="banner">
                    <img src="img/banner9.png" alt="">
                    <div class="banner-info">
                        <h3>Harleen</h3>
                        <div></div>
                        <h6>Explorer More</h6>
                    </div>
                </div> 
            </a>
        </div>
    </div>
@endsection