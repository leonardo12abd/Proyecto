@extends('layouts.main', ['activePage' => '', 'titlePage' => 'Alta Acreditacion Primer NIvel '])
@section('content')

<div class="content">
    <form action="{{ route('guardarprimernivel') }}" method="POST">
        {{ csrf_field() }}

        <div class="container-fluid">
        <div class="row">


                <div class="card">
                        <div class="card text-white bg-danger" style="max-heigth: 18rem;">
                          <center>  <h4 class="card-tittle">
                                    Acreditación de Primer Nivel
                                    </h4>

                                <div class="col-3">
                                <label class="text-white">Fecha de Visita: </label>
                                <input type="date" name="fecha_primernivel" class="form-control text-white" required>
                            </center>
                        </div>



                        {{-- Inicia la primer Seccion --}}
                      <div class="card-body">
                        <div class="row">
                          <div class="col-3">
                          <input class="form-control" list="datalistOptions" id="clues_id"  placeholder="Unidad" onchange="selectUnidad({vista: 'alta_primer_nivel'})" required>
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

                              <div class="col-3">
                                <select name="id_clues" id="id_clues" class="form-control" class="form-control" hidden onclick >
                                <option selected value="-1">Selecciona primero una unidad...</option>
                                @foreach ( $unidades as $unidad )
                                    <option value="{{ $unidad->id_clues }}"> {{ $unidad->id_clues}}</option>
                                @endforeach
                                </select>
                            </div>

                        </div>


                        {{-- Inicia Form --}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card text-white bg-success" style="max-heigth: 18rem;">
                                        <center> <h4 class="card-tittle">Tipologia</h4> </center>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <select name="tipologia_primer" id="tipologia_primer" class="form-control"   disabled>
                                        <option selected value="-1">Selecciona primero una unidad...</option>
                                        @foreach ( $tipologias as $tipologia )
                                        <option value="{{ $tipologia->id_tipologia }}"> {{ $tipologia->nombre_tipologia   }}</option>
                                        @endforeach
                                    </select>


                                </div>
                                <div class="col-4">
                                    <textarea name="textarea_tipologia" id="" cols="30" rows="5" class="form-control" placeholder="Otra:"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card text-white bg-success" style="max-heigth: 18rem;">
                                        <center> <h4 class="card-tittle">Estructura Clues</h4> </center>
                                    </div>
                                    <center>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input onchange="changeEstructuraClue()" name="tipo__estructura"  type="radio" id="estructura_clues0" value="basica" checked> Básica
                                            </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                          <input onchange="changeEstructuraClue()" name="tipo__estructura"  type="radio" id="estructura_clues1" value="ampliada"> Ampliada
                                        </label>
                                      </div>
                                    </center>
                                    <div id="get_estructura_clues">
                                        <!-- NO VA NADA -->
                                      </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card text-white bg-success" style="max-heigth: 18rem;">
                                        <center> <h4 class="card-tittle">Estructura Real</h4> </center>
                                    </div>
                                    <center>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input onchange="changeEstructuraReal()" name="estructura_real" type="radio" id="estructura_real0" value="basica" checked> Básica
                                            </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                          <input onchange="changeEstructuraReal()" name="estructura_real" type="radio" id="estructura_real1"  value="ampliada"> Ampliada
                                        </label>
                                      </div>
                                    </center>
                                    <div id="get_estructura_real">
                                        <!-- NO VA NADA -->
                                      </div>
                                </div>

                            </div>
                        </div>

                        {{-- Termina form --}}


                        <div class="col-3">
                            <select name="tipologia_primer" id="tipologia_primer" class="form-control"  hidden disabled>
                                <option selected value="-1">Selecciona primero una unidad...</option>
                                @foreach ( $tipologias as $tipologia )
                                  <option value="{{ $tipologia->id_tipologia }}"> {{ $tipologia->nombre_tipologia   }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-3">
                            <select name="estrato_primer" id="estrato_primer" class="form-control" hidden disabled >
                                <option selected value="-1">Selecciona primero una unidad...</option>
                                @foreach ( $estratos as $estrato )
                                  <option value="{{ $estrato->claveestrato }}"> {{ $estrato->estrato  }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            @foreach ($primernivel as $key=>$fanta )
                              @if($key == 0 || $primernivel[$key-1]->clasificacion_primer != $fanta->clasificacion_primer)
                                <div class="col-12">
                                  <div class="card text-white bg-success" style="max-heigth: 18rem;">
                                      <center> <h4 class="card-tittle">{{ $fanta->clasificacion_primer }}</h4> </center>
                                  </div>
                                </div>
                              @endif
                              <div class="col-4">
                                <label> {{ $fanta->nombre_primer }} </label>
                                <div class="form-check form-check-inline">
                                  <label class="form-check-label">
                                    <input name="key_0{{$key}}" type="radio" id="inlineradio1" value="SI"> SI
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <label class="form-check-label">
                                    <input name="key_0{{$key}}"  type="radio" id="inlineradio2" value="NO"> NO
                                  </label>
                                </div>




                                @if ($fanta->nombre_primer == 'Otros')

                                <div >
                                  <textarea cols="30" rows="3" class="form-control" name="textarea_{{$key}}" placeholder="Introduzca alguna que halla faltado ingresar"></textarea>
                                </div>
                              @endif

                                {{--  FIN --}}
                              </div>
                            @endforeach

                          </div>
                        </div>

                      {{-- Inicia la segunda seccion --}}

                      <br><br>



                        {{-- Inicia la segunda seccion --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                        <div class="card text-white bg-info" style="max-heigth: 18rem;">
                                           <center>
                                             <h4 class="card-tittle">
                                                NECESIDADES DE RECURSOS HUMANOS <i class="fas fa-people-carry" > </i>
                                              </h4>
                                            </center>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                              <thead>
                                                <tr class="table-info">
                                                  <th scope="col"></th>
                                                  <th scope="col"></th>
                                                  <th scope="col"><center>SERVICIO SOCIAL</center></th>
                                                  <th colspan="4"><center>PERSONAL ISEM</center></th>
                                                  <th scope="col"></th>
                                                  <th colspan="6"><center>CAPACITACIONES</center></th>
                                                  <th scope="col"></th>
                                                </tr>
                                              </thead>
                                              <thead>
                                                  <tr class="table-warning">
                                                    <th scope="col"><center>RH</center>
                                                                  <center>(requisitar en base a su oferta de servicios)</center></th>
                                                    <th scope="col"><center>Descripción Puesto</center></th>
                                                    <th scope="col"><center>Carta de Asignación Campo Clinico al establecimiento(personal en servicio social)</center> </th>
                                                    <th scope="col">Titulo</th>
                                                    <th scope="col">Cédula</th>
                                                    <th scope="col"><center>Tipo de contratación (base, formalizado, regularizado, comisionado)</center></th>
                                                    <th scope="col"><center>Documento de Adscripción</center></th>
                                                    <th scope="col"><center>Estomatologo Cartilla vacunación</center></th>
                                                    <th scope="col"><center>Prevención de icendios y atencion de emergencias</center></th>
                                                    <th scope="col"><center>Interculturalidad</center></th>
                                                    <th scope="col"><center>Cuidados Paliativos</center></th>
                                                    <th scope="col"><center>Programa integral higiene de manos</center></th>
                                                    <th scope="col"><center>Acciones Escenciales</center></th>
                                                    <th scope="col"><center>Estomatologo RCP basico</center></th>
                                                    <th scope="col"><center>Observaciones</center></th>
                                                  </tr>
                                                </thead>

                                              <tbody id="map_rh">
                                                <tr>
                                               <button type="button" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" onclick="addRH()" >Agregar Nuevo</button>


                                                  <th></th>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                </tr>
                                              </tbody>

                                            </table>
                                          </div>

                                </div>
                            </div>
                        </div>
                      </div>
                        {{-- Recursos HUmanos --}}

                       <div class="row">
                          <div class="col-md-12">
                            <div id="map_rh"></div>

                          </div>
                          <div class="col-md-12">
                            <input onclick='addRH()' value="Agregar fila" type="button">
                          </div>
                        </div>


                        {{-- Recursos HUmanos --}}




                        <br>

                       



                        {{-- Termina la segunda seccion --}}
                        {{-- Inicia la Tercera seccion --}}
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card">

                                        <div class="card text-white bg-warning" style="max-heigth: 18rem;">
                                          <center>  <h4 class="card-tittle">NECESIDADES DE MANTENIMIENTO Y CONSERVACIÓN AL INMUEBLE  <i class="fas fa-screwdriver"></i>
                                                </h4></center>
                                        </div>
                                        <table class="table table-bordered">
                                          <thead>
                                            <tr>
                                              <th class="table-success">REQUERIMIENTO</th>
                                              <th class="table-success">FACHADA</th>
                                              <th class="table-success">SALA DE ESPERA</th>
                                              <th class="table-success">SANITARIOS</th>
                                              <th class="table-success">CONSULTORIOS</th>
                                              <th class="table-success">MEDICINA PREVENTIVA</th>
                                              <th class="table-success">FARMACIA</th>
                                              <th class="table-success">ESTERILIZACION</th>
                                              <th class="table-success">OTRAS ÁREAS</th>


                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ( $infras as $key => $infra )
                                            <tr>
                                              <th scope="row">{{ $infra ->nombre_infra}} </th>
                                              <td><input type="number" name="key_{{$key}}" min="0" class="form-control" type="text" id="fachada2_{{$key}}" onchange="sumarr2({{$key}})" onkeypress="sumarr2({{$key}})" @if($infra->fachada_infra_is_required == 0) disabled @endif></td>
                                              <td><input type="number" name="key_{{$key}}" min="0" class="form-control" type="text" id="salaespera2_{{$key}}" onchange="sumarr2({{$key}})" onkeypress="sumarr2({{$key}})" @if($infra->saladeespera_infra_is_required == 0) disabled @endif></td>
                                              <td><input type="number" name="key_{{$key}}" min="0" class="form-control" type="text" id="sanitario2_{{$key}}" onchange="sumarr2({{$key}})" onkeypress="sumarr2({{$key}})" @if($infra->sanitarios_infra_is_required == 0) disabled @endif></td>
                                              <td><input type="number" name="key_{{$key}}" min="0" class="form-control" type="text" id="consultorio2_{{$key}}" onchange="sumarr2({{$key}})" onkeypress="sumarr2({{$key}})" @if($infra->consultorios_infra_is_required == 0) disabled @endif></td>
                                              <td><input type="number" name="key_{{$key}}" min="0" class="form-control" type="text" id="medicinaprev2_{{$key}}" onchange="sumarr2({{$key}})" onkeypress="sumarr2({{$key}})" @if($infra->medicinaprev_infra_is_required == 0) disabled @endif></td>
                                              <td><input type="number" name="key_{{$key}}" min="0" class="form-control" type="text" id="farmacia2_{{$key}}" onchange="sumarr2({{$key}})" onkeypress="sumarr2({{$key}})" @if($infra->farmacia_infra_is_required == 0) disabled @endif></td>
                                              <td><input type="number" name="key_{{$key}}" min="0" class="form-control" type="text" id="areaesterilizacion2_{{$key}}" onchange="sumarr2({{$key}})" onkeypress="sumarr2({{$key}})" @if($infra->esterilizacion_infra_is_required == 0) disabled @endif></td>
                                              <td><input type="number" name="key_{{$key}}" min="0" class="form-control" type="text" id="otrasareas2_{{$key}}" onchange="sumarr2({{$key}})" onkeypress="sumarr2({{$key}})" @if($infra->otrasareas_infra_is_required == 0) disabled @endif></td>
                                            </tr>
                                            @endforeach
                                          </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>


                        {{-- Termina la Tercera seccion --}}



                        <div class="row">
                            <div class="col-md-12">

                                <div class="card">

                                        <div class="card text-white bg-secondary" style="max-heigth: 18rem;">
                                         <center>
                                             <h4 class="card-tittle">NECESIDADES DE EQUIPO, INMOBILIARIO E INSTRUMENTAL  <i class="fas fa-tools"></i>
                                                </h4>
                                        </center>
                                        </div>
                                        <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th class="table-info">REQUERIMIENTO</th>
                                                <th class="table-info">SALA DE ESPERA</th>
                                                <th class="table-info">CONSULTORIOS</th>
                                                <th class="table-info">MEDICINA PREVENTIVA</th>
                                                <th class="table-info">ÁREA ESTERILIZACIÓN</th>
                                                <th class="table-info">ESTOMATOLOGIA</th>
                                                <th class="table-info">PSICOLOGIA</th>
                                                <th class="table-info">ARCHIVO</th>
                                                <th class="table-info">FARMACIA</th>
                                                <th class="table-info">OTRAS ÁREAS</th>
                                                <th class="table-info">TOTAL</th>

                                              </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ( $emis as $key => $emi )
                                              <tr>
                                                <th scope="row">{{ $emi ->nombre_emi}} </th>
                                                <td><input type="number" name="key_11{{$key}}" min="0" class="form-control" type="text" id="salaespera_{{$key}}" onchange="sumarr({{$key}})" onkeypress="sumarr({{$key}})" @if($emi->saladeespera_emi_is_required == 0) disabled @endif></td>
                                                <td><input type="number" name="key_12{{$key}}" min="0" class="form-control" type="text" id="consultorio_{{$key}}" onchange="sumarr({{$key}})" onkeypress="sumarr({{$key}})" @if($emi->consultorios_emi_is_required == 0) disabled @endif></td>
                                                <td><input type="number" name="key_13{{$key}}" min="0" class="form-control" type="text" id="medicinaprev_{{$key}}" onchange="sumarr({{$key}})" onkeypress="sumarr({{$key}})" @if($emi->medicinaprev_emi_is_required == 0) disabled @endif></td>
                                                <td><input type="number" name="key_14{{$key}}" min="0" class="form-control" type="text" id="areaesterilizacion_{{$key}}" onchange="sumarr({{$key}})" onkeypress="sumarr({{$key}})" @if($emi->areaesterilizacion_emi_is_required == 0) disabled @endif></td>
                                                <td><input type="number" name="key_15{{$key}}" min="0" class="form-control" type="text" id="estomatologia_{{$key}}" onchange="sumarr({{$key}})" onkeypress="sumarr({{$key}})" @if($emi->estomatologia_emi_is_required == 0) disabled @endif></td>
                                                <td><input type="number" name="key_16{{$key}}" min="0" class="form-control" type="text" id="psicologia_{{$key}}" onchange="sumarr({{$key}})" onkeypress="sumarr({{$key}})" @if($emi->psicologia_emi_is_required == 0) disabled @endif></td>
                                                <td><input type="number" name="key_17{{$key}}" min="0" class="form-control" type="text" id="archivo_{{$key}}" onchange="sumarr({{$key}})" onkeypress="sumarr({{$key}})" @if($emi->archivo_emi_is_required == 0) disabled @endif></td>
                                                <td><input type="number" name="key_18{{$key}}" min="0" class="form-control" type="text" id="farmacia_{{$key}}" onchange="sumarr({{$key}})" onkeypress="sumarr({{$key}})" @if($emi->farmacia_emi_is_required == 0) disabled @endif></td>
                                                <td><input type="number" name="key_19{{$key}}" min="0" class="form-control" type="text" id="otrasareas_{{$key}}" onchange="sumarr({{$key}})" onkeypress="sumarr({{$key}})" @if($emi->otrasareas_emi_is_required == 0) disabled @endif></td>
                                                <td><input type="number" name="key_20{{$key}}" min="0" class="form-control" type="text" id="total_{{$key}}" onchange="sumarr({{$key}})" onkeypress="sumarr({{$key}})" @if($emi->total_emi_is_required == 0) disabled @endif></td>
                                              </tr>
                                              @endforeach
                                            </tbody>

                                        </table>
                                        </div>

                                </div>
                                </div>




                        </div>
                        {{-- Espacio donde termina los divs --}}
                            </div>

                            
                                        <center><button type="submit" class="btn btn-primary">
                                            <i class="far fa-save"></i> Guardar
                                          </button></center>
                    </div>
                </div>


            </div>

        </div>
        
        
    </form>
    </div>
@endsection
