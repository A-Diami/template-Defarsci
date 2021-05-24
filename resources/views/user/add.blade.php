@extends('layouts.default')
@section('content')
<main>
    <div class="container py-4">
        @if (Session::has('success'))
            <p class="text-danger">{{session('success')}}</p>
            
        @endif
            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                @csrf
               
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Nom <span class="text-danger">*</span></label>
                    <input type="text" name="name" placeholder="Titre..." class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @csrf
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="text" name="email" placeholder="Titre..." class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @csrf
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Mot de passe <span class="text-danger">*</span></label>
                    <input type="text" name="password" placeholder="Titre..." class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Profession<span class="text-danger">*</span></label>
                    <input type="text" name="profession" placeholder="Titre..." class="form-control @error('profession') is-invalid @enderror">
                    @error('profession')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
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