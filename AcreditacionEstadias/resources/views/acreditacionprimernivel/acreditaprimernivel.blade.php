@extends('layouts.app')
@section('content')

<div class="content">
    <form action="{{ route('guardarprimernivel') }}" method="POST">
        {{ csrf_field() }}

        <div class="container-fluid">
        <div class="row">


                <div class="card">

                        <div class="card-header card-header-danger">
                            <h4 class="card-tittle">Acreditacion de Primer Nivel  <i class="fas fa-hospital-alt"></i>
                                </h4>
                            <input  class="form-control" name="id_primernivel" id="id_primernivel" placeholder="id_primernivel">
                            @if ($errors->first('id_primernivel'))
                            <p class="text-warning">{{ $errors->first('id_primernivel') }}</p>
                            @endif
                          <center><label >Fecha de Visita: </label>  <input type="date" name="fecha_primernivel"></center>
                        </div>

                        {{-- Inicia la primer Seccion --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <input type="text" name="nom_unidad" id="nom_unidad" placeholder="Nombre de la Unidad" class="form-control">
                            </div>
                            <div class="col-4">
                                <select name="municipio_primer" id="municipio_primer" class="form-control">
                                    <option selected>..Selecciona un municipio...</option>
                                    <option value="toluca">Toluca</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <input name="jurisdiccion_primer" id="jurisdiccion_primer" type="text" placeholder="Jurisdiccion" class="form-control">
                            </div>
                        </div>

                        {{-- Tipología --}}

                        <br>
                        <div class="card-header card-header-danger">
                            <h4 class="card-tittle">Tipología  <i class="fas fa-procedures"></i></h4>
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
                            <div class="col-4">
                               <label>Otra:</label><textarea name="otra_tipologia" id="" cols="30" rows="3" class="form-control" placeholder="Introduzca alguna que halla faltado ingresar"></textarea>
                            </div>
                        </div>

                        {{-- Estructura CLUES --}}

                        <br>
                        <div class="card-header card-header-danger">
                            <h4 class="card-tittle">Estructura CLUES  <i class="fas fa-heart"></i></h4>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estructura_clues" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="basica"> Básica
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estructura_clues" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="ampliada"> Ampliada
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                               <label>Estomatología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estomatologia_estruclues" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estomatologia_estruclues" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Psicología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="psicologia_estruclues" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="psicologia_estruclues" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Trabajo Social: </label> <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                      <input name="tbsocial_estruclues" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="tbsocial_estruclues" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>

                            <div class="col-3">
                                <label>Laboratorio: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="laboratorio_estruclues" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="laboratorio_estruclues" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                            </div>

                            <div class="col-3">
                                <label>RX: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="rx_estruclues" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="rx_estruclues" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                       <span class="form-check-sign">
                                           <span class="check"></span>
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
                        <div class="card-header card-header-danger">
                            <h4 class="card-tittle">Estructura Real <i class="fas fa-stethoscope"></i></h4>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estructura_real" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Basica"> Básica
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estructura_real" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Ampliada"> Ampliada
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                               <label>Estomatología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estomatologia_estrucreal" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estomatologia_estrucreal" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Psicología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="psicologia_estrucreal" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="psicologia_estrucreal" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Trabajo Social: </label> <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                      <input name="tb_estrucreal" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="tb_estrucreal" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>

                            <div class="col-3">
                                <label>Laboratorio: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="lb_estrucreal" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="lb_estrucreal" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                            </div>

                            <div class="col-3">
                                <label>RX: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="rx_estrucreal" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="rx_estrucreal" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                       <span class="form-check-sign">
                                           <span class="check"></span>
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

                        <div class="card-header card-header-danger">
                            <h4 class="card-tittle">Estrato  <i class="fas fa-ambulance"></i></h4>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <label>Urbano:</label> <div class="form-check form-check-inline">
                                    <label name="estrato_urbano" class="form-check-label">
                                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estrato_urbano" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> No
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-4">
                               <label>Rural: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estrato_rural" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="estrato_rural" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
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
                        <div class="card-header card-header-danger">
                            <h4 class="card-tittle">Aviso de Funcionamiento <i class="fas fa-laptop-medical"></i></h4>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <label>Med Gral: </label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_medgral" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI">SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_medgral" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO">NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                               <label>Estomatología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_estomatologia" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_estomatologia" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Psicología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_psicologia" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_psicologia" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label> Laboratorio: </label> <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                      <input name="avfunc_lb" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="avfunc_lb" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>

                            <div class="col-3">
                                <label>Farmacia: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="avfunc_farmacia" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="avfunc_farmacia" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                            </div>

                            <div class="col-3">
                                <label>RX: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="avfunc_rx" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="avfunc_rx" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                       <span class="form-check-sign">
                                           <span class="check"></span>
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
                        <div class="card-header card-header-danger">
                            <h4 class="card-tittle">Responsable Sanitario Actualizado  <i class="fas fa-user-md"></i></h4>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <label>Med Gral: </label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_medgral" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI">SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_medgral" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO">NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                               <label>Estomatología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_estomatologia" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_estomatologia" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label>Psicología: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_psicologia" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_psicologia" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-3">
                                <label> Laboratorio: </label> <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                      <input name="respsanact_lb" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="respsanact_lb" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>

                            <div class="col-3">
                                <label>Farmacia: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="respsanact_farmacia" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="respsanact_farmacia" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                            </div>

                            <div class="col-3">
                                <label>RX: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="respsanact_rx" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="respsanact_rx" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                       <span class="form-check-sign">
                                           <span class="check"></span>
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
                        <div class="card-header card-header-danger">
                            <h4 class="card-tittle">Servicio subrogados(Incluidos en el contrato) <i class="fas fa-concierge-bell"></i></h4>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <label>RPBI: </label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_rpbi" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI">SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_rpbi" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO">NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-9">
                               <label>Permiso SEMARNAT generador RPBI: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_permsemarnat" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_permsemarnat" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-4">
                                <label>Farmacia: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_farmacia" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_farmacia" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>
                            <div class="col-4">
                                <label> Vigilancia: </label> <div class="form-check form-check-inline">
                                   <label class="form-check-label">
                                      <input name="servsubrogados_vg" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                      <input name="servsubrogados_vg" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                            </div>

                            <div class="col-4">
                                <label>Fumigación: </label> <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                       <input name="servsubrogados_fumigacion" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="SI"> SI
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <label class="form-check-label">
                                       <input name="servsubrogados_fumigacion" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"> NO
                                       <span class="form-check-sign">
                                           <span class="check"></span>
                                       </span>
                                     </label>
                                   </div>
                            </div>
                        </div>
                        {{-- Termina la primer Seccion --}}

                        </div>
                        {{-- Inicia la segunda seccion --}}
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card">

                                        <div class="card-header card-header-success">
                                            <h4 class="card-tittle">NECESIDADES DE RECURSOS HUMANOS <i class="fas fa-people-carry"></i>
                                                </h4>
                                        </div>
                                </div>



                        {{-- Termina la segunda seccion --}}
                        {{-- Inicia la Tercera seccion --}}
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card">

                                        <div class="card-header card-header-warning">
                                            <h4 class="card-tittle">NECESIDADES DE MANTENIMIENTO Y CONSERVACION AL INMUEBLE  <i class="fas fa-screwdriver"></i>
                                                </h4>

                                        </div>

                                </div>
                            </div>
                        </div>


                        {{-- Termina la Tercera seccion --}}



                        <div class="row">
                            <div class="col-md-12">

                                <div class="card">

                                        <div class="card-header card-header-info">
                                            <h4 class="card-tittle">NECESIDADES DE EQUIPO, INMUBILIARIO E INSTRUMENTAL  <i class="fas fa-tools"></i>
                                                </h4>
                                        </div>

                                        <table class="table table-responsive">
                                            <thead>
                                              <tr>
                                                <th scope="col">REQUERTIMIENTO</th>
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
                                                <th scope="row">Bascula con estadimetro</th>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

                                              </tr>
                                              <tr>
                                                <th scope="row">BASCULA PESA BEBE</th>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">BIOMBO</th>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">CINTA METRICUA MENTAL</th>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">ESFIGMOMANOMETRO</th>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Bascula con estadimetro</th>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Bascula con estadimetro</th>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Bascula con estadimetro</th>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Bascula con estadimetro</th>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Bascula con estadimetro</th>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Bascula con estadimetro</th>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>
                                                <td><input class="form-control" type="text"></td>

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

                <center><button type="submit" class="btn btn-primary btn-round">
                    <i class="far fa-save"></i> Guardar
                  </button></center>

                </div>


        </div>
    </form>
    </div>
@endsection
