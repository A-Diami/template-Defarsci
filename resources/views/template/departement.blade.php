@extends('layouts.app')

@section('content')
    <main>
        <section class="departement">
            <div class="wrapperApropos">
                <div class="contentApropos">
                    <h1 style="font-size:45px">Departements</h1>
                </div>
            </div>
        </section>
        <br/>
        <section class="description">
            <div class="container">
            @foreach($departements as $departement)
                <h2 class="font-weight-bold" style="color:#EB641C;width:285px; height:50px; margin-top:60px">{{$departement->title}}</h2>
                <div class="colorApropos">
                    <p>
                        {{$departement->description}}
    
                    </p>
                </div>
                <section class="departementsImage">
            <div class="container-fluid">
                <div class="row text-center">
                @foreach($departement->images as $image)
                    <div class="col-lg-4">
                            <div class="card-body">
                                <div class="img">
                                    <img src="{{ asset('photo/'.$image->image)}}" class="img-fluid" />
                                </div>
                            </div>
                    </div>
                   
                    @endforeach

                    
                </div>
            </div>
        </section>
            @endforeach
            </div>
        </section>
        <br><br><br>
       
    </main>
@endsection