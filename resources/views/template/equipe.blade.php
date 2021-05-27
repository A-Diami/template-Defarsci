@extends('layouts.app')

@section('content')
    <main>
        <section class="equipe">
                <div class="wrapperApropos">
                    <div class="contentApropos">
                        <h1 style="font-style: normal;font-weight: bold;font-size: 100px;line-height: 117px;">Equipe</h1>
                    </div>
                </div>
        </section>
        
        <section class="equipeApropos">
            <div class="container-fluid">
            <h2 class="font-weight-bold" style="color:#EB661F;font-size:60px;width:148px; height:47px; margin-left:50px; margin: top 30px;">Equipe</h2>
                <div class="row text-center" style="margin-top:50px">
                    @foreach ($equipes as $equipe )
                    <div class="col-lg-4">
                            <div class="card-body">
                                <div class="img">
                                    <img src="{{asset('photo/'.$equipe->image)}}" class="img-fluid" />
                                </div>
                            </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </section>
    </main>
@endsection