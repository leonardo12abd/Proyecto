
@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo Usuario'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

            <form action="{{ route('users.store') }}" method="post" class="form-horizontal">
            @csrf
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-tittle">Usuario</h4>
                        <p class="card-category">Ingresar Datos</p>
                    </div>
                    <div class="card-body">

                        {{--@if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error )
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    --}}
                        <div class="row">
                            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre" value="{{ old('name') }}" autofocus>
                                @if ($errors->has('name'))
                                    <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                       <!-- Usuario -->
                        <div class="row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="username" placeholder="Ingresa tu username"value="{{ old('username') }}" >
                                @if ($errors->has('username'))
                                <span class="error text-danger" for="input-name">{{ $errors->first('username') }}</span>
                            @endif
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" name="email" placeholder="Ingresa tu email"value="{{ old('email') }}" >
                                @if ($errors->has('email'))
                                <span class="error text-danger" for="input-name">{{ $errors->first('email') }}</span>
                            @endif
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu password" >
                                <button class="btn btn-dark" type="button" onclick="vercontrasena()"><i class="far fa-eye-slash"></i></button>

                                @if ($errors->has('password'))
                                <span class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                            @endif
                            </div>
                        </div>



                    </div>

                    <!-- Final -->
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-facebook">Guardar</button>
                        <a href="{{ route('users.index') }}" button class="btn btn-danger">Regresar</a></button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
