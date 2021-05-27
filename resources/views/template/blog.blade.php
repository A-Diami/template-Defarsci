@extends('layouts.app')

@section('content')
    <main>
        <section class="blog">
            <div class="wrapperApropos">
                <div class="contentApropos">
                    <h1 style="font-style: normal;font-weight: bold;font-size: 100px;line-height: 117px;">Blog</h1>
                </div>
            </div>
        </section>

        <section class="sectionBlog">
            <div class="container gap100">
                <div class="row wrow" style="">
                @foreach ($posts as $post )
                    <div class="col-md-6 childcol" style="">
                    <div class="card cd" style="border-radius: 0px 0px 45px 45px;">
                            <img src="{{asset('photo/'.$post->image)}}" class="card-img-top" alt="..."><br/>
                            <div class="card-body">
                                <h5 class="card-title"><a  style="color:#EB641C" href="{{route('showBlog', $post->slug)}}">{{$post->title}}</a></h5>
                                <p class="card-text" style="color:#686868">{{Str::limit($post->description, 90)}}</p><br/><br/>
                                <img style="margin-top: -35px;" src="{{asset('photo/'.$post->user->image)}}">
                                <p style="color:#686868; margin-top:-30px">
                                    <h2>{{$post->user->name}}</h2>
                                    {{$post->user->profession}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
        </section>
    </main>
@endsection
