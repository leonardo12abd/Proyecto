@extends('layouts.main', ['activePage' => 'permissions', 'titlePage' => 'Detalle de permiso'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <div class="card-tittle">Roles</div>
                            <p class="card-category">Vista detallada del Rol {{ $role->name }}</p>
                        </div>
                        <center>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <div class="author">
                                                    <a href="">
                                                        <img src="{{ asset('img/imagen_default_avatar.png') }}" alt="image" class="avatar">
                                                        <h5 class="tittle mt-3">{{ $role->name }}</h5>
                                                    </a>
                                                    <p class="description">
                                                        {{ $role->guard_name }} <br>
                                                        {{ $role->created_at }}

                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-description">
                                                <center><h3>Permisos asignados:</h3></center><br>
                                                @forelse ($role->permissions as $permission )
                                                <span class="badge rounded-pill bg-dark text-white">{{ $permission->name }}</span>
                                                @empty
                                                <span class="badge badge-danger bg-danger">No permisos</span>
                                                @endforelse
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('roles.edit',$role->id) }}" button class="btn btn-sm btn-warning ml-2">Editar</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
