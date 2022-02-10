@extends('layouts.app')

@section('content')

<div class="content">
    <form action="#" method="POST">
        {{ csrf_field() }}

        <div class="container-fluid">
        <div class="row">


                <div class="card">
                        <div class="card text-white bg-info" style="max-heigth: 18rem;">
                            <center>
                              <h4 class="card-tittle">CALIDAD TECNICA Y SEGURIDAD DEL PACIENTE</h4>
                            </center>
                        </div>


                        {{-- Inicia la primer Seccion --}}
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">VERIFICAR QUE CUENTE CON:</th>
                                <th scope="col">SI</th>
                                <th scope="col">NO</th>
                                <th scope="col">OBSERVACIONES</th>
                              </tr>
                            </thead>
                            <tbody>
                                <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">Manuales</th>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                    </tr>
                                  </thead>
                              <tr>
                                <th scope="row">Manual de Procesos de Atención con inclusión de AESP, de todas las áreas, que incluya flujogramas y desarrollo de procesos.</th>
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
                                <th scope="row"> Manual de Limpieza, Desinfección y Esterilización que incluya todas las áreas, con flujogramas y desarrollo de procesos </th>
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
                                  <th scope="col">Expediente clinico</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </thead>

                          <tr>
                            <th scope="row">Orden.</th>
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
                            <th scope="row">Historia Clínica, evidencia de aplicación de AESP </th>
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
                            <th scope="row">Nota médica con evidencia de aplicación de AESP</th>
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
                            <th scope="row">Que no contenga tachaduras ni enmendaduras. </th>
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
                            <th scope="row">Que no utilice abreviaturas.</th>
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
                            <th scope="row">Coherencia entre Diagnóstico y Tratamiento</th>
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
                            <th scope="row">Formatos de Consentimiento Informado debidamente</th>
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
                            <th scope="row">Recomendaciones de las GPC ( de manera puntual). </th>
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
                            <th scope="row">Verificar expediente clínico de estimulación Temprana con el formato EDI y registro de capacitación.</th>
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
                            <th scope="row">Verificar expediente clínico de Tamiz Neonatal ( nota de la toma y de resultados). SUIVE.</th>
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
                                  <th scope="col">Referencia y Contrareferencia</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </thead>

                          <tr>
                            <th scope="row">Manual de Procedimientos Federal y Estatal (2011)</th>
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
                            <th scope="row">Directorio Actualizado, con cartera de servicios.</th>
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
                            <th scope="row">Bitácora de Seguimiento de Referencia y Contrarreferencia para Unidades Médicas  2019

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
                            <th scope="row">Evidencia del cumplimiento del 100% del seguimiento de la Referencia.</th>
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
                            <th scope="row">Evidencia del cumplimiento del 85% como mínimo del seguimiento de la Contrarreferencia.

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
                            <th scope="row">Evidencia del Registro de las llamadas telefónicas  para el seguimiento de la referencia

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
                            <th scope="row">El personal utiliza la técnica SAER durante la transferencia de pacientes (CEAPS) </th>
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

                            {{-- 4 --}}
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Mobiliario y Equipo</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </thead>
                          <tr>
                            <th scope="row">Bitácora de Funcionalidad y Limpieza de Mobiliario (Registro de actividades realizadas, Nombre cargo y firma de quien realiza y quien supervisa)</th>
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
                            <th scope="row">Bitácora de Funcionalidad y Limpieza de Equipo (Registro de actividades realizadas, Nombre cargo y firma de quien realiza y quien supervisa)</th>
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
                            <th scope="row">Bitacóra de aseo de la unidad</th>
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

                            {{-- 5 --}}
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Esta en tus manos</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </thead>
                          <tr>
                            <th scope="row">Evidencia de supervisión de la Acción 5</th>
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
                            <th scope="row">Plan de Mejora de Higiene de Manos </th>
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
                            <th scope="row">Evidencia documental de gestión de insumos y sistema de abasto de material para la higiene de manos  (jabón antiséptico líquido, gel alcoholado, toallas desechables)</th>
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
                            <th scope="row">Evidencia de la calidad de agua, bitácora de  registro de lavado de cisternas y tinacos (de manera semestral), cloración del agua, estudios bacteriológicos </th>
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
                            <th scope="row">Verificar la correcta técnica de higiene de manos (lavado y fricción) </th>
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
                            <th scope="row">Verificar en sanitarios de pacientes que existan los insumos para  la higiene de las manos.</th>
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
                            <th scope="row">Puntos de atención al paciente (gel alcohol y carteles)  </th>
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


                            {{-- 6 --}}

                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Esterilizacion, Limpieza y Desinfeccion</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </thead>
                          <tr>
                            <th scope="row">Bitácoras de limpieza, desinfección y esterilización con nombre, cargo y firma de quien realiza la actividad y quien la supervisa.</th>
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
                            <th scope="row">Verificación de frascos de soluciones con rotulación de fecha (jabón, isodine, alcohol, cambio diario), lidocaína con fecha de apertura no mayor a 7 días y caducidad.</th>
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
                            <th scope="row">Registro de esterilización de instrumental y material de curación, verificar empaque y rotulación (7 días de vigencia).</th>
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
                            <th scope="row">Bolsa papel grado y cinta testigo, verificar caducidad.</th>
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
                            <th scope="row">Bitácora de mantenimiento de la autocleve.</th>
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


                            {{-- 7 --}}

                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Manejo de Residuos Peligrosos Biologicos <br>
                                    Infecciosos RPBI</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </thead>
                          <tr>
                            <th scope="row">Verificar existencia de la NOM 087-ECOL-SSA1-2002.</th>
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
                            <th scope="row">Contrato de la empresa recolectora (o convenio con unidad receptora).</th>
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
                            <th scope="row">Manifiestos.</th>
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
                            <th scope="row">Calendario de recolección.</th>
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
                            <th scope="row">Ruta de recolección señalética completa</th>
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
                            <th scope="row">Almacén temporal (con rotulo, techado y contenedor rígido para almacenamiento) </th>
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
                            <th scope="row">Programa de Contingencia </th>
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
                            <th scope="row">Sistema de abasto de insumos.</th>
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

                          {{-- 8 --}}
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Medicina Preventiva</th>
                              <th></th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                      <tr>
                        <th scope="row">Refrigerador  10 a 18 pies cúbicos (una sola puerta) exclusivo para la conservación de biológico,</th>
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
                        <th scope="row">Actualización (al día) del registro de aplicación de movimiento del biológico.</th>
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
                        <th scope="row">Bitácora de mantenimiento preventivo y correctivo del refrigerador.</th>
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
                        <th scope="row">Programa de emergencia de la red de frio.</th>
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
                        <th scope="row">Graficas de control de temperatura.</th>
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
                        <th scope="row">Bitácora de reporte de eventos supuestamente asociados a la vacunación (ESAVI).</th>
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
                        <th scope="row">Censo Nominal.</th>
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
                        <th scope="row">Registro de calibración de termómetros.</th>
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
                        <th scope="row">Cartillas, sistema de abasto, verificar existencia de registros de entrega a los usuarios (sistema de abasto).</th>
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


                          {{-- 9 --}}

                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Curaciones</th>
                              <th></th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                      <tr>
                        <th scope="row">Equipo de curaciones (charola, pinza de traslado, porta aguja, pinza de disección sin dientes de 10,12 o 18 cm, pinza de kocher de 1x2 dientes de 13 cm, pinza hemostática curva de crille de 16 cm, tijera de mayo recta de 14.5 cm, verificar condiciones del instrumental (no contenga zonas de oxidación y sea funcional), esterilización no mayor a 7 días. </th>
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
                        <th scope="row">Equipamiento del carro de curaciones, lidocaína simple (fecha de apertura no mayor a 7 días), (Sutura catgut, seda, nylon) de dos ceros a tres ceros, jeringa de 1,3,5 y 10 ml con agujas, antisépticos locales, jabón, agua estéril, solución fisiológica, Iodopovidona del 0.5 al 10 %, membrete en los frascos y pescaderas fecha de llenado no mayor a 24 hrs, alcohol al 70%, gasas y apósitos estériles con fecha no mayor a 7 días</th>
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
                        <th scope="row">Sistema de abasto, hoja de atención diaria y nota en expediente clínico. </th>
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


                          {{-- 10 --}}

                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Hidratacion Oral</th>
                              <th></th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                      <tr>
                        <th scope="row">Verificar que el área se encuentre implementada (mesa), equipada (Jarra, taza y cuchara, no utensilios de metal).</th>
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
                        <th scope="row">Sobres de Suero Oral, verificar caducidad.</th>
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
                        <th scope="row">Agua Potable.</th>
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
                        <th scope="row">Registro de madres  capacitadas en EDAS e IRAS y los cuestionarios de evaluación de madres capacitadas.</th>
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
                      {{-- 10 --}}
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Estomatologia</th>
                          <th></th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                  <tr>
                    <th scope="row">Expediente Clínico,  verificar procedimientos documentados para la seguridad del paciente 1A, 1B, 2B, 4A Y 4B. Orden, Historia Clínica, evidencia de aplicación de AESP 1, 2, 3, 4, 5,  Nota médica con evidencia de aplicación de AESP, que no contenga tachaduras ni enmendaduras, que no utilice abreviaturas, coherencia entre diagnóstico y tratamiento  AESP 3.</th>
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
                    <th scope="row">Recomendaciones  de las GPC.</th>
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
                    <th scope="row">Verificar existencia y requisición de los formatos de consentimiento informado.</th>
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
                    <th scope="row">Marcaje del sitio anatómico, Tiempo fuera para procedimientos fuera de quirófano.</th>
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
