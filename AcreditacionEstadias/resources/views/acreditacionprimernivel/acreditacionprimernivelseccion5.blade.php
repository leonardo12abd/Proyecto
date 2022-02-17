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

                        {{--<div class="card-body">

                            <div class="row">
                                <div class="col-3">
                                    <input class="form-control" list="datalistOptions" id="clues_id" placeholder="Unidad" onchange="selectUnidad()">
                                    <datalist id="datalistOptions">
                                    @foreach ( $unidades as $unidad )
                                        <option value="{{ $unidad->clues }}" />
                                    @endforeach
                                    </datalist>
                                <!-- <select name="clues" id="clues_id" class="form-control" onchange="selectUnidad()" label="hola">
                                    <option selected value="-1">Seleccionar...</option>
                                    @foreach ( $unidades as $unidad )
                                    <option value="{{ $unidad->id_clues }}"> {{ $unidad->clues  }}</option>
                                    @endforeach
                                </select> -->
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
                            </div>
                        </div>--}}
                
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
                                        <input type="radio" name="key_{{$key}}" value="Si" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_{{$key}}" checked value="No" required>
                                    </td>
                                    <td>
                                        <textarea class="form-control" name="textarea_{{$key}}" rows="1" cols="10"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                            <!--
                                <thead class="thead-dark">
                                    <tr>
                                      <th scope="col" colspan="4" style="background-color: rgb(212, 230, 241);">Gestor de Calidad</th>
                                    </tr>
                                  </thead>
                              <tr>
                                <th scope="row">Nombramiento del Gestor de Calidad, firmada por el Directivo o Jefe Responsable</th>
                                <td>
                                    <input type="radio">
                                </td>
                                <td>
                                    <input type="radio">
                                </td>
                                <td>
                                    <textarea class="form-control" rows="1" cols="10" ></textarea>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">Verificar mediante sondeo el conocimiento de las funciones del Gestor de Calidad conforme a la instrucción 118 (al menos 5 funciones).</th>
                                <td>
                                    <input type="radio">
                                </td>
                                <td>
                                    <input type="radio">
                                </td>
                                <td>
                                    <textarea class="form-control" rows="1" cols="10" ></textarea>
                                </td>
                              </tr>

                              {{-- otra --}}
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col" colspan="4" style="background-color: rgb(212, 230, 241);">Sistema Nacional de Indicadores de Calidad en Salud (INDICAS II )</th>
                                </tr>
                              </thead>
                          <tr>
                            <th scope="row">¿Qué es el Sistema  INDICAS II y cuál es el manejo del Sistema  Local y Federal?</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">Lineamientos Operativos del Sistema de Monitoreo para la Gestión de la Calidad.</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Cuadernillo en blanco de Consulta Externa.</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">Cuadernillo en blanco de Servicios de Hospitalización. </th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Formato de recolección y concentración de datos INDICAS 1er Cuatrimestre 2021 (cuadernillo completo). </th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">Formato de recolección y concentración de datos INDICAS 2do Cuatrimestre 2021 (cuadernillo completo).</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Formato de recolección y concentración de datos INDICAS 3er Cuatrimestre 2021 (cuadernillo completo).</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">Avances del formato de recolección y concentración de datos INDICAS al cuatrimestre 2022 correspondiente (cuadernillo).</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Evidencia del envío de la información a la plataforma federal INDICAS II correspondiente al 1er cuatrimestre 2021 (Grafica del reporte global para la evaluación de los INDICES).</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">Evidencia del envío de la información a la plataforma INDICAS correspondiente al 2do cuatrimestre 2021 (Grafica del reporte global para la evaluación de los INDICES).</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">Evidencia del envío de la información a la plataforma INDICAS correspondiente al 3er  cuatrimestre 2021(Grafica del reporte global para la evaluación de los INDICES).</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                        <tr>
                            <th scope="row">Evidencia documental de las acciones de mejora de los indicadores que se encuentra fuera del Estándar Nacional y seguiminetos respectivos.</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                        <tr>
                            <th scope="row">Evidencia documental de las acciones de mejora del indicador de tiempos de espera</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                        <tr>
                            <th scope="row">Publicación de resultados INDICAS en la sala de espera (Grafica del reporte global para la evaluación de los INDICES).</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                        <tr>
                            <th scope="row">Evidencia de la difusión de los resultados INDICAS al menos mediante platicas otorgadas a los Usuarios y Prestadores de Servicios.</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>


                            {{-- 3 --}}
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col" colspan="4" style="background-color: rgb(212, 230, 241);">Sistema de la Encuesta de Satisfacción, Trato Adecuado y Digno (SESTAD).</th>
                                </tr>
                              </thead>
                          <tr>
                            <th scope="row">¿Qué es el SESTAD?</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">Lineamientos del Sistema de la Encuesta de Satisfacción, Trato Adecuado y Digno (SESTAD).</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Evidencias del usuario y contraseña para el acceso al Sistema de la Encuesta de Satisfacción, Trato Adecuado  y Digno (Monitor Institucional).</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">Descripción y cálculo de la muestra para la aplicación de la Encuesta ESTAD en Consulta Externa.</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Evidencia de la difusión del Comparativo SESTAD (monitor institucional y ciudadano). </th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">Evidencia documental de las acciones de mejora de los companentes No Avalados en los Establecimientos.</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">Evidencia de la difusión de los resultados SESTAD al menos mediante platicas otorgadas a los Usuarios y Prestadores de Servicios.</th>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <input type="radio">
                            </td>
                            <td>
                                <textarea class="form-control" rows="1" cols="10" ></textarea>
                            </td>
                          </tr>

                            
                            </tbody>-->
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
