
@extends('layouts.main', ['activePage' => 'permissions', 'titlePage' => 'Nuevo Permiso'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

            <form action="{{ route('permissions.store') }}" method="post" class="form-horizontal">
            @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-tittle">Permiso</h4>
                        <p class="card-category">Ingresar Datos</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label for="name" class="col-sm-2 col-form-label">Nombre del Permiso</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="name" autofocus>

                            </div>
                        </div>



                    </div>

                    <!-- Final -->
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-facebook">Guardar</button>
                        <a href="{{ route('permissions.index') }}" button class="btn btn-danger">Regresar</a></button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
