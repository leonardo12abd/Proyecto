@extends('layouts.main', ['activePage' => 'Reportectsp', 'titlePage' => 'CALIDAD TECNICA Y SEGURIDAD DEL PACIENTE'])
@section('content')


<div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-info">
                                <h4 class="card-tittle">CALIDAD TECNICA Y SEGURIDAD DEL PACIENTE</h4>
                                <p class="card-category">CALIDAD TECNICA Y SEGURIDAD DEL PACIENTE</p>
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
                                        <a href={{ route('altaprimernivelsec3') }}  class="btn btn-facebook btn-round">
                                            <i class="material-icons">monitor_weight</i>  alta Calidad tecnica y seguridad del paciente
                                        </a>
                                    </div>

                                    <div class="col-12 text-left">
                                        <a href="#" class="btn btn-danger btn-round">
                                            <i class="material-icons">picture_as_pdf</i> PDF
                                            </a>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th><center>Clave Reporte</center></th>
                                            <th><center>Codigo Clues</center></th>
                                            <th><center>Unidad</center></th>
                                            <th><center>Usuario Encargado</center></th>
                                            <th><center>Creación</center></th>
                                            <th class="text-right"><center>Acciones</center></th>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $key => $d )
                                                <tr>
                                                    <td>{{$d->id}}</td>
                                                    <td>{{$d->clues->clues }}</td>
                                                    <td>{{$d->clues->nombreunidad  }}</td>
                                                    <td>{{$d->user->name }}</td>

                                                    <td>{{$d->created_at}}</td>

                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('altaprimernivelsec3Show',$d->id) }}" class="btn btn-info"> <i class="material-icons">sticky_note_2</i></a>
                                                        <a href="{{ route('editctsp',$d->id) }}"class="btn btn-warning"><i class="material-icons">edit</i></a>

                                                        <form action="{{ route('borrarctsp',$d->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Segro que deseas eliminar este Repote CTSP?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </form>
                                                        <a href="{{ route('exportctsp', $d->id) }}" class="btn btn-success btn-round">
                                                            <i class="fas fa-file-excel"></i>  Excel
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
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
