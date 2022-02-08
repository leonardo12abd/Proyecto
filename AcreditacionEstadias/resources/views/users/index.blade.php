@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Usuarios'])
@section('content')


<div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-danger">
                                <h4 class="card-tittle">Usuarios</h4>
                                <p class="card-category">Usuarios Registrados</p>
                            </div>
                            <div class="card-body">

                                <!-- Alerta de Guardado Existoso-->
                                @include('sweetalert::alert')
                                {{--@if(session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif--}}
                                <!-- FIN Alerta de Guardado Existoso-->

                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('users.create') }}" class="btn btn-sm btn-facebook">Añadir Usuario</a>
                                    </div>

                                    <div class="col-12 text-left">
                                        <a href="{{ route('users.downloadpdf') }}" class="btn btn-danger btn-round">
                                            <i class="material-icons">picture_as_pdf</i> PDF
                                            </a>
                                        <a href="{{ route('export') }}" class="btn btn-success btn-round">
                                            <i class="fas fa-file-excel"></i>  Excel
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Username</th>
                                            <th>Crated_at</th>
                                            <th class="text-right">Acciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                <td>{{  $user->id           }}</td>
                                                <td>{{  $user->name         }}</td>
                                                <td>{{  $user->email        }}</td>
                                                <td>{{  $user->username     }}</td>
                                                <td>{{  $user->created_at   }}</td>
                                                <td class="td-actions text-right">
                                                    <a href="{{ route('users.show',$user->id) }}"class="btn btn-info"> <i class="material-icons">person</i></a>
                                                    <a href="{{ route('users.edit',$user->id) }}"class="btn btn-warning"><i class="material-icons">edit</i></a>

                                                    <form action="{{ route('users.delete',$user->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Segro que deseas eliminar al usuario {{ $user->name }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </form>


                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer mr-auto">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
