@extends('layouts.main', ['activePage' => 'reportecocasep', 'titlePage' => 'LINEA COCASEP / MEJORA CONTINUA'])
@section('content')


<div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-tittle">LINEA COCASEP / MEJORA CONTINUA</h4>
                                <p class="card-category">Linea COCASEP</p>
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
                                        <a href={{ route('altaprimernivelsec4') }} class="btn btn-sm btn-facebook">Alta Linea Coasep / Mejora Continua</a>
                                    </div>

                                    <div class="col-12 text-left">
                                        <a href="#" class="btn btn-danger btn-round">
                                            <i class="material-icons">picture_as_pdf</i> PDF
                                            </a>
                                        <a href="#" class="btn btn-success btn-round">
                                            <i class="fas fa-file-excel"></i>  Excel
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th><center>ID Reporte</center></th>
                                            <th><center>Codigo Clues</center></th>
                                            <th><center>Unidad</center></th>
                                            <th><center>Usuario Encargado</center></th>
                                            <th><center>Creacion</center></th>
                                            <th class="text-right"><center>Acciones</center></th>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $key => $d )
                                                <tr>
                                                    <td>{{$d->id}}</td>
                                                    <td>{{$d->clues->clues}}</td>
                                                    <td>{{$d->clues->nombreunidad}}</td>
                                                    <td>{{$d->user->name}}</td>
                                                    <td>{{$d->created_at}}</td>

                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('altaprimernivelsec4Show',$d->id) }}" class="btn btn-info"> <i class="material-icons">person</i></a>
                                                        <a href="#"class="btn btn-warning"><i class="material-icons">edit</i></a>

                                                        <form action="#" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Segro que deseas eliminar al usuario ?')">

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
                            <div class="card-footer mr-auto">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
