@extends('layouts.main', ['activePage' => 'roles', 'titlePage' => 'Editar de rol'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

            <form action="{{ route('roles.update',$role->id) }}" method="post" class="form-horizontal">
            @csrf
            @method('PUT')
                <div class="card">
                    <div class="card-header card-header-danger">
                        <h4 class="card-tittle">Roles</h4>
                        <p class="card-category">Editar Rol</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label for="name" class="col-sm-2 col-form-label">Nombre del Rol</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="name" value="{{ $role->name }}" autofocus>
                            </div>
                        </div>


                        <div class="row">
                            <label for="name" class="col-sm-2 col-form-label">Permisos</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <div class="tab-content">
                                        <div class="tab-pane active">
                                            <table class="table">
                                                <tbody>
                                                    @foreach ($permissions as $id => $permission )

                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" name="permissions[]"
                                                                     value="{{ $id }}"{{ $role->permissions->contains($id)? 'checked': '' }}>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{ $permission }}
                                                        </td>
                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Final -->
                    <div class="card-footer ml-auto mr-auto">
                        <a href="{{ route('roles.index') }}" button class="btn btn-danger">Regresar</a></button>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
