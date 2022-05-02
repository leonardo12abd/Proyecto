@extends('layouts.main', ['activePage' => 'permissions', 'titlePage' => 'Detalle de permiso'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <div class="card-tittle">Permiso</div>
                            <p class="card-category">Vista detallada del permiso {{ $permission->name }}</p>
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
                                                        <h5 class="tittle mt-3">{{ $permission->name }}</h5>
                                                    </a>
                                                    <p class="description">
                                                        {{ $permission->guard_name }} <br>
                                                        {{ $permission->created_at }}

                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-description">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius at nulla magni dolor expedita deserunt officiis obcaecati repellendus vero perferendis, accusantium, blanditiis ullam aliquam ut accusamus nostrum eligendi vel iure.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('permissions.edit',$permission->id) }}" button class="btn btn-sm btn-warning ml-2">Editar</a></button>
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
