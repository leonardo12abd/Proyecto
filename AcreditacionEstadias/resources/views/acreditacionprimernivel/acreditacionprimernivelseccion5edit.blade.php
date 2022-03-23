@extends('layouts.main', ['activePage' => '', 'titlePage' => ' '])
@section('content')

<div class="content">
    <form action="{{ route('updateindicas',$data1->id) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')

        <div class="container-fluid">
        <div class="row">


                <div class="card">
                        <div class="card text-white bg-primary" style="max-heigth: 18rem;">
                            <center>
                              <h4 class="card-tittle">Show INDICAS Y GESTORES DE CALIDAD</h4>
                            </center>

                        </div>

                        <div class="card-body">
                            <div class="row">
                              <div class="col-3">
                              <input class="form-control" list="datalistOptions" id="clues_id" placeholder="Unidad" onchange="selectUnidad({vista: 'alta_primer_nivel_sec_5'})" onmousemove="selectUnidad({vista: 'alta_primer_nivel_sec_5'})"  value="{{ $data1->clues->clues}}">
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
                                        <input type="radio" name="key_{{$key}}" value="Si" required @if($data1->data1['key_'.$key] == 'Si') checked @endif>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_{{$key}}" value="No" required @if($data1->data1['key_'.$key] == 'No') checked @endif>
                                    </td>c
                                    <td>
                                        <textarea class="form-control" name="textarea_{{$key}}" rows="1" cols="10">{{$data1->data1['textarea_'.$key]}}</textarea>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
        </div>
        <center>
            <button type="submit" class="btn btn-danger btn-round">
                <i class="far fa-save"></i> Actualizar
            </button>
        </center>

        </div>
    </form>

</div>
@endsection
