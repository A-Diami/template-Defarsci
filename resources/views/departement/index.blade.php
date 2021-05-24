@extends('layouts.default')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">View Departement</li>
                </ol>

                <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                    Posts
                                <a href="{{url('admin/departement/create')}}" class="float-right btn btn-dark btn-sm">Ajouter</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Description</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($departements as $departement )
                                                <tr>
                                                    <td>{{$departement->title}}</td>
                                                    <td>{{$departement->description}}</td>
                                                    
                                                    <td>
                                                    <a href="{{url('image/galerie')}}" class="btn btn-primary btn-sm">Gallerie</a>
                                                <a href="{{ url('/admin/departement/'.$departement->id.'/edit') }}" class="btn btn-success btn-sm">Modifier</a>
                                                        <a onclick=" return confirm('Voulez-vous supprimer?') " href="{{ url('/admin/departement/'.$departement->id.'/delete') }}" class="btn btn-danger btn-sm">Supprimer</a>
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                  
                                </div>
                            </div>
                        </div>
        </div>
    </main>
@endsection