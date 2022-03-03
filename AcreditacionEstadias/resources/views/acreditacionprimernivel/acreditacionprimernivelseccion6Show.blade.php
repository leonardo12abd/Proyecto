@extends('layouts.app')

@section('content')

<div class="content">
    <form action="#" method="POST">
        {{ csrf_field() }}

        <div class="container-fluid">
        <div class="row">


                <div class="card">
                        <div class="card text-white bg-secondary" style="max-heigth: 18rem;">
                            <center>
                              <h4 class="card-tittle">APOYOS E INCENTIVOS</h4>
                            </center>
                        </div>


                        {{-- Inicia la primer Seccion --}}
                    <div class="card-body">
                        <table class="table">
                        <thead class="thead-dark">
                              <tr>
                                <th scope="col" style="background-color: #AEB6BF"><center> CÉDULA DE MADUREZ MODELO DE GESTIÓN DE CALIDAD</center></th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF">FEBRERO</th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF">JUNIO</th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF">SEPTIEMBRE</th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF">OBSERVACIONES</th>
                              </tr>
                            </thead>
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col" style="background-color: #D6DBDF"></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>PUNTAJE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>CUMPLE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>PUNTAJE</th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>CUMPLE</th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>PUNTAJE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>CUMPLE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>OBSERVACIONES</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($apoyos as $key => $apo)
                                <tr>
                                    <th scope="row">{{$apo->nombre_apoyos}}</th>
                                    <td>
                                        <input type="text" name="puntaje_0_{{$key}}"  required value="{{ $apoyos_data['puntaje_0_'.$key] }}">
                                    </td>
                                    <td>
                                        <input type="radio" name="key_0_{{$key}}" value="Si" required @if($apoyos_data['key_0_'.$key] == 'Si') checked @endif>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_0_{{$key}}" value="No" required @if($apoyos_data['key_0_'.$key] == 'No') checked @endif>
                                    </td>
                                    <td>
                                        <input type="text" name="puntaje_1_{{$key}}" required value="{{ $apoyos_data['puntaje_1_'.$key] }}">
                                    </td>
                                    <td>
                                        <input type="radio" name="key_1_{{$key}}" value="Si" required @if($apoyos_data['key_1_'.$key] == 'Si') checked @endif>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_1_{{$key}}"  value="No" required @if($apoyos_data['key_1_'.$key] == 'No') checked @endif>
                                    </td>
                                    <td>
                                        <input type="text" name="puntaje_2_{{$key}}"  required value="{{ $apoyos_data['puntaje_2_'.$key] }}">
                                    </td>
                                    <td>
                                        <input type="radio" name="key_2_{{$key}}" value="Si" required @if($apoyos_data['key_2_'.$key] == 'Si') checked @endif>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_2_{{$key}}" value="No" required @if($apoyos_data['key_2_'.$key] == 'No') checked @endif>
                                    </td>
                                    <td>
                                        <textarea class="form-control" name="textarea_{{$key}}" rows="1" cols="10">{{$apoyos_data['textarea_'.$key]}}</textarea>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <center>
                                <button type="submit" class="btn btn-primary btn-round">
                                <i class="far fa-save"></i> Guardar
                                </button>
                            </center>
                    </div>

@endsection

