@extends('layouts.default')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">View Equipe</li>
                </ol>

                <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                    Equipe
                                <a href="{{url('admin/equipe/create')}}" class="float-right btn btn-dark btn-sm">Ajouter</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                              
                                                <th>Image</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                
                                                <th>Image</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($equipes as $equipe )
                                                <tr>
                                                    
                                                    <td>
                                                 
                                                        <img src="{{ asset('photo').'/'.$equipe->image}}"  width="100"/>
                              
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('/admin/equipe/'.$equipe->id.'/edit') }}" class="btn btn-success btn-sm">Modifier</a>
                                                        <a onclick=" return confirm('Voulez-vous supprimer?') " href="{{ url('/admin/equipe/'.$equipe->id.'/delete') }}" class="btn btn-danger btn-sm">Supprimer</a>
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