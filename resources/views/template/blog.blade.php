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
                <div class="row wrow">
                @foreach ($posts as $post )
                    <div class="col-md-6 childcol">
                    <div class="card cd">
                            <img src="{{asset('photo/'.$post->image)}}" class="card-img-top" alt="..."><br/>
                            <div class="card-body">
                                <h5 class="card-title"><a  style="color:#EB641C" href="{{route('showBlog', $post->slug)}}">{{$post->title}}</a></h5>
                                <p class="card-text" style="color:#686868">{{Str::limit($post->description, 90)}}</p><br/><br/>
                                <img src="{{asset('photo/'.$post->user->image)}}">
                                <p style="color:#686868">
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
