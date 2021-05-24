@extends('layouts.default')
@section('content')
<main>
    <div class="container py-4">
        @if (Session::has('success'))
            <p class="text-danger">{{session('success')}}</p>
            
        @endif
            <form action="{{url('admin/image/'.$images->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                            <label class="form-label">
                                <span>Image <span class="text-danger">*</span></span>
                                <input type="file" name="image" id="image" class="hidden @error('image') is-invalid @enderror">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <img src="{{ asset('photo').'/'.$images->image}}"  width="100"/>
                            </label>
                                
                        </div>
                    <div class="form-group">
                        <label class="form-label">Choix du departement</label>
                            <select class="form-control" name="departement_id">
                               <option value="0">Faites votre choix</option>
                                    @foreach ($departements as $departement )
                                        @if ($departement->id == $images->departement_id)
                                            <option selected value="{{$departement->id}}">{{$departement->title}}</option>
                                        @else
                                            <option value="{{$departement->id}}">{{$departement->title}}</option>
                                        @endif
                                        
                                    @endforeach
                            </select>
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</main>
@endsection