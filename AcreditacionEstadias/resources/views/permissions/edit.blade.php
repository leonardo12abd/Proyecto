@extends('layouts.main', ['activePage' => 'permissions', 'titlePage' => 'Editar de permiso'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

            <form action="{{ route('permissions.update',$permission->id) }}" method="post" class="form-horizontal">
            @csrf
            @method('PUT')
                <div class="card">
                    <div class="card-header card-header-danger">
                        <h4 class="card-tittle">Permiso</h4>
                        <p class="card-category">Editar Permiso</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="name" value="{{ $permission->name }}" autofocus>
                            </div>
                        </div>

                    <!-- Final -->
                    <div class="card-footer ml-auto mr-auto">
                        <a href="{{ route('permissions.index') }}" button class="btn btn-danger">Regresar</a></button>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
