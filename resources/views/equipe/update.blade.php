@extends('layouts.default')
@section('content')
<main>
    <div class="container py-4">
        @if (Session::has('success'))
            <p class="text-danger">{{session('success')}}</p>
            
        @endif
            <form action="{{url('admin/equipe/'.$equipe->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label class="form-label">
                    <span>Image <span class="text-danger">*</span></span>
                    <input type="file" name="image" class="hidden" value="{{$equipe->image}}">
                   
                    </label>
                    <img src="{{asset('photo/'.$equipe->image)}}" width="100" />
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</main>
@endsection