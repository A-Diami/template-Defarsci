@extends('layouts.app')

@section('content')
    <main>
        <section class="equipe">
                <div class="wrapperApropos">
                    <div class="contentApropos">
                        <h1 style="font-size:55px">Equipe</h1>
                    </div>
                </div>
        </section>
        
        <section class="equipeApropos">
            <div class="container-fluid">
            <h2 class="font-weight-bold" style="color:#EB661F;font-size:60px;width:148px; height:47px; margin-left:50px; margin: top 30px;">Equipe</h2>
                <div class="row text-center">
                    <div class="col-lg-4">
                            <div class="card-body">
                                <div class="img">
                                    <img src="{{ asset('images/Rectangle_11.png')}}" class="img-fluid" />
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="card-body">
                                <div class="img">
                                    <img src="{{ asset('images/Rectangle_11.png')}}" class="img-fluid" />
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="card-body">
                                <div class="img">
                                    <img src="{{ asset('images/Rectangle_11.png')}}" class="img-fluid" />
                                </div>
                            </div>
                    </div>

                    <div class="col-lg-4">
                            <div class="card-body">
                                <div class="img">
                                    <img src="{{ asset('images/Rectangle_11.png')}}" class="img-fluid" />
                                </div>
                            </div>
                    </div>

                    <div class="col-lg-4">
                            <div class="card-body">
                                <div class="img">
                                    <img src="{{ asset('images/Rectangle_11.png')}}" class="img-fluid" />
                                </div>
                            </div>
                    </div>

                    <div class="col-lg-4">
                            <div class="card-body">
                                <div class="img">
                                    <img src="{{ asset('images/Rectangle_11.png')}}" class="img-fluid" />
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection