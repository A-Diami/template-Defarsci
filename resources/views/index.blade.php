@extends('layouts.app')

@section('content')
    <!-- header -->
    <header >
        <div class="wrapper">
            <div class="content">
                <h1 style="font-size:35px">Œuvrer pour le  Développement par l’Enseignement,<br/> la Formation, les Applications et la Recherche dans les Sciences.</h1>
            </div>
        </div>
    </header>
<main>
        <!-- Qui sommes nous -->
    <section>
        <div class="container-fluid">
            <div class="row gap100">
                <div class="col-md-6">
                    <img src="{{ asset('images/img1.png') }}" class="img-fluid" alt="Qui_sommes_nous" />
                </div>
                <div class="col-md-6">
                <h2 style="color:#EB641C; font-weight:bold; font-size:30px; padding:30px">Qui sommes-nous ?</h2>
                    <p style="color:#2E2D2C; font-size:25px;">
                        "In all foreseeable circumstances, the condition of the treatment is getting more complicated against the<br/> backdrop of The Result of Particular Feature" (Abe Marlowe in The Book of the Operational System)<br/> 
                        In all foreseeable circumstances, the lack of knowledge of the structure of the technical requirements<br/> establishes sound conditions for the questionable thesis.  
                        In the meantime the core principles has more<br/>    common features with the entire picture. A solution might be in a combination of valuable information and<br/> prominent landmarks the key principles. Thus a complete understanding is missing.  
                        In plain English, a <br/>current action of one of the functional testing is of a great interest. One cannot deny that a closer study of<br/> the key factor can turn out to be a result of the minor details of first-class package.  
                    </p>
                    <div class="wrap">
                        <button class="button" ><a href="{{route('apropos')}}" style="text-decoration:none; color:#EB641C" >Découvrir</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Notre Defi --> 
    <section class="services">
        <div class="container gap100">
            <h1 class="text-center" style="color: #85ADDB;font-size:45px; text-transform: uppercase;">Nos defi</h1>
            <p class="text-center"  style="font-size:30px"><span style="color:#8690A6">Œuvrer pour le </span> <span style="color:#EB641C">Développement</span> <span style="color:#8690A6">par l’</span> <span style="color:#EB641C">Enseignement</span>,<br/> <span style="color:#8690A6">la</span> <span style="color:#EB641C">Formation</span>, les <span style="color:#EB641C">Applications</span> <span style="color:#8690A6">et la </span> <span style="color:#EB641C">Recherche</span> <span style="color:#8690A6">dans les</span> <span style="color:#EB641C">Sciences</span>.</p>
            <div class="row">
                <div class="col-lg-4" style="top:50px">
                   <div class="card text-center">
                       <div class="card-body">
                            <div class="circle">
                                <span><img src="{{asset('images/online_learning.png')}}"/></span>
                            </div>
                       </div>
                   </div>
                   <h4 class="text-center" style="font-size:30px; padding:30px">Developpement</h4> 
                </div>

                <div class="col-lg-4" style="top:50px">
                   <div class="card text-center">
                       <div class="card-body">
                            <div class="circle">
                                <span><img src="{{asset('images/online_learning.png')}}"/></span>
                            </div>
                       </div>
                   </div>
                   <h4 class="text-center" style="font-size:30px; padding:30px">Developpement</h4> 
                </div>

                <div class="col-lg-4" style="top:50px">
                   <div class="card text-center">
                       <div class="card-body">
                            <div class="circle">
                                <span><img src="{{asset('images/online_learning.png')}}"/></span>
                            </div>
                       </div>
                   </div>
                   <h4 class="text-center" style="font-size:30px; padding:30px">Developpement</h4> 
                </div>

                <div class="col-lg-4" style="top:50px">
                   <div class="card text-center">
                       <div class="card-body">
                            <div class="circle">
                                <span><img src="{{asset('images/Group_6.png')}}"/></span>
                            </div>
                       </div>
                   </div>
                   <h4 class="text-center" style="font-size:30px; padding:30px">Developpement</h4> 
                </div>

                <div class="col-lg-4" style="top:50px">
                   <div class="card text-center">
                       <div class="card-body">
                            <div class="circle">
                                <span><img src="{{asset('images/Group_6.png')}}"/></span>
                            </div>
                       </div>
                   </div>
                   <h4 class="text-center" style="font-size:30px; padding:30px">Developpement</h4> 
                </div>

                <div class="col-lg-4" style="top:50px">
                   <div class="card text-center">
                       <div class="card-body">
                            <div class="circle">
                                <span><img src="{{asset('images/Group_6.png')}}" /></span>
                            </div>
                       </div>
                   </div>
                   <h4 class="text-center" style="font-size:30px; padding:30px">Developpement</h4> 
                </div>       
            </div>
               
            </div>
        </div>

    </section>
    <br/><br/><br/><br/><br/><br/>
        <!-- Equipe -->
        <section class="equipes">
            <div class="container">
                <h1 class="text-center" style="font-size:45px; text-transform: uppercase;margin-top:-60px">Nos Equipes</h1><br/><br/><br/><br/><br/>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card text-center" style="background-color: #D3D3D3;border-radius: 90px 0px;font-style: normal;font-weight: normal; height:550px">
                                <div class="card-body">
                                    <img src="{{asset('images/Ellipse _1.png')}}" style="margin-top: -70px;"/><br/><br/><br/>
                                    <h4 class="font-weight-bold">Ibrahima KA</h4><br/>
                                    <p style="color: #464646; font-size:20px">
                                        "To be more specific, components of details of the development
                                        process  indicates the importance of The Environment of Low Potential" 
                                        (Thad Cohen in The Book of the Application
                                    </p>    
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card text-center" style="background-color: #D3D3D3;border-radius: 90px 0px;font-style: normal;font-weight: normal; height:550px">
                                <div class="card-body">
                                    <img src="{{asset('images/Ellipse _1.png')}}" style="margin-top: -70px;"/><br/><br/><br/>
                                    <h4 class="font-weight-bold">Ibrahima KA</h4><br/>
                                    <p style="color: #464646; font-size:20px">
                                        "To be more specific, components of details of the development
                                        process  indicates the importance of The Environment of Low Potential" 
                                        (Thad Cohen in The Book of the Application
                                    </p>    
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card text-center" style="background-color: #D3D3D3;border-radius: 90px 0px;font-style: normal;font-weight: normal; height:550px">
                                <div class="card-body">
                                    <img src="{{asset('images/Ellipse _1.png')}}" style="margin-top: -70px;"/><br/><br/><br/>
                                    <h4 class="font-weight-bold">Ibrahima KA</h4><br/>
                                    <p style="color: #464646; font-size:20px">
                                        "To be more specific, components of details of the development
                                        process  indicates the importance of The Environment of Low Potential" 
                                        (Thad Cohen in The Book of the Application
                                    </p>    
                                </div>
                                
                            </div>
                        </div>
                    </div>
 
            </div>
                    <!-- <div class="col-lg-4">
                        <div class="card text-center" style="background-color: #D3D3D3;border-radius: 90px 0px;font-style: normal;font-weight: normal;font-size: 20px; height:550px">
                            <div class="card-body">
                                <div class="im">
                                    <img src="{{asset('images/Ellipse _1.png')}}"/>
                                </div>
                                <h4 class="font-weight-bold">Ibrahima KA</h4>
                                <p style="color: #464646;">
                                    "To be more specific, components of details of the development
                                    process  indicates the importance of The Environment of Low Potential" 
                                    (Thad Cohen in The Book of the Application
                                </p>
                            </div>            
                        </div>
                    </div> -->

                    <div class="wrap text-center py-4">
                        <button class="button" ><a href="{{route('equipe')}}" style="text-decoration:none; color:#EB641C; font-size:20px" >En savoir plus</a></button>
                    </div>
                </div>
            </div>
        </section>
        <br/><br/>
        <!-- Partenaires -->
        <section class="partenaires">
        <div class="container gap100">
            <h1 class="text-center" style="color: #464646;font-size:45px; text-transform: uppercase;">Nos partenaires</h1>
            <div class="row text-center" >
                <div class="col-lg-4" >
                    <img src="{{asset('images/img_1 1.png')}}" height="300"/>
                </div>

                <div class="col-lg-4" >
                    <img src="{{asset('images/img_1 1.png')}}" height="300"/>
                </div>

                <div class="col-lg-4" >
                    <img src="{{asset('images/img_1 1.png')}}" height="300"/>
                </div>
                    <div style="top:50px"></div>
                <div class="col-lg-4" >
                    <img src="{{asset('images/img_1 1.png')}}" height="300"/>
                </div>
                <div class="col-lg-4" >
                    <img src="{{asset('images/img_1 1.png')}}" height="300"/>
                </div>
                 <div class="col-lg-4" >
                    <img src="{{asset('images/img_1 1.png')}}" height="300"/>
                </div>
            </div>
        </div>
        </section>
</main>
@endsection