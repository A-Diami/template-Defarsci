@extends('layouts.default')
@section('content')
<main>
    <div class="container py-4">
        @if (Session::has('success'))
            <p class="text-danger">{{session('success')}}</p>
            
        @endif
            <form action="{{url('admin/projet/'.$projet->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Titre <span class="text-danger">*</span></label>
                    <input type="text" name="title" placeholder="Titre..." value="{{$projet->title}}" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="description " class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea name="description" placeholder="Description..." class="form-control @error('title') is-invalid @enderror" rows="10">{{$projet->description}}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</main>
@endsection