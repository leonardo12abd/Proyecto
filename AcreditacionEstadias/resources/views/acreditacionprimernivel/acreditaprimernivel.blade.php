@extends('layouts.app')
@section('content')

<div class="content">
    <form action="{{ route('guardarprimernivel') }}" method="POST">
        {{ csrf_field() }}

        <div class="container-fluid">
        <div class="row">


                <div class="card">
                        <div class="card text-white bg-danger" style="max-heigth: 18rem;">
                          <center>  <h4 class="card-tittle">Acreditación de Primer Nivel
                                </h4></center>

                            <input  hidden class="form-control" name="id_primernivel" id="id_primernivel" placeholder="id_primernivel">
                            @if ($errors->first('id_primernivel'))
                            <p class="text-warning">{{ $errors->first('id_primernivel') }}</p>
                            @endif
                          <center><label >Fecha de Visita: </label>  <input type="date" name="fecha_primernivel"></center>
                        </div>


                        {{-- Inicia la primer Seccion --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                              <select name="unidad" id="unidad_id" class="form-control" onchange="selectUnidad()">
                                @foreach ( $unidades as $unidad )
                                  <option value="{{ $unidad->claveclues }}"> {{ $unidad->nombreunidad   }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="col-4">
                                <select name="municipio_primer" id="municipio_primer" class="form-control"  disabled>
                                    <option selected value="-1">Selecciona primero una unidad...</option>
                                    @foreach ( $municipios as $municipio )
                                      <option value="{{ $municipio->clave_municipio }}"> {{ $municipio->nombremunicipio   }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="col-4">
                                <select name="juridiccion_primer" id="juridiccion_primer" class="form-control" disabled >
                                    <option selected value="-1">Selecciona primero una unidad...</option>
                                    @foreach ( $jurisdicciones as $juri )
                                      <option value="{{ $juri->clavejuridiccion }}"> {{ $juri->nombrejurisdiccion   }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        {{-- Tipología --}}

                        <br>
                        <div class="card text-white bg-success" style="max-heigth: 18rem;">
                            <h4 class="card-tittle">Tipología</h4>
                        </div>
                        <br>
                           <div class="row">
                            <div class="col-4">
                                <input type="text" name="r_nucleosbasicos" placeholder="Rural Nucleos" class="form-control">
                            </div>
                            <div class="col-4">
                                <input type="text" name="u_nucleosbasicos" placeholder="Urbana Nucleos" class="form-control">
                            </div>
                            <div class="col-4">
                                <input type="text" name="complet_nucleosbasicos" placeholder="Nucleos básicos completos existentes" class="form-control">
                            </div>

                            <center><div class="col-12">
                               <label>Otra:</label><textarea name="otra_tipologia" id="" cols="30" rows="3" class="form-control" placeholder="Introduzca alguna que halla faltado ingresar"></textarea>
                            </div></center>
                        </div>

                        {{-- Estructura CLUES --}}

                        <br>
                        <div class="card text-white bg-success" style="max-heigth: 18rem;">
                            <h4 class="card-tittle">Estructura(CLUES)  </i></h4>
                        </div>
                        <br>
                        <div class="row">
                           <div class="col-12">
                              <center>    <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estructura_clues" class="form-check-input" type="radio" id="inlineradio1" value="basica"> Básica

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estructura_clues" class="form-check-input" type="radio" id="inlineradio2" value="ampliada"> Ampliada

                                    </label>
                                  </div>
                                </center>
                            </div>
                            <div class="col-3">
                               <label>Estomatología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estomatologia_estruclues" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estomatologia_estruclues" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Psicología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="psicologia_estruclues" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="psicologia_estruclues" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Trabajo Social: </label> <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                      <input name="tbsocial_estruclues" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="tbsocial_estruclues" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>

                            <div class="col-3">
                                <label>Laboratorio: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="laboratorio_estruclues" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="laboratorio_estruclues" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                            </div>

                            <div class="col-3">
                                <label>RX: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="rx_estruclues" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="rx_estruclues" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>

                            </div>
                            <div class="col-3">
                            <input type="text" name="otro_estruclues" id="" class="form-control" placeholder="Otro:">
                            </div>
                        </div>
{{-- Estructura Real --}}
                        <br>
                        <div class="card text-white bg-success" style="max-heigth: 18rem;">
                            <h4 class="card-tittle">Estructura Real</h4>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                               <center> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estructura_real" class="form-check-input" type="radio" id="inlineradio1" value="Basica"> Básica

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estructura_real" class="form-check-input" type="radio" id="inlineradio2" value="Ampliada"> Ampliada

                                    </label>
                                  </div></center>
                            </div>
                            <div class="col-3">
                               <label>Estomatología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estomatologia_estrucreal" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estomatologia_estrucreal" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Psicología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="psicologia_estrucreal" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="psicologia_estrucreal" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Trabajo Social: </label> <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                      <input name="tb_estrucreal" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="tb_estrucreal" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>

                            <div class="col-3">
                                <label>Laboratorio: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="lb_estrucreal" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="lb_estrucreal" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                            </div>

                            <div class="col-3">
                                <label>RX: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="rx_estrucreal" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="rx_estrucreal" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>

                            </div>
                            <div class="col-3">
                            <input type="text" name="otro_estrucreal" id="" class="form-control" placeholder="Otro:">
                            </div>
                        </div>

                        {{-- Estrato --}}
                        <br>

                        <div class="card text-white bg-success" style="max-heigth: 18rem;">
                            <h4 class="card-tittle">Estrato  </h4>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <label>Urbano:</label> <div class="form-check form-check-inline">
                                    <label name="estrato_urbano" class="form-check-label">
                                      <input class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estrato_urbano" class="form-check-input" type="radio" id="inlineradio2" value="NO"> No

                                    </label>
                                  </div>
                            </div>
                            <div class="col-4">
                               <label>Rural: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estrato_rural" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estrato_rural" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-4">
                                <label>Abasto de medicamento: </label>
                                <input type="text" name="estrato_abastom" id="" placeholder="Porcentaje %" class="form-control">

                            </div>

                            {{-- Cierra div=row --}}
                        </div>

                        <br>
                        <div class="card text-white bg-success" style="max-heigth: 18rem;"">
                            <h4 class="card-tittle">Aviso de Funcionamiento </h4>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <label>Med Gral: </label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_medgral" class="form-check-input" type="radio" id="inlineradio1" value="SI">SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_medgral" class="form-check-input" type="radio" id="inlineradio2" value="NO">NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                               <label>Estomatología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_estomatologia" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_estomatologia" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Psicología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_psicologia" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_psicologia" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label> Laboratorio: </label> <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                      <input name="avfunc_lb" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_lb" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>

                            <div class="col-3">
                                <label>Farmacia: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="avfunc_farmacia" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="avfunc_farmacia" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                            </div>

                            <div class="col-3">
                                <label>RX: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="avfunc_rx" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="avfunc_rx" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>

                            </div>
                            <div class="col-3">
                            <input type="text" name="avfunc_otro" id="" class="form-control" placeholder="Otro:">
                            </div>
                        </div>

                        {{-- Responsable Sanitario Actualizado --}}

                        <br>
                        <div class="card text-white bg-success" style="max-heigth: 18rem;">
                            <h4 class="card-tittle">Responsable Sanitario Actualizado  </h4>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <label>Med Gral: </label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_medgral" class="form-check-input" type="radio" id="inlineradio1" value="SI">SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_medgral" class="form-check-input" type="radio" id="inlineradio2" value="NO">NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                               <label>Estomatología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_estomatologia" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_estomatologia" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Psicología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_psicologia" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_psicologia" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label> Laboratorio: </label> <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                      <input name="respsanact_lb" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_lb" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>

                            <div class="col-3">
                                <label>Farmacia: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="respsanact_farmacia" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="respsanact_farmacia" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                            </div>

                            <div class="col-3">
                                <label>RX: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="respsanact_rx" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="respsanact_rx" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                       <span class="form-check-sign">

                                       </span>
                                     </label>
                                   </div>

                            </div>
                            <div class="col-3">
                            <input type="text" name="respsanact_otro" id="" class="form-control" placeholder="Otro:">
                            </div>
                        </div>

                        <br>
                        {{-- Servicio subrogados(Incluidos en el contrato) --}}
                        <div class="card text-white bg-success" style="max-heigth: 18rem;">
                            <h4 class="card-tittle">Servicio subrogados(Incluidos en el contrato) </h4>
                        </div>
                        <br>
                        <div class="row">

                            <div class="col-6">
                               <label>Permiso SEMARNAT generador RPBI: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_permsemarnat" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_permsemarnat" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-6">
                              <label>Permiso SEMARNAT transporte </label> <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                     <input name="servsubrogados_permsemarnat" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                     <span class="form-check-sign">

                                     </span>
                                   </label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                     <input name="servsubrogados_permsemarnat" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                     <span class="form-check-sign">

                                     </span>
                                   </label>
                                 </div>
                           </div>
                           <div class="col-3">
                            <label>RPBI: </label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input name="servsubrogados_rpbi" class="form-check-input" type="radio" id="inlineradio1" value="SI">SI
                                  <span class="form-check-sign">

                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input name="servsubrogados_rpbi" class="form-check-input" type="radio" id="inlineradio2" value="NO">NO
                                  <span class="form-check-sign">

                                  </span>
                                </label>
                              </div>
                        </div>

                            <div class="col-3">
                                <label>Farmacia: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_farmacia" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_farmacia" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label> Vigilancia: </label> <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                      <input name="servsubrogados_vg" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI

                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_vg" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO

                                    </label>
                                  </div>
                            </div>

                            <div class="col-3">
                                <label>Fumigación: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="servsubrogados_fumigacion" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                       <span class="form-check-sign">

                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="servsubrogados_fumigacion" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                       <span class="form-check-sign">

                                     </label>
                                   </div>
                            </div>
                        </div>
                        <br>

                         {{-- Servicio subrogados(Incluidos en el contrato) --}}
                         <div class="card text-white bg-success" style="max-heigth: 18rem;">
                          <h4 class="card-tittle">Mantenimiento y conservación al inmueble </h4>
                      </div>

                      <br>
                      <div class="row">
                         <div class="col-3">
                          <label>Programado: </label>
                          <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                <input name="servsubrogados_rpbi" class="form-check-input" type="radio" id="inlineradio1" value="SI">SI
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                <input name="servsubrogados_rpbi" class="form-check-input" type="radio" id="inlineradio2" value="NO">NO
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                              </label>
                            </div>
                      </div>

                          <div class="col-3">
                              <label>Realizado: </label> <div class="form-check form-check-inline">
                                  <label class="form-check-label">
                                    <input name="servsubrogados_farmacia" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <label class="form-check-label">
                                    <input name="servsubrogados_farmacia" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                          </div>
                          <div class="col-3">
                              <label> En proceso: </label> <div class="form-check form-check-inline">
                                 <label class="form-check-label">
                                    <input name="servsubrogados_vg" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <label class="form-check-label">
                                    <input name="servsubrogados_vg" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                          </div>

                          <div class="col-3">
                              <label>Sin Actividad: </label> <div class="form-check form-check-inline">
                                  <label class="form-check-label">
                                     <input name="servsubrogados_fumigacion" class="form-check-input" type="radio" id="inlineradio1" value="SI"> SI
                                     <span class="form-check-sign">

                                     </span>
                                   </label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                     <input name="servsubrogados_fumigacion" class="form-check-input" type="radio" id="inlineradio2" value="NO"> NO
                                     <span class="form-check-sign">

                                     </span>
                                   </label>
                                 </div>
                          </div>
                      </div>
                      {{-- Termina la primer Seccion --}}

                      </div>
                      {{-- Inicia la segunda seccion --}}

                      <br><br>



                        {{-- Inicia la segunda seccion --}}
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card">

                                        <div class="card text-white bg-info" style="max-heigth: 18rem;">
                                           <center> <h4 class="card-tittle">NECESIDADES DE RECURSOS HUMANOS <i class="fas fa-people-carry"></i>
                                                </h4></center>
                                        </div>


                                </div>

                            </div>

                        </div>
                        <br><br>

                        {{-- Termina la segunda seccion --}}
                        {{-- Inicia la Tercera seccion --}}
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card">

                                        <div class="card text-white bg-warning" style="max-heigth: 18rem;">
                                          <center>  <h4 class="card-tittle">NECESIDADES DE MANTENIMIENTO Y CONSERVACIÓN AL INMUEBLE  <i class="fas fa-screwdriver"></i>
                                                </h4></center>
                                        </div>
                                        <table class="table-responsive">
                                          <thead>
                                            <tr>
                                              <th scope="col">REQUERIMIENTO</th>
                                              <th scope="col">FACHADA</th>
                                              <th scope="col">SALA DE ESPERA</th>
                                              <th scope="col">SANITARIOS</th>
                                              <th scope="col">CONSULTORIOS</th>
                                              <th scope="col">MEDICINA PREVENTIVA</th>
                                              <th scope="col">FARMACIA</th>
                                              <th scope="col">ESTERILIZACION</th>
                                              <th scope="col">OTRAS ÁREAS</th>


                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">RÓTULO DE IDENTIFICACIÓN DE LA UNIDAD</th>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>

                                            </tr>
                                            <tr>
                                              <th scope="row">COLOCACIÓN DE BARRAS DE SEGURIDAD EN RAMPA DE ACCESO Y/O REHABILITACION</th>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">COLOCACIÓN O REHABILITACION DE PISO CERÁMICO</th>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>

                                            </tr>
                                            <tr>
                                              <th scope="row">PINTURA VINILICA   EXTERIORES</th>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>


                                            </tr>
                                            <tr>
                                              <th scope="row">PINTURA VINILICA  INTERIORES</th>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">RESANE DE GRIETAS Y CUARTEADURAS EN PAREDES</th>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">FILTRACIONES Y HUMEDAD EN PAREDES</th>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">COLOCACIÓN DE ZOCLOS</th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REHABILITACIÓN DE PLAFONES </th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REHABILITACIÓN DE SANITARIOS</th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REHABILITACIÓN DE RED HIDROSANITARIA</th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">ADECUACION  DE SANITARIOS PARA DISCAPACITADOS (REHABILITACIÓN)</th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REHABILITACIÓN DE RED ELECTRICA (INCLUYE CONTACTOS)</th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REHABILITACIÓN DE LUMINARIAS</th>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input    class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REHABILITACIÓN DE PUERTAS (CHAPAS)</th>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input    class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REHABILITACIÓN DE VENTANAS </th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input    class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">COLOCACIÓN DE LAVABOS</th>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REHABILITACIÓN DE TARJAS</th>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">IMPERMEABILIZACIÓN</th>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input    class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REHABILITACIÓN BARDA PERIMETRAL</th>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REHABILITACIÓN DEL EQUIPO HIDRONEUMÁTICO Y BOMBAS </th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REHABILITACIÓN DE CISTERNA</th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">ALMACEN TEMPORAL RPBI</th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">NICHO PARA COMPRESOR DENTAL</th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">MANTENIMIENTO UNIDADES MANEJADORAS DE AIRE</th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">SEÑALIZACIÓN DE PROTECCIÓN CIVIL</th>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input    class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">SEÑALIZACIÓN DE RPBI</th>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input    class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">SEÑALIZACION DE ÁREAS</th>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">REQUIEREN EXTINTORES</th>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">RECARGA EXTINTORES </th>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">ALMACEN TEMPORAL DE RPBI</th>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">RAMPA DE ACCESO PARA PERSONAS CON  DISCAPACIDAD</th>
                                              <td><input class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input disabled  class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">SANITARIOS INDEPENDIENTES (HOMBRES / MUJERES)</th>
                                              <td><input disabled class="form-control" type="text"></td>
                                              <td><input  disabled  class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input  disabled class="form-control" type="text"></td>
                                              <td><input   class="form-control" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">COMENTARIOS</th>
                                              <td>
                                                <textarea class="form-control"></textarea>

                                              </td>


                                            </tr>

                                          </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
<br>
<br>

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
                                        <table class="table-responsive">
                                            <thead>
                                              <tr>
                                                <th scope="col">REQUERIMIENTO</th>
                                                <th scope="col">SALA DE ESPERA</th>
                                                <th scope="col">CONSULTORIOS</th>
                                                <th scope="col">MEDICINA PREVENTIVA</th>
                                                <th scope="col">ÁREA ESTERILIZACIÓN</th>
                                                <th scope="col">ESTOMATOLOGIA</th>
                                                <th scope="col">PSICOLOGIA</th>
                                                <th scope="col">ARCHIVO</th>
                                                <th scope="col">FARMACIA</th>
                                                <th scope="col">OTRAS ÁREAS</th>
                                                <th scope="col">TOTAL</th>

                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">BASCULA CON ESTADIMETRO</th>
                                                <td><input  disabled  class="form-control" type="text"></td>
                                                <td><input class="monto" type="text" id="txt_campo_1" onkeyup="sumar();"></td>
                                                <td><input class="monto" type="text" id="txt_campo_3" onkeyup="sumar();"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input class="monto" type="text" id="txt_campo_3" onkeyup="sumar();"></td>
                                                <td><span class="form-control" type="text"  id="spTotal"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">BASCULA PESA BEBÉ</th>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">BIOMBO</th>
                                                <td><input  disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">CINTA METRICUA MENTAL</th>
                                                <td><input  disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">ESFIGMOMANOMETRO</th>
                                                <td><input  disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>

                                              <tr>
                                                <th scope="row">ESTERILIZADOR</th>
                                                <td><input  disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">ESTETOSCOPIO DE CÁPSULA DOBLE</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">ESTUCHE DE DIAGNOSTICO BASICO</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">FONODETECTOR/PINARD</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">GLUCOMETRO</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>

                                              <tr>
                                                <th scope="row">LAMPARA DE HAZ DIRIGIBLE</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">NEGATOSCOPIO</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>


                                              </tr>

                                              <tr>
                                                <th scope="row">REFRIGERADOR PARA BIOLOGICO</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">TERMOMETRO DIGITALES</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">MANTENIMIENTO A LA UNIDAD DENTAL</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ANAQUEL/GUARDA PARA MEDICAMENTOS</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ASIENTO PARA PERSONAL DE SALUD</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ASIENTO PARA PACIENTO Y ACOMPAÑANTE</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">BANCA TANDEM</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">BANQUETA DE ALTURA</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">BANCO GIRATORIO</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">BOTES DE PEDAL</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">BOTES DE CAMPANA</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">CUBETA/CESTO PARA BASURA</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ESCRITORIO</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">INFANTOMETRO</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">MANDIL PLOMADO</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">MESA DE EXPLORACION UNIVERSAL</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">MESA MAYO PASTEUR</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">CARROCURACIONES</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">MESA PEDÍATRICA</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">MESA CON TARJA</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">MESA DE TRABAJO PARA ÁREA DE ESTERILIZACION</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">VITRINA CLINICA</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">CARROCURACIONES</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">MESA PEDIATRICA</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ESPEJOS VAGINALES CHICOS</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ESPEJOS VAGINALES GRANDES</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ESPEJOS VAGINALES MEDIANOS</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">HISTEROMETRO</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">MANGO PARA BISTURI</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">MARTILLO PERCUTOR</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA CRILLE</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA DE DISECCION SIN DIENTES</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA DE DISECCION CON DIENTES</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA CURVA</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA DE ANILLOS</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA DE KHOCHER</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA DE TRASLADO</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA PARA SUJETAR CUELLO DE MATRIZ</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA TIPO MOZQUITO</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PORTA AGUJAS</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">RIÑON 250ML</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">SET DE CURACIONES</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">TORUNDERO CON TAPA</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">TIJERAS RECTAS</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">TIJERAS CURVAS</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ALVEOLOTOMO</th>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>

                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input disabled  class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">CONTRANGULO</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">AMALGADOR O MORTERO</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ARCO DE YOUNG PARA DIQUE DE HULE</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">DOSIFICADOR AMALGAMADOR</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">CUCHARILLA PARA CIRUGIA</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">CURETA MC DERECHA E IZQ</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ELEVADOR CON MANGOS METALICOS</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ELEVADOR DE BANDERA</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ESPATULA DOBLE EXTREMO</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ESPATULA ESTIQUES</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">ESTUCHE DE DIAGNOSTICO DENTAL</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">GRAPAS PARA DIQUES DE HULE</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">JERINGA CARPULLE</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA DE MANO DE BAJA VELOCIDAD</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA DE MANO DE ALTA VELOCIDAD</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA PERFORADORA AINSWORTH</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PINZA PORTAGRAPAS</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">PORTAVASOS PARA ESCUPIDERA</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">RECORTADOR DE AMALGAMA</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">TIJERAS PARA ENCIAS CURVAS</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">TIRAPUENTES MILLER</th>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input disabled class="form-control" type="text"></td>
                                                <td><input  disabled class="form-control" type="text"></td>
                                                <td><input  class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">COMENTARIOS</th>
                                                <td>
                                                  <textarea class="form-control"></textarea>

                                                </td>


                                              </tr>
                                            </tbody>
                                        </table>


                                </div>
                                </div>




                        </div>
                        {{-- Espacio donde termina los divs --}}
                            </div>

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
