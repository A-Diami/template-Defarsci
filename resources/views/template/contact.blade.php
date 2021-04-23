@extends('layouts.app')

@section('content')
    <main>
        <section class="contacts">
            <div class="wrapperApropos">
                <div class="contentApropos">
                    <h1 style="font-size:60px">Contact</h1>
                </div>
            </div>
        </section>
    <br/> <br/>
        <div class="contactSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-body">
                            <div>
                                <h3><span style="font-size: 30px; color:#EB641C; padding:20px"><i class="fa fa-phone-square" aria-hidden="true"></i></span>  +33 827 59 83</h3>
                            </div>
                            <div>
                                <p><span style="font-size: 30px; color:#EB641C; padding:20px"><i class="fa fa-envelope" aria-hidden="true"></i></span>  rose.dieng.lab@gmail.com</p>
                            </div>
                            <div>
                                <p><span style="font-size: 30px; color:#EB641C; padding:20px"><i class="fa fa-map-marker" aria-hidden="true"></i></span>  localisation</p>
                            </div>

                            <div>
                                    <span>
                                       <button style=" color:#464646; border:none; background-color:transparent"> <i class="fa fa-facebook-official fa-2x" style="padding:10px" aria-hidden="true"></i></button>
                                       <button style=" color:#464646; border:none; background-color:transparent"><i class="fa fa-instagram fa-2x" style="padding:10px" aria-hidden="true"></i></button>
                                       <button style=" color:#464646; border:none; background-color:transparent"><i class="fa fa-linkedin-square fa-2x" style="padding:10px" aria-hidden="true"></i></button>
                                        <span>@defarsci</span>
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card-body">
                            <div>
                                <form>
                                        <div class="form-row">
                                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" placeholder="Your name" class="form-control" style="background-color: #E2E2E2; padding:30px" />
                                            </div>

                                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" placeholder="Email Adress" class="form-control" style="background-color: #E2E2E2; padding:30px" />
                                            </div>

                                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" placeholder="Phone Number" class="form-control" style="background-color: #E2E2E2; padding:30px" />
                                            </div>

                                            <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" placeholder="Subject" class="form-control" style="background-color: #E2E2E2; padding:30px" />
                                            </div>

                                            <textarea class="form-control mb-3" placeholder="Write Message" cols="10" rows="5" id="" style="background-color: #E2E2E2; padding:30px"></textarea>

                                            <button class="btn" style="background-color: #EB641C; color:white; padding:20px">Send Message</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <section class="contactSection">
            <div class="container-fluid">
                <div class="card" style="margin-top: 60px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">

                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                        <h3>+33 827 59 83</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">

                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                        <p>rose.dieng.lab@gmail.com</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">

                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                        <p>localisation</p>
                                    </div>
                                </div>

                            </div> 
                            
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <form style="margin-top: -50px;">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input type="text" placeholder="Your name" class="form-control" />
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input type="text" placeholder="Email Adress" class="form-control" />
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input type="text" placeholder="Phone Number" class="form-control" />
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input type="text" placeholder="Subject" class="form-control" />
                                        </div>

                                        <textarea class="form-control mb-3" placeholder="Write Message" cols="10" rows="5" id=""></textarea>

                                        <button class="btn btn-primary">Send Message</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </main>
@endsection