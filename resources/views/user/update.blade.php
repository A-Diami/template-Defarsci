@extends('layouts.default')
@section('content')
<main>
    <div class="container py-4">
        @if (Session::has('success'))
            <p class="text-danger">{{session('success')}}</p>
            
        @endif
            <form action="{{url('admin/user/'.$user->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <input type="text" name="name" placeholder="Nom..." class="form-control" value="{{$user->name}}">
                  
                </div>
                @csrf
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" placeholder="Email..." class="form-control" value="{{$user->email}}">
                   
                </div>
                @csrf
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="text" name="password" placeholder="Mot de passe..." class="form-control" value="{{$user->password}}">
                   
                </div>
                <div class="form-group mb-3">
                    <label for="profession" class="form-label">Profession</label>
                    <input type="text" name="profession" placeholder="Profession..." class="form-control" value="{{$user->profession}}">
                   
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">
                    <span>Image</span>
                    <input type="file" name="image" class="hidden" value="{{$user->image}}">
                    <img src="{{asset('photo/'. $user->image)}}"/>
                    </label>
                   
                    
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</main>
@endsection