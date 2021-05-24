@extends('layouts.default')
@section('content')
<main>
    <div class="container py-4">
        @if (Session::has('success'))
            <p class="text-danger">{{session('success')}}</p>
            
        @endif
            <form action="{{route('equipe.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group mb-3">
                    <label class="form-label">
                    <span>Image <span class="text-danger">*</span></span>
                    <input type="file" name="image" class="hidden @error('image') is-invalid @enderror">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </label>
                    
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</main>
@endsection