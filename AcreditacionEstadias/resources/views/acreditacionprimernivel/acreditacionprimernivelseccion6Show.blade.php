@extends('layouts.main', ['activePage' => '', 'titlePage' => 'Mostrar Apoyos e Incentivos'])
@section('content')

<div class="content">
    <form action="#" method="POST">
        {{ csrf_field() }}

        <div class="container-fluid">
        <div class="row">


                <div class="card">
                        <div class="card text-white bg-secondary" style="max-heigth: 18rem;">
                            <center>
                              <h4 class="card-tittle">Show APOYOS E INCENTIVOS</h4>
                            </center>
                        </div>
                        <div class="card-body">
                            <div class="row">
                              <div class="col-3">
                              <input class="form-control" list="datalistOptions" id="clues_id" placeholder="Unidad" onchange="selectUnidad({vista: 'alta_primer_nivel_sec_6'})" onmousemove="selectUnidad({vista: 'alta_primer_nivel_sec_6'})"  value="{{ $data4->clues->clues}}">
                              <datalist id="datalistOptions" >
                                @foreach ( $unidades as $unidad )
                                  <option  value="{{ $unidad->clues }}"  />
                                @endforeach
                              </datalist>

                              </div>
                                <div class="col-3">
                                  <select name="unidad" id="unidad_id" class="form-control" class="form-control"  disabled>
                                    <option selected value="-1">Selecciona primero una unidad...</option>
                                    @foreach ( $unidades as $unidad )
                                      <option value="{{ $unidad->id_clues }}"> {{ $unidad->nombreunidad   }}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="col-3">
                                    <select name="municipio_primer" id="municipio_primer" class="form-control"  disabled>
                                        <option selected value="-1">Selecciona primero una unidad...</option>
                                        @foreach ( $municipios as $municipio )
                                          <option value="{{ $municipio->clave_municipio }}"> {{ $municipio->nombremunicipio   }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <div class="col-3">
                                    <select name="juridiccion_primer" id="juridiccion_primer" class="form-control" disabled >
                                        <option selected value="-1">Selecciona primero una unidad...</option>
                                        @foreach ( $jurisdicciones as $juri )
                                          <option value="{{ $juri->clavejuridiccion }}"> {{ $juri->nombrejurisdiccion   }}</option>
                                        @endforeach
                                    </select>

                                  </div>


                                  {{-- Inicio Hoy --}}
                                  <div class="col-3">
                                    <select name="id_clues" id="id_clues" class="form-control" class="form-control" hidden onclick >
                                    <option selected value="-1">Selecciona primero una unidad...</option>
                                    @foreach ( $unidades as $unidad )
                                        <option value="{{ $unidad->id_clues }}"> {{ $unidad->id_clues}}</option>
                                    @endforeach
                                    </select>
                                </div>

{{-- Fin hoy --}}



                        {{-- Inicia la primer Seccion --}}
                        <div class="table-responsive">
                        <table class="table">
                        <thead class="thead-dark">
                              <tr>
                                <th scope="col" style="background-color: #56585a"><center> C??DULA DE MADUREZ MODELO DE GESTI??N DE CALIDAD</center></th>
                                <th scope="col" style="background-color: #56585a"></th>
                                <th scope="col" style="background-color: #56585a">FEBRERO</th>
                                <th scope="col" style="background-color: #56585a"></th>
                                <th scope="col" style="background-color: #56585a"></th>
                                <th scope="col" style="background-color: #56585a">JUNIO</th>
                                <th scope="col" style="background-color: #56585a"></th>
                                <th scope="col" style="background-color: #56585a"></th>
                                <th scope="col" style="background-color: #56585a">SEPTIEMBRE</th>
                                <th scope="col" style="background-color: #56585a"></th>
                                <th scope="col" style="background-color: #56585a">OBSERVACIONES</th>
                              </tr>
                            </thead>
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col" style="background-color: #949ea5"></th>
                                  <th scope="col" style="background-color: #949ea5"><center>PUNTAJE</center></th>
                                  <th scope="col" style="background-color: #949ea5"><center>CUMPLE</center></th>
                                  <th scope="col" style="background-color: #949ea5"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #949ea5"><center>PUNTAJE</th>
                                  <th scope="col" style="background-color: #949ea5"><center>CUMPLE</th>
                                  <th scope="col" style="background-color: #949ea5"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #949ea5"><center>PUNTAJE</center></th>
                                  <th scope="col" style="background-color: #949ea5"><center>CUMPLE</center></th>
                                  <th scope="col" style="background-color: #949ea5"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #949ea5"><center>OBSERVACIONES</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($apoyos as $key => $apo)
                                <tr>
                                    <th scope="row">{{$apo->nombre_apoyos}}</th>
                                    <td>
                                        <input type="number"  class="form-control" name="puntaje_0_{{$key}}"  required value="{{$data4->data4['puntaje_0_'.$key] }}">
                                    </td>
                                    <td>
                                        <input type="radio" name="key_0_{{$key}}" value="Si" required @if($data4->data4['key_0_'.$key] == 'Si') checked @endif>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_0_{{$key}}" value="No" required @if($data4->data4['key_0_'.$key] == 'No') checked @endif>
                                    </td>
                                    <td>
                                        <input type="number"  class="form-control" name="puntaje_1_{{$key}}" required value="{{ $data4->data4['puntaje_1_'.$key] }}">
                                    </td>
                                    <td>
                                        <input type="radio" name="key_1_{{$key}}" value="Si" required @if($data4->data4['key_1_'.$key] == 'Si') checked @endif>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_1_{{$key}}"  value="No" required @if($data4->data4['key_1_'.$key] == 'No') checked @endif>
                                    </td>
                                    <td>
                                        <input type="number"  class="form-control" name="puntaje_2_{{$key}}"  required value="{{$data4->data4['puntaje_2_'.$key] }}">
                                    </td>
                                    <td>
                                        <input type="radio" name="key_2_{{$key}}" value="Si" required @if($data4->data4['key_2_'.$key] == 'Si') checked @endif>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_2_{{$key}}" value="No" required @if($data4->data4['key_2_'.$key] == 'No') checked @endif>
                                    </td>
                                    <td>
                                        <textarea class="form-control" name="textarea_{{$key}}" rows="1" cols="10">{{$data4->data4['textarea_'.$key]}}</textarea>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                </div>

@endsection

