@extends('layouts.main', ['activePage' => '', 'titlePage' => ' '])
@section('content')

<div class="card-body">

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



                        <div class="card-body">
                            <div class="row">
                              <div class="col-3">
                              <input class="form-control" list="datalistOptions" id="clues_id" placeholder="Unidad" onchange="selectUnidad({vista: 'alta_primer_nivel_sec_2'})" required>
                              <datalist id="datalistOptions" >
                                @foreach ( $unidades as $unidad )
                                  <option  value="{{ $unidad->clues }}" />
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




                        {{-- Seccion CALIDAD PERCIBIDA --}}
                    <div class="card-body">
                        <center><h4 style="background-color: rgb(247, 220, 111);">Aval Ciudadano</h4></center>
                    <div class="table-responsive">
                        <table class="table">
                            @foreach($calidadpers as $key => $cpers)
                            @if($key == 0 || $calidadpers[$key-1]->clasificacion_aval != $cpers->clasificacion_aval)
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="background-color: rgb(249, 231, 159);">{{$cpers->clasificacion_aval}}</th>
                                    <th scope="col" style="background-color: rgb(249, 231, 159);">SI</th>
                                    <th scope="col" style="background-color: rgb(249, 231, 159);">NO</th>
                                    <th scope="col" style="background-color: rgb(249, 231, 159);">OBSERVACIONES</th>

                                </tr>
                            </thead>
                            @endif

                            <tbody>
                                <tr>
                                    <th scope="row">{{$cpers->nombre_aval}}</th>
                                    <td>
                                        <input type="radio" name="key_{{$key}}" value="Si" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_{{$key}}"  checked value="No" required>
                                    </td>
                                    <td>
                                        <textarea class="form-control" name="textarea_{{$key}}" rows="1" cols="10"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                        </table>
                    </div>
                    </div>
                </div>
        </div>
        <center>
            <button type="submit" class="btn btn-danger btn-lg btn-block">
                <i class="far fa-save"></i> Guardar
            </button>
        </center>

        </div>

    </form>

</div>
@endsection
