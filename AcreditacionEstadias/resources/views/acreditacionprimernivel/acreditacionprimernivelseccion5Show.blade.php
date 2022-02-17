@extends('layouts.app')

@section('content')

<div class="content">
    <form action="#" method="POST">
        {{ csrf_field() }}

        <div class="container-fluid">
        <div class="row">


                <div class="card">
                        <div class="card text-white bg-primary" style="max-heigth: 18rem;">
                            <center>
                              <h4 class="card-tittle">INDICAS Y GESTORES DE CALIDAD</h4>
                            </center>

                            <input  hidden class="form-control" name="id_primernivel" id="id_primernivel" placeholder="id_primernivel">
                                @if ($errors->first('id_primernivel'))
                                <p class="text-warning">{{ $errors->first('id_primernivel') }}</p>
                                @endif
                            <center>
                                <label >Fecha de Visita: </label>
                                <input type="date" name="fecha_primernivel">
                            </center>
                        </div> 

                        {{-- Inicia la primer Seccion --}}
                    <div class="card-body">
                        <table class="table">
                            @foreach($indicas as $key => $indi)
                            @if($key == 0 || $indicas[$key-1]->clasificacion_indicas != $indi->clasificacion_indicas)
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col" style="background-color: rgb(127, 179, 213);">{{$indi->clasificacion_indicas}}</th>
                                <th scope="col" style="background-color: rgb(127, 179, 213);">SI</th>
                                <th scope="col" style="background-color: rgb(127, 179, 213);">NO</th>
                                <th scope="col" style="background-color: rgb(127, 179, 213);">OBSERVACIONES</th>
                              </tr>
                            </thead>
                            @endif

                            <tbody>
                                <tr>
                                    <th scope="row">{{$indi->nombre_indicas}}</th>
                                    <td>
                                        <input type="radio" name="key_{{$key}}" value="Si" required @if($indicas_data['key_'.$key] == 'Si') checked @endif>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_{{$key}}" value="No" required @if($indicas_data['key_'.$key] == 'No') checked @endif>
                                    </td>c  
                                    <td>
                                        <textarea class="form-control" name="textarea_{{$key}}" rows="1" cols="10">{{$indicas_data['textarea_'.$key]}}</textarea>
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
