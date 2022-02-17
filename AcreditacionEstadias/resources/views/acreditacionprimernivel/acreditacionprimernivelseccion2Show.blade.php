@extends('layouts.app')

@section('content')

<div class="content">
    <form action="/altaprimernivelsec2" method="POST">
        {{ csrf_field() }}
        <div class="container-fluid">
        <div class="row">
                <div class="card">
                        <div class="card text-white bg-warning" style="max-heigth: 18rem;">
                            <center>
                              <h4 class="card-tittle">Calidad Percibida</h4>
                            </center>
                        </div>


                        {{-- Seccion CALIDAD PERCIBIDA --}}
                    <div class="card-body">
                        <center><h4 style="background-color: rgb(247, 220, 111);">Aval Ciudadano</h4></center>
                        <table class="table">
                            @foreach($calidadperc as $key => $fanta)
                            @if($key == 0 || $calidadperc[$key-1]->clasificacion_aval != $fanta->clasificacion_aval)
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="background-color: rgb(249, 231, 159);">{{$fanta->clasificacion_aval}}</th>
                                    <th scope="col" style="background-color: rgb(249, 231, 159);">SI</th>
                                    <th scope="col" style="background-color: rgb(249, 231, 159);">NO</th>
                                    <th scope="col" style="background-color: rgb(249, 231, 159);">OBSERVACIONES</th>

                                </tr>
                            </thead>
                            @endif

                            <tbody>
                                <tr>
                                    <th scope="row">{{$fanta->nombre_aval}}</th>
                                    <td>
                                        <input type="radio" name="key_{{$key}}"  value="Si" required @if($CalidadPercibida_data['key_'.$key] == 'Si') checked @endif>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_{{$key}}" checked value="No" required @if($CalidadPercibida_data['key_'.$key] == 'Si') checked @endif>
                                    </td>
                                    <td>
                                        <textarea class="form-control" name="textarea_{{$key}}" rows="1" cols="10">{{$CalidadPercibida_data['textarea_'.$key]}}</textarea>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                        </table>
                    </div>
                </div>
        </div>
     <!--    <center>
            <button type="submit" class="btn btn-danger btn-round">
                <i class="far fa-save"></i> Guardar
            </button>
        </center>
-->
        </div>

    </form>

</div>
@endsection