@extends('layouts.app')

@section('content')
    <main>
        <section class="contacts">
            <div class="wrapperApropos">
                <div class="contentApropos">
                    <h1 style="font-style: normal;font-weight: bold;font-size: 69px;line-height: 117px;">Contact</h1>
                </div>
            </div>
        </section>
    <br/> <br/>
    <section  style="background: #F2F2F2;margin-top:-50px; margin-bottom:-20px">
        <div class="contactSection">
            <div class="container">
                <div class="row">
                <div class="col-lg-1"></div>
                    <div class="col-lg-5 mt-5">
                        <div class="card-body">
                            <div>
                                <h3><span style="font-size: 30px; color:#EB641C; padding:20px"><img src="{{asset('photo/Group 21.png')}}"/></span>  +33 827 59 83</h3>
                            </div>
                            <div>
                                <p><span style="font-size: 30px; color:#EB641C; padding:20px"><img src="{{asset('photo/Group 38.png')}}"/></span>  rose.dieng.lab@gmail.com</p>
                            </div>
                            <div>
                                <p><span style="font-size: 30px; color:#EB641C; padding:20px"><img src="{{asset('photo/Group 22.png')}}"/></span>  localisation</p>
                            </div>

                            <div style="margin-left: 23px;">
                                    <span>
                                    <button style=" color:#464646; border:none; background-color:transparent"><img src="{{asset('photo/facebook.png')}}"/></button>
                                       <button style=" color:#464646; border:none; background-color:transparent"><img src="{{asset('photo/instagram (1).png')}}"/></button>
                                       <button style=" color:#464646; border:none; background-color:transparent"><img src="{{asset('photo/linkedin.png')}}"/></button>
                                        <span style="font-style: normal;font-weight: 500;font-size: 20px;line-height: 23px;text-align: right;color: #464646;">@defarsci</span>
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 mt-5">
                        <div class="card-body">
                            <div>
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
                            @endif
                                <form method="post" action="{{route('sendEmail')}}" enctype="multipart/form-data">
                                @csrf
                                        <div class="form-row">
                                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" placeholder="Nom" name="name" class="form-control" style="background-color: #E2E2E2; padding:30px;background: #E2E2E2;border-radius: 20px;" />
                                            </div>

                                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" placeholder="Email" name="email" class="form-control" style="background-color: #E2E2E2; padding:30px;background: #E2E2E2;border-radius: 20px;" />
                                            </div>

                                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" placeholder="Numero" name="number" class="form-control" style="background-color: #E2E2E2; padding:30px;background: #E2E2E2;border-radius: 20px;" />
                                            </div>

                                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" placeholder="Sujet" name="sujet" class="form-control" style="background-color: #E2E2E2; padding:30px;background: #E2E2E2;border-radius: 20px;" />
                                            </div>

                                            <textarea class="form-control mb-3" placeholder="Message" name="message" cols="10" rows="5" id="" style="background-color: #E2E2E2; padding:30px;background: #E2E2E2;border-radius: 20px;"></textarea>
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <button class="btn btn form-control" style="background-color: #EB641C; color:white;height:50px; background: rgba(235, 100, 28, 0.698039);box-shadow: 2px 10px 12px rgba(100, 100, 100, 0.498039);border-radius: 20px;"><span style="font-style: normal;font-weight: normal;font-size: 20px;line-height: 5px; margin-bottom:-20px" class="p-4">Soumettre</span></button>
                                                </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
    </section> 
    </main>
@endsection