@extends('layouts.app')

@section('content')
    <main>
        <section class="blog">
            <div class="wrapperApropos">
                <div class="contentApropos">
                    <h1 style="font-size:75px">Blog</h1>
                </div>
            </div>
        </section>

        <section class="sectionBlog">
            <div class="container gap100">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="box-shadow: 4px 20px 40px rgba(100, 100, 100, 0.498039);border-radius: 0px 0px 45px 45px;">
                            <img src="{{asset('images/Rectangle_5_Copy.png')}}" class="card-img-top" alt="..."><br/>
                            <div class="card-body">
                                <h5 class="card-title"><a  style="color:#EB641C" href="{{route('showBlog')}}">Les bases de la conception graphique.</a></h5>
                                <p class="card-text" style="color:#686868">"As concerns a significant portion of the flexible production planning, it can be quite risky.</p><br/><br/>
                                <img src="{{asset('images/Ellipse.png')}}">
                                <p style="color:#686868">
                                    <h2>Ibrahima KA</h2>
                                    Coach en Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card" style="box-shadow: 4px 20px 40px rgba(100, 100, 100, 0.498039);border-radius: 0px 0px 45px 45px; margin-top:70px">
                            <img src="{{asset('images/Rectangle_5_Copy.png')}}" class="card-img-top" alt="..."><br/>
                            <div class="card-body">
                                <h5 class="card-title" style="color:#EB641C">Les bases de la conception graphique.</h5>
                                <p class="card-text" style="color:#686868">"As concerns a significant portion of the flexible production planning, it can be quite risky.</p><br/><br/>
                                <img src="{{asset('images/Ellipse.png')}}">
                                <p style="color:#686868">
                                    <h2>Ibrahima KA</h2>
                                    Coach en Design
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="box-shadow: 4px 20px 40px rgba(100, 100, 100, 0.498039);border-radius: 0px 0px 45px 45px; margin-top:50px">
                            <img src="{{asset('images/Rectangle_5_Copy.png')}}" class="card-img-top" alt="..."><br/>
                            <div class="card-body">
                                <h5 class="card-title" style="color:#EB641C">Les bases de la conception graphique.</h5>
                                <p class="card-text" style="color:#686868">"As concerns a significant portion of the flexible production planning, it can be quite risky.</p><br/><br/>
                                <img src="{{asset('images/Ellipse.png')}}">
                                <p style="color:#686868">
                                    <h2>Ibrahima KA</h2>
                                    Coach en Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card" style="box-shadow: 4px 20px 40px rgba(100, 100, 100, 0.498039);border-radius: 0px 0px 45px 45px; margin-top:150px">
                            <img src="{{asset('images/Rectangle_5_Copy.png')}}" class="card-img-top" alt="..."><br/>
                            <div class="card-body">
                                <h5 class="card-title" style="color:#EB641C">Les bases de la conception graphique.</h5>
                                <p class="card-text" style="color:#686868">"As concerns a significant portion of the flexible production planning, it can be quite risky.</p><br/><br/>
                                <img src="{{asset('images/Ellipse.png')}}">
                                <p style="color:#686868">
                                    <h2>Ibrahima KA</h2>
                                    Coach en Design
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="blogArticle gap100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        cc
                    </div>
                    <div class="col-md-6">
                        cc
                    </div>
                </div>
            </div>
        </section> -->
    </main>
@endsection
