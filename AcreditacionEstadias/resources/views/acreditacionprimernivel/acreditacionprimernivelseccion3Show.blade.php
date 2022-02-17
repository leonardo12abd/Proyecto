@extends('layouts.app')

@section('content')

<div class="content">
    <form action="#" method="POST">
        {{ csrf_field() }}

        <div class="container-fluid">
        <div class="row">


                <div class="card">
                        <div class="card text-white bg-info" style="max-heigth: 18rem;">
                            <center>
                              <h4 class="card-tittle">CALIDAD TECNICA Y SEGURIDAD DEL PACIENTE</h4>
                            </center>
                        </div>


                        {{-- Inicia la primer Seccion --}}
                    <div class="card-body">
                        <table class="table">
                            @foreach($ctsps as $key => $ct)
                            @if($key == 0 || $ctsps[$key-1]->clasificacion_ctsp != $ct->clasificacion_ctsp)
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col" scope="col" style="background-color: rgb(133, 193, 233);">{{$ct->clasificacion_ctsp}}</th>
                                <th scope="col" style="background-color: rgb(133, 193, 233);">SI</th>
                                <th scope="col" style="background-color: rgb(133, 193, 233);">NO</th>
                                <th scope="col" style="background-color: rgb(133, 193, 233);">OBSERVACIONES</th>
                              </tr>
                            </thead>
                            @endif
                            <tbody>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$ct->nombre_ctsp}}</th>
                                        <td>
                                            <input type="radio" name="key_{{$key}}" value="Si" required @if($ctsps_data['key_'.$key] == 'Si') checked @endif>
                                        </td>
                                        <td>
                                            <input type="radio" name="key_{{$key}}" value="No" required @if($ctsps_data['key_'.$key] == 'No') checked @endif>
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="textarea_{{$key}}" rows="1" cols="10"> {{$ctsps_data['textarea_'.$key]}} </textarea>
                                        </td>
                                    </tr>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
        </div>

        <center><button type="submit" class="btn btn-primary btn-round">
            <i class="far fa-save"></i> Guardar
          </button></center>
        </div>
    </form>

</div>
@endsection
