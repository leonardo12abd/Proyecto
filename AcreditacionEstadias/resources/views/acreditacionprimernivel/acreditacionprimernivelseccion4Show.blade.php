@extends('layouts.app')

@section('content')

<div class="content">
    <form action="/altaprimernivelsec4" method="POST">
        {{ csrf_field() }}
        <div class="container-fluid">
        <div class="row">
                <div class="card">
                        <div class="card text-white bg-success mb-3" style="max-heigth: 18rem;">
                            <center>
                              <h4 class="card-tittle">LINEA CPCASEP/MEJORA CONTINUA</h4>
                            </center>
                        </div>


                        {{-- Inicia la primer Seccion --}}
                    <div class="card-body">
                        <center><h4 style="background-color: rgb(125, 206, 160);">Linea COCASEP</h4></center>
                        <table class="table">
                            @foreach($cocaseps as $key => $pepsi)
                                @if($key == 0 || $cocaseps[$key-1]->clasificacion_cocasep != $pepsi->clasificacion_cocasep)
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" style="background-color: rgb(169, 223, 191);">{{$pepsi->clasificacion_cocasep}}</th>
                                            <th scope="col" style="background-color: rgb(169, 223, 191);">SI</th>
                                            <th scope="col" style="background-color: rgb(169, 223, 191);">NO</th>
                                            <th scope="col" style="background-color: rgb(169, 223, 191);">OBSERVACIONES</th>
                                        </tr>
                                    </thead>
                                @endif
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$pepsi->nombre_cocasep}}</th>
                                        <td>
                                            <input type="radio" name="key_{{$key}}" value="Si" required @if($cocasep_data['key_'.$key] == 'Si') checked @endif>
                                        </td>
                                        <td>
                                            <input type="radio" name="key_{{$key}}" value="No" required @if($cocasep_data['key_'.$key] == 'No') checked @endif>
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="textarea_{{$key}}"  rows="1" cols="10">{{$cocasep_data['textarea_'.$key]}}</textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                          </table>
                    </div>
                </div>
        </div>

        <!-- <center><button type="submit" class="btn btn-primary btn-round">
            <i class="far fa-save"></i> Guardar
          </button></center> -->
        </div>

    </form>

</div>
@endsection
