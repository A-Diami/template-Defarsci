@extends('layouts.app')

@section('extra-js')
    <script>
        function afficher(){
            let element= document.getElementById('progress-content');
            element.classList.toggle('d-none');
        }

        function disparaitre(){
            let element= document.getElementById('progress-content');
            element.classList.toggle('d-none');
        }

        function afficher_content(){
            let element= document.getElementById('progress_content2018');
            element.classList.toggle('d-none');
        }

        function disparaitre_content(){
            let element= document.getElementById('progress_content2018');
            element.classList.toggle('d-none');
        }

        function mouse_content(){
            let element= document.getElementById('progress_content2021');
            element.classList.toggle('d-none');
        }

        function show_content(){
            let element= document.getElementById('progress_content2021');
            element.classList.toggle('d-none');
        }


    </script>
@endsection
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
            <div class="container-fluid">
                <ul class="bar" id="myTimer">
                    <li class="step step01 active" onmouseover="afficher()" onmouseout="disparaitre()"><div class="step-inner">2015</div></li>
                    <li class="step step02" onmouseover="afficher_content()" onmouseout="disparaitre_content()"><div class="step-inner">2018</div></li>
                    <li class="step step03" onmouseover="mouse_content()" onmouseout="show_content()"><div class="step-inner">2021</div></li>
                    
                </ul>
            <br/><br/><br/><br/><br/><br/>
                <div>
                    <div class="section-content discovery active d-none"  id="progress-content">
                        <h2>2015</h2>
                        <p>Conversely, study of slight practices needs to be processed together with the complete failure of the supposed theory. On the contrary, dimensions of the criterion the general features and possibilities of the crucial component any productivity boost. This may be done through the set of related commands and controls.</p>
                        
                    </div>

                    <div class="section-content strategy d-none"  id="progress_content2018">
                        <h2>2018</h2>
                        <p>Conversely, study of slight practices needs to be processed together with the complete failure of the supposed theory. On the contrary, dimensions of the criterion the general features and possibilities of the crucial component any productivity boost. This may be done through the set of related commands and controls.</p>
                    </div>


                    <div class="section-content creative d-none"  id="progress_content2021">
                        <h2>2021</h2>
                        <p>Conversely, study of slight practices needs to be processed together with the complete failure of the supposed theory. On the contrary, dimensions of the criterion the general features and possibilities of the crucial component any productivity boost. This may be done through the set of related commands and controls.</p>
                    
                    </div>

                </div>
            </div>
        </section>

        
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
        <br/><br/>
    </main>
@endsection

