@extends('layouts.default')

@section('content')

<section class="mt-4 offset-4">
    <a  class="btn btn-primary btn-sm" href=""  data-bs-toggle="modal" data-bs-target="#exampleModal">
       Ajout Images
    </a>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{route('image.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label class="form-label">
                                <span>Image <span class="text-danger">*</span></span>
                                <input type="file" name="image" id="image" class="hidden @error('image') is-invalid @enderror">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </label>
                                
                        </div>
                    <div class="form-group">
                        <label class="form-label">Choix du departement</label>
                            <select class="form-control" name="departement_id">
                               <option value="0">Faites votre choix</option>
                                    @foreach ($departements as $departement )
                                        <option value="{{$departement->id}}">{{$departement->title}}</option>
                                    @endforeach
                            </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</section>

<section class="equipeApropos">
    <div class="container-fluid">
        <h2 class="font-weight-bold" style="color:#EB661F;font-size:60px;width:148px; height:47px; margin-left:50px; margin: top 30px;">Galerie</h2>
        <div class="row text-center" style="margin-top:50px">
            @foreach ($images as $image )
                <div class="col-lg-4">
                    <div class="card-body">
                        <div class="imghov">
                            <img src="{{asset('photo/'.$image->image)}}" class="img-fluid mb-4" />
                        </div>
                            <a href="{{ url('/admin/image/'.$image->id.'/edit') }}" class="btn btn-outline-dark">Modifier</a>
                            <a onclick=" return confirm('Voulez-vous supprimer?') " href="{{ url('admin/image/'.$image->id.'/delete') }}" class="btn btn-danger btn-sm">Supprimer</a>
                    </div>
                </div>
            @endforeach  
        </div>
    </div>

</section>
@endsection