@extends('layouts.app')

@section('content')

<div class="content">
    <form action="#" method="POST">
        {{ csrf_field() }}

        <div class="container-fluid">
        <div class="row">


                <div class="card">
                        <div class="card text-white bg-warning" style="max-heigth: 18rem;">
                            <center>
                              <h4 class="card-tittle">Calidad Percibida</h4>
                            </center>
                        </div>


                        {{-- Inicia la primer Seccion --}}
                    <div class="card-body">
                        <center><h4>Aval Ciudadano</h4></center>
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">Seguimineto a la instalacion del Programa</th>
                                <th scope="col">SI</th>
                                <th scope="col">NO</th>
                                <th scope="col">OBSERVACIONES</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Acta se encuentra actualizada, en formato oficial y número de registro asignado por el Sistema de Registro del Aval Ciudadano). MC/0038/2021.</th>
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
                                <th scope="row">Original del Acta de Instalación del Aval Ciudadano y credencial de identificación de aval para presentarse al aplicar las encuestas. </th>
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
                                <th scope="row">Cuantas personas conforman al Aval Ciudadano.</th>
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
                                <th scope="row">El acta cuenta con firma de Aval Ciudadano, Autoridad de Federal, Estatal y del Establecimiento de Salud.</th>
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
                                <th scope="row">El AC que realiza el Monitoreo Ciudadano es el mismo que se encuentra registrado en el acta de instalación.</th>
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
                                <th scope="row">Programa de capacitación al aval ciudadano actualizado, carta descriptiva, lista de asistencia y evaluaciones en formatos oficiales por evento realizado y en apego a al cronograma de capacitación.</th>
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
                                <th scope="row">mensaje***</th>
                                <td></td>
                                <td></td>
                                <td></td>

                              </tr>
                              <tr>
                                <th scope="row">La unidad cuenta con la muestra de las ESTAD indicada: 140 encuestas por cuatrimestre para unidades urbanas y 36 encuestas para unidades rurales. </th>
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
                                <th scope="row">En la sección III del formato de monitoreo, el AC describe las tres principales áreas de oportunidad derivadas de los Resultados de la Aplicación de la ESTAD.</th>
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
                                <th scope="row">En la sección IV del formato de monitoreo, el AC describe las sugerencias de mejora tomando en cuenta lo registrado en los apartados I a III, así como el dominio establecido en las sección VI del mismo formato.

                                </th>
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
                                <th scope="row">Second Message****</th>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">Cuenta con las evidencias que dan seguimiento al acuerdo establecido en la Carta Compromiso de los cuatrimestres anteriores y corresponden a lo descrito por el AC en la sección V del formato de monitoreo. </th>
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
                                <th scope="row">Fecha (s) de la (s) carta (s) compromiso revisada (s):</th>
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
                                <th scope="row">Porcentaje de cumplimiento de los compromisos:</th>
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
                                <th scope="row">El Responsable de la unidad describe en la Carta Compromiso, el Área o tema con oportunidad de mejora que el Aval Ciudadano estableció en la sección IV del Formato de Monitoreo Ciudadano.</th>
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
                                <th scope="row">Los compromisos de mejora que describe el Responsable de la unidad en la Carta Compromiso, son acciones concretas, responden al que se va a hacer, cómo se hará, se establece la fecha de inicio/término y registra a los responsables de coordinar el cumplimiento del compromiso.</th>
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
                                <th scope="row">En la sección VI del formato de monitoreo se describen los compromisos derivados de las sugerencias del aval de acuerdo a cada dominio.</th>
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
                                <th scope="row">Evidencias de la difusión de los resultados del monitoreo: Cartel del Aval Ciudadano, copia del formato de monitoreo, carta compromiso y reporte comparativo a la vista de personal de la unidad y de la población. </th>
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
                                <th scope="row">La unidad está avalada en transparencia de la información (la diferencia de percepción entre el valor que emiten la autoridad la unidad de salud y el valor del obtenido por el aval  en cada indicador debe ser  de 0  al 19%). </th>
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
                                <th scope="row">a nother message****</th>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">Pen Message*****</th>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">Finish Message****</th>
                                <td></td>
                                <td></td>
                                <td></td>

                              </tr>

                            </tbody>

                            <tbody>
                                <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">Implementacion del Sistema</th>
                                      <th scope="col">SI</th>
                                      <th scope="col">NO</th>
                                      <th scope="col">OBSERVACIONES</th>
                                    </tr>
                                  </thead>

                                  <tr>
                                    <th scope="row"> Lineamientos SUG. Actualizados 2018-2019, en electrónico o impresos. </th>
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
                                    <th scope="row">Buzón: instalado en el área de mayor afluencia de pacientes, con imagen institucional, aviso de privacidad corto, derecho de los pacientes, insumos: FURSA (Formato Único de Solicitud de Atención) y pluma.</th>
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
                                    <th scope="row"> Calendario de Apertura del buzón: Anual, aperturas del buzón en menos de 15 días naturales, con nombre completo y firma de los participantes en el proceso de  apertura así como de los  suplentes, rubricas de los asistentes a la sesión del COCASEP donde se presentó el calendario.</th>
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
                                    <th scope="row">Minutas de Apertura: En apego a las fechas establecidas en el calendario de apertura, con folio emitido por la plataforma y/o folio interno, firma de los presentes en el proceso de apertura de Buzón del SUG.</th>
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
                                    <th scope="row">Bitácora  de seguimiento: Correctamente requisitada, con folio emitido por la plataforma y/o folio interno.</th>
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
                                    <th scope="row">Evidencia de que el personal involucrado en las Solicitudes de Atención es informado al respecto: oficios, tarjetas informativas, correo electrónico, etc.   </th>
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
                                    <th scope="row">Evidencias del uso de la herramienta en línea para el  seguimiento, resolución y notificación al usuario. "Formato Solicitudes de Atención  emitido por la plataforma y reporte ejecutivo.</th>
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
                                    <th scope="row">Evidencia de notificación personal de solicitudes de atención a los usuarios. FURSA ( Formato Único de Respuesta a la Solicitud de  Atención: Dirigido al paciente, familiar o acompañante, con folio emitido por la plataforma y/o folio interno correspondiente al FUSA, fecha de notificación, firma del presidente del COCASEP la resolución debe corresponder a lo planteado por el peticionario, con firma de conformidad del usuario.</th>
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
                                    <th scope="row">Registro histórico de tableros: Evidencia fotográfica de la publicación mensual en tablero SUG de los folios emitidos por la plataforma y/o folio interno de la notificación al usuario. El tablero SUG debe estar colocado al lado del buzón </th>
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
                                    <th scope="row">Los documentos evidencia de la implementación del sistema se encuentran correctamente llenados, completos y en orden cronológico en la carpeta de registro del SUG. </th>
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

                            </tbody>

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
