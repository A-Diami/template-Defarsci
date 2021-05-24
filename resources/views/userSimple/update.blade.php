@extends('layouts.layoutsusernormal')
   
@section('content')
<div class="container">

    <div class="row justify-content-center py-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modification Articles</div>
                <div class="card-body">
                <form method="POST" action="{{ route('userSimple.update', $post->id) }}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titre') }} <span class="text-danger">*</span></label>

                            <div class="col-md-6 mb-3">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }} <span class="text-danger">*</span></label>

                            <div class="col-md-6 mb-3">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="10">{{ $post->description }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <label class="form-label">
                                <span>Image <span class="text-danger">*</span></span>
                                <input type="file" name="image" class="hidden @error('image') is-invalid @enderror" value="{{ $post->image }}">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </label>
                            </div>
                            <img src="{{asset('photo/'.$post->image)}}" width="100" />
                        </div>

                        <div class="form-group row mb-0 ">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modifier') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection