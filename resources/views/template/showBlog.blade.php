@extends('layouts.app')


@section('content')

    <main>
        <section class="showblog">
            <div class="wrapperApropos">
                <div class="contentApropos">
                    <h1 style="font-size:75px">Blog</h1>
                </div>
            </div>
        </section>

        <section class="description">
            <div class="container">
                <h2 class="font-weight-bold" style="color:#EB641C; margin-top:60px">{{$post->title}}</h2>
                <div class="colorApropos">
                    <p>
                       {{$post->description}}
    
                    </p>
                </div>
            </div>
        </section>
    </main>

@endsection