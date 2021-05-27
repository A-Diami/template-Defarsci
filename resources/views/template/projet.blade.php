@extends('layouts.app')

@section('content')
    <main>
        <section class="projet">
            <div class="wrapperApropos">
                <div class="contentApropos">
                        <h1 style="font-style: normal;font-weight: bold;font-size: 90px;line-height: 117px;">Projet</h1>
                </div>
            </div>
        </section>

        <section class="description">
            <div class="container">
                @foreach ($projets as $projet )
                    <h2 class="font-weight-bold" style="color:#EB641C;width:155px; height:35px; margin-top:60px">{{$projet->title}}</h2>
                    <div class="colorApropos">
                        <p>
                            {{$projet->description}}
                        </p>
                    </div>
                @endforeach
              
            </div>
        </section>
    </main>
@endsection