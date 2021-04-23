@extends('layouts.app')

@section('content')
    <main>
        <section class="apropos">
            <div class="wrapperApropos">
                <div class="contentApropos">
                    <h1 style="font-size:75px">A propos</h1>
                </div>
            </div>
        </section>

        <section class="description">
            <div class="container">
                
                <h2 class="font-weight-bold" style="color:#EB641C;width:155px; height:35px; margin-top:60px">Description</h2>
                <div class="colorApropos">
                    <p>
                        Conversely, study of slight practices needs to be processed together 
                        with the complete failure  of the supposed theory.  On the contrary, dimensions of the criterion the general 
                        features and possibilities of the crucial component any productivity boost. This may be done through the
                        set of related commands and controls.  
    
                    </p>
                    <p>
                        Conversely, study of slight practices needs to be processed together 
                        with the complete failure  of the supposed theory.  On the contrary, dimensions of the criterion the general 
                        features and possibilities of the crucial component any productivity boost. This may be done through the
                        set of related commands and controls.  
    
                    </p>
                    
                </div>
            </div>
        </section>

        <section class="mission">
        <div class="container">
                <h2 class="font-weight-bold" style="color:#EB641C;width:199px; height:35px; margin-top:60px">Nos missions</h2>
                <div class="colorApropos">
                    <p>
                        Conversely, study of slight practices needs to be processed together 
                        with the complete failure  of the supposed theory.  On the contrary, dimensions of the criterion the general 
                        features and possibilities of the crucial component any productivity boost. This may be done through the
                        set of related commands and controls.  
    
                    </p>
                    <p>
                        Conversely, study of slight practices needs to be processed together 
                        with the complete failure  of the supposed theory.  On the contrary, dimensions of the criterion the general 
                        features and possibilities of the crucial component any productivity boost. This may be done through the
                        set of related commands and controls.  
    
                    </p>
                    <p>
                        Conversely, study of slight practices needs to be processed together 
                        with the complete failure  of the supposed theory.  On the contrary, dimensions of the criterion the general 
                        features and possibilities of the crucial component any productivity boost. This may be done through the
                        set of related commands and controls.  
    
                    </p>
                </div>
            </div>
        </section>
        <br/><br/>
        <section class="tiret">
            <ul class="bar" id="myTimer">
                <li class="step step01 active"><div class="step-inner">2015</div></li>
                <li class="step step02"><div class="step-inner">2018</div></li>
                <li class="step step03"><div class="step-inner">2021</div></li>
                
            </ul>
            <br/><br/><br/><br/><br/><br/>
                <div id="progress-content" class="d-none">
                    <div class="section-content discovery active">
                        <h2>2015</h2>
                        <p>Conversely, study of slight practices needs to be processed together with the complete failure of the supposed theory. On the contrary, dimensions of the criterion the general features and possibilities of the crucial component any productivity boost. This may be done through the set of related commands and controls.</p>
                        
                    </div>

                    <div class="section-content strategy">
                        <h2>2018</h2>
                        <p>Conversely, study of slight practices needs to be processed together with the complete failure of the supposed theory. On the contrary, dimensions of the criterion the general features and possibilities of the crucial component any productivity boost. This may be done through the set of related commands and controls.</p>
                    </div>


                    <div class="section-content creative">
                        <h2>2021</h2>
                        <p>Conversely, study of slight practices needs to be processed together with the complete failure of the supposed theory. On the contrary, dimensions of the criterion the general features and possibilities of the crucial component any productivity boost. This may be done through the set of related commands and controls.</p>
                    
                    </div>

                </div>
        </section>

        <br/><br/>
        <section class="projets text-center">
            <div class="container">
                <h2 class="font-weight-bold" style="color:#85ADDB;font-size:60px;margin-top:60px">Projets</h2>
                <div class="wrap"style="margin-top:40px;">
                    <button class="button" ><a href="{{route('projet')}}" style="text-decoration:none; color:#EB641C" >Découvrir</a></button>
                </div>
            </div>
        </section>
            <br/></br>
        <section class="equipeApropos">
            <div class="container-fluid">
            <h2 class="font-weight-bold" style="color:#EB661F;font-size:60px;margin-top:50px;margin-left:50px">Equipe</h2><br/><br/>
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
        <br/><br/>
    </main>
@endsection

