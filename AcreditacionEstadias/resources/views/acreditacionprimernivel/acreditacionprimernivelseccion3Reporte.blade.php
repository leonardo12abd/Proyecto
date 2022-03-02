@extends('layouts.main', ['activePage' => '', 'titlePage' => 'CALIDAD TECNICA Y SEGURIDAD DEL PACIENTE'])
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
                                        <a href="#" class="btn btn-sm btn-facebook">Nuevo Reporte Calidad Tecnica y Seguridad al Paciente</a>
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
                                            <th>ID</th>
                                            <th>Codigo Clues</th>
                                            <th>Unidad</th>
                                            <th>Usuario</th>
                                            <th>Crated_at</th>
                                            <th class="text-right">Acciones</th>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="td-actions text-right">
                                                    <a href="#"class="btn btn-info"> <i class="material-icons">person</i></a>
                                                    <a href="#"class="btn btn-warning"><i class="material-icons">edit</i></a>

                                                    <form action="#" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Segro que deseas eliminar al usuario ?')">

                                                    <button class="btn btn-danger" type="submit">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </form>


                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer mr-auto">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
