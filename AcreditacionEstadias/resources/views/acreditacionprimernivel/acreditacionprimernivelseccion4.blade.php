@extends('layouts.app')

@section('content')

<div class="content">
    <form action="#" method="POST">
        {{ csrf_field() }}

        <div class="container-fluid">
        <div class="row">


                <div class="card">
                        <div class="card text-white bg-success mb-3" style="max-heigth: 18rem;">
                            <center>
                              <h4 class="card-tittle">LINEA CPCASEP/MEJORA CONTINUA</h4>
                            </center>
                        </div>


                        {{-- Inicia la primer Seccion --}}
                    <div class="card-body">
                        <center><h4 style="background-color: rgb(125, 206, 160);">Linea COCASEP</h4></center>
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col" style="background-color: rgb(169, 223, 191);">Acta de Instalación del Comité de Calidad y Seguridad del Paciente (COCASEP)</th>
                                <th scope="col" style="background-color: rgb(169, 223, 191);">SI</th>
                                <th scope="col" style="background-color: rgb(169, 223, 191);">NO</th>
                                <th scope="col" style="background-color: rgb(169, 223, 191);">OBSERVACIONES</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">El establecimiento cuenta con Acta de COCASEP (original si es COCASEP local, copia si es COCASEP Jurisdiccional o de Coordinación) en formato federal.</th>
                                <td>
                                    <input type="radio" name="nombre1" value="Si">
                                </td>
                                <td>
                                    <input type="radio" name="nombre1" value="No">
                                </td>
                                <td>
                                    <textarea class="form-control" rows="1" cols="10" ></textarea>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">Los nombres de presidente y secretario técnico del Comité están actualizados.</th>
                                <td>
                                    <input type="radio" name="nombre2">
                                </td>
                                <td>
                                    <input type="radio" name="nombre2">
                                </td>
                                <td>
                                    <textarea class="form-control" rows="1" cols="10" ></textarea>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">En caso de COCASEP Jurisdiccional o de Coordinación Municipal, el responsable del establecimiento aparece como Vocal en el Acta (con nombre completo firma y establecimiento de adscripción).</th>
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
                                <th scope="row">En el Acta no aparecen figuras externas al (los) establecimiento (s).
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

                              <tbody>
                                <th scope="row" colspan="4" style="background-color: rgb(169, 223, 191);">Calendario de Sesiones Ordinarias del Comité de Calidad y Seguridad del Paciente (COCASEP)</th>

                              </tbody>


                              <tr>
                                <th scope="row">El establecimiento cuenta con Calendario de sesiones en formato federal con registro de Programado y Realizado (original si es COCASEP local, copia si es COCASEP Jurisdiccional o de Coordinación).</th>
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
                                <th scope="row">El calendario tiene programadas por lo menos 3 sesiones ordinarias al año</th>
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
                                <th scope="row">El calendario está firmado por el presidente y el secretario técnico del COCASEP
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


                            </tbody>

                            <tbody>
                                <thead class="thead-dark">
                                    <tr>
                                      <th scope="col" colspan="4" style="background-color: rgb(169, 223, 191);">Minutas de Sesiones del Comité de Calidad y Seguridad del Paciente (COCASEP)</th>
                                    </tr>
                                  </thead>

                                  <tr>
                                    <th scope="row"> El establecimiento cuenta con Minutas de las sesiones de COCASEP (original si es COCASEP local, copia si es COCASEP Jurisdiccional o de Coordinación) en formato federal y por lo menos 3 al año.
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
                                    <th scope="row">Las fechas de las Minutas coinciden con las fechas programadas en el calendario.
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
                                    <th scope="row">En caso de que las fechas de las Minutas no coincidan con lo programado, cuentan con documento de justificación de cambio de fecha.
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
                                    <th scope="row">Las Minutas se encuentran identificadas correctamente (nombre del COCASEP, número y tipo de sesión)
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
                                    <th scope="row">En las Minutas se encuentra evidencia de la generación de algún acuerdo relacionado con la gestión para la adquisición de insumos para las Acciones Esenciales por la Seguridad del Paciente.
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
                                    <th scope="row">En las Minutas se encuentra evidencia de la generación de algún acuerdo relacionado con la capacitación, implementación, registro y evaluación de Acciones Esenciales por la Seguridad del Paciente</th>
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
                                    <th scope="row">En las Minutas se encuentra evidencia de la generación de alguna acción para mejorar los tiempos de espera y satisfacción del usuario.
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
                                    <th scope="row">En las Minutas se encuentra evidencia del seguimiento a los resultados de evaluación de MECIC
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
                                    <th scope="row">En las Minutas se encuentra participación del Aval Ciudadano como INVITADO en por lo menos una sesión al año
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
                                    <th scope="row">En la Minuta de la última sesión del año se consideró dentro del orden del día la presentación del cronograma de aperturas de buzón del siguiente año.
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
                                    <th scope="row">Los acuerdos generados en las sesiones tienen impacto directo sobre la seguridad del paciente
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
                                    <th scope="row">Los acuerdos generados en la sesiones están redactados a futuro, tienen un responsable designado así como fechas de inicio y cierre bien definidos
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
                                    <th scope="row">En caso de ser un COCASEP Jurisdiccional o de Coordinación, las Minutas cuentan con nombre completo, adscripción y firma del vocal del establecimiento en revisión.
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
                                    <th scope="row">Las Minutas que muestra el establecimiento cuentan con evidencia de asistencia por lo menos del 50% más uno de los integrantes registrados en el Acta de Instalación / Actualización
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

                                  <tbody>
                                    <th scope="row" colspan="4" style="background-color: rgb(169, 223, 191);">Formato de Seguimiento-Difusión de Acuerdos</th>

                                  </tbody>
                                  <tr>
                                    <th scope="row">El establecimiento cuenta con un Formato de Seguimiento-Difusión de Acuerdos por cada Minuta generada (original si es COCASEP local, copia si es COCASEP Jurisdiccional o de Coordinación) en formato federal

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
                                    <th scope="row">Los registros de este formato coinciden con los registros de la Minuta en el apartado de "Acuerdos de la Sesión Anterior"
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
                                    <th scope="row">En los registros de este formato se evidencía que se le da seguimiento a todos los acuerdos que se generan.
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
                                    <th scope="row">El formato contiene registros en todos los rubros sin omitir información de ningún apartado
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

                                  <tbody>
                                    <th scope="row" colspan="4" style="background-color: rgb(169, 223, 191);">Memoria Anual de COCASEP</th>

                                  </tbody>
                                  <tr>
                                    <th scope="row">El establecimiento cuenta con la Memoria Anual de COCASEP del año inmediato anterior al actual (original si es COCASEP local, copia si es COCASEP Jurisdiccional o de Coordinación)

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
                                    <th scope="row">La Memoria Anual cuenta con validación del Presidente y Secretario Técnico del COCASEP

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
                                    <th scope="row">La Memoria Anual contiene los criterios mínimos requeridos por la DGCES para su integración

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

                                  <tbody>
                                    <th scope="row" colspan="4" style="background-color: rgb(169, 223, 191);">Programa de Mejora Continua de la Calidad</th>

                                  </tbody>

                                  <tr>
                                    <th scope="row">El establecimiento cuenta con Programa de Mejora Continua de la Calidad del año en curso (aquellos establecimientos integrados a PER deben mostrar también el PMCC de los 4 años previos al actual)

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
                                    <th scope="row">La portada del documento cuenta con nombre del establecimiento, CLUES y año de aplicación del PMCC

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
                                    <th scope="row">El PMCC del año en curso tiene incluido un proyecto de mejora relacionado al SUG

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
                                    <th scope="row">El PMCC del año en curso tiene incluido un proyecto de mejora relacionado a la implementación de Acciones Esenciales para la Seguridad del Paciente

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
                                    <th scope="row">El PMCC tiene integrados por lo menos 3 proyectos de mejora

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
                                    <th scope="row">La construcción de indicadores es correcta de acuerdo al objetivo de los proyectos contenidos en el documento

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
                                    <th scope="row">En la Fase III se encuentra registro de resultados trimestrales de cada uno de los indicadores construidos

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
                                    <th scope="row">El formato de PMCC tiene las rúbricas del responsable del establecimiento y del gestor de calidad así como sello de la unidad en todas sus páginas

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
                                    <th scope="row">El personal del establecimiento conoce los proyectos incluidos en el PMCC actual

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
                                    <th scope="row">Los Anexos del PMCC se encuentran completos y correctamente integrados

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
                                    <th scope="row">El establecimiento cuenta con Tableros de Control de Indicadores Anuales (uno por cada año) con firmas y sellos originales

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



                                  <tbody>
                                    <th scope="row" colspan="4" style="background-color: rgb(169, 223, 191);">Subcomité de Expediente Clínico</th>

                                  </tbody>
                                  <tr>
                                    <th scope="row">El establecimiento cuenta con Acta de Instalación del Subcomité de Expediente Clínico.

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
                                    <th scope="row">El Establecimiento cuenta con Minutas de Sesiones de este subcomité (por lo menos una cada mes).

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

