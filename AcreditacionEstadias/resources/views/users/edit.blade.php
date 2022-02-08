
@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Editar Usuario'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

            <form action="{{ route('users.update',$user->id) }}" method="post" class="form-horizontal">
            @csrf
            @method('PUT')
                <div class="card">
                    <div class="card-header card-header-danger">
                        <h4 class="card-tittle">Usuario</h4>
                        <p class="card-category">Editar Datos</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus>
                            </div>
                        </div>
                       <!-- Usuario -->
                        <div class="row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="username" value="{{ $user->username }}" >
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}" >
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="password" placeholder="Ingresa tu password en caso de modificarla" >
                            </div>
                        </div>
                    </div>

                    <!-- Final -->
                    <div class="card-footer ml-auto mr-auto">
                        <a href="{{ route('users.index') }}" button class="btn btn-danger">Regresar</a></button>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
