<!DOCTYPE html>
<html lang="en">
<head>
    <script src="{{ asset('js/nuestros/primernivel.js') }}" defer></script>
</head>
<body>



<br>
<h2>Acreditación Primer Nivel</h2>
<br>

<table>
    <thead>
        <tr>
            <th style="background: #BDE487">Fecha</th>
            <th style="background: #BDE487">Codigo clues</th>
            <th style="background: #BDE487">Nombre Clues</th>
            <th style="background: #BDE487">Nombre de la Unidad</th>
            <th style="background: #BDE487">Usuario Encargado de la captura</th>

        </tr>
    </thead>
    <tbody>
<tr>
        <th>{{ $data20->fecha_primernivel }}</th>
        <th>{{ $data20->id_clues }}</th>
        <th>{{$data20->clues->clues}}</th>
        <th>{{$data20->clues->nombreunidad}}</th>
        <th>{{ $data20->user->name }}</th>
    </tr>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th style="background: #dde4b7">Tipologia Observaciones</th>
            <th style="background: #dde4b7">Estructura Clues</th>
            <th style="background: #dde4b7">Estructura Real</th>
        </tr>
    </thead>
    <tbody>
        <tr>
                <th>{{ $data20->textarea_tipologia }}</th>
                <th>{{ $data20->tipo__estructura }}</th>
                <th>{{ $data20->estructura_real }}</th>
            </tr>
            </tbody>

</table>


<h6>ESTRUCTURA CLUES</h6>
<table>
    <thead>
        <tr>
            <th style="background: #8fa6bb">Estomatologia Clues</th>
            <th style="background: #8fa6bb">Psicologia Clues</th>
            <th style="background: #8fa6bb">Trabajo social Clues</th>
            <th style="background: #8fa6bb">Laboratorio Clues</th>
            <th style="background: #8fa6bb">Rayos X Clues</th>
            <th style="background: #8fa6bb">Otros Clues</th>
        </tr>
    </thead>
    <tbody>
        <tr>
                <th>{{ $data20->estomatologia_clues }}</th>
                <th>{{ $data20->psicologia_clues }}</th>
                <th>{{ $data20->trabajo_social_clues }}</th>
                <th>{{ $data20->laboratorio_clues }}</th>
                <th>{{ $data20->rx_clues }}</th>
                <th>{{ $data20->otro_clues }}</th>
            </tr>
        </tbody>

    </table>

<h6>ESTRUCTURA REAL</h6>
<table>
    <thead>
        <tr>
            <th style="background: #c077a4">Estomatologia Real</th>
            <th style="background: #c077a4">Psicologia Real</th>
            <th style="background: #c077a4">Trabajo social Real</th>
            <th style="background: #c077a4">Laboratorio Real</th>
            <th style="background: #c077a4">Rayos X Real</th>
            <th style="background: #c077a4">Otros Real</th>
        </tr>
    </thead>
    <tbody>
        <tr>
                <th>{{ $data20->estomatologia_real }}</th>
                <th>{{ $data20->psicologia_real }}</th>
                <th>{{ $data20->trabajo_social_real }}</th>
                <th>{{ $data20->laboratorio_real }}</th>
                <th>{{ $data20->rx_real }}</th>
                <th>{{ $data20->otro_real }}</th>
            </tr>
        </tbody>

</table>


{{-- Recursos Humanos --}}

<table>
    <thead>
      <tr>
          <th ></th>
          <th ></th>
        <th > SERVICIO SOCIAL </th>
        <th > PERSONAL ISEM </th>
        <th></th>
        <th> CAPACITACIONES </th>
        <th></th>
    </tr>
</thead>
    <thead>
        <tr>
            <th  > RH
                (requisitar en base a su oferta de servicios) </th>
                <th  > Descripción Puesto </th>
          <th  > Carta de Asignación Campo Clinico al establecimiento(personal en servicio social)  </th>
          <th  >Titulo</th>
          <th  >Cédula</th>
          <th  > Tipo de contratación (base, formalizado, regularizado, comisionado) </th>
          <th  > Documento de Adscripción </th>
          <th  > Estomatologo Cartilla vacunación </th>
          <th  > Prevención de icendios y atencion de emergencias </th>
          <th  > Interculturalidad </th>
          <th  > Cuidados Paliativos </th>
          <th  > Programa integral higiene de manos </th>
          <th  > Acciones Escenciales </th>
          <th  > Estomatologo RCP basico </th>
          <th  > Observaciones </th>
        </tr>
      </thead>

    <tbody>
      <tr>

        <td>{{$data20->data20['key_13_'.$index]}}</td>

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


{{-- FIN Recursos Humanos --}}

{{-- Tabla Prueba --}}

<table class="table">
    @foreach ($primernivel as $key=>$fanta )
    @if($key == 0 || $primernivel[$key-1]->clasificacion_primer != $fanta->clasificacion_primer)
    <thead class="thead-dark">
          <tr>
              <th   style="background-color: #ECFBA2">{{ $fanta->clasificacion_primer }}</th>
              <th   style="background-color: #ACFBA2">SI</th>
              <th   style="background-color: #FBB2A2">NO</th>
              <th   style="background-color: #D1F1E6">OBSERVACIONES</th>


            </tr>
        </thead>
      @endif

      <tbody>
          <tr>
              <th scope="row"> {{ $fanta->nombre_primer }}</th>
              <td>
                  @if($data20->data20['key_0'.$key] == 'SI') ✔ @endif
                </td>
                <td>
                    @if($data20->data20['key_0'.$key] == 'NO') ❌ @endif
                </td>
                <td>
                @if ($fanta->nombre_primer == 'Otros') {{$data20->data20['textarea_'.$key]}} @endif
            </td>
          </tr>
        </tbody>
  @endforeach
  </table>



  {{-- Fin --}}
<br>

<h3>NECESIDADES DE MANTENIMIENTO</h3>
<table >
    <thead>
        <tr>
            <th style="background: #B489D1">REQUERIMIENTO</th>
        <th style="background: #B489D1">FACHADA</th>
        <th style="background: #B489D1">SALA DE ESPERA</th>
        <th style="background: #B489D1">SANITARIOS</th>
        <th style="background: #B489D1">CONSULTORIOS</th>
        <th style="background: #B489D1">MEDICINA PREVENTIVA</th>
        <th style="background: #B489D1">FARMACIA</th>
        <th style="background: #B489D1">ESTERILIZACION</th>
        <th style="background: #B489D1">OTRAS ÁREAS</th>


      </tr>
    </thead>
    <tbody>
        @foreach ( $infras as $key => $infra )
        <tr>
        <th scope="row">{{ $infra ->nombre_infra}} </th>
        <td>{{isset($data20->data20['key0_'.$key]) ? $data20->data20['key0_'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key1_'.$key]) ? $data20->data20['key1_'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key2_'.$key]) ? $data20->data20['key2_'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key3_'.$key]) ? $data20->data20['key3_'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key4_'.$key]) ? $data20->data20['key4_'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key5_'.$key]) ? $data20->data20['key5_'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key6_'.$key]) ? $data20->data20['key6_'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key7_'.$key]) ? $data20->data20['key7_'.$key] : 'No aplica'}}</td>
    </tr>
    @endforeach
</tbody>
  </table>


  <h3>NECESIDADES DE EQUIPO, INMOBILIARIO E INSTRUMENTAL</h3>
  <br>
  <table>
      <thead>
      <tr>
        <th style="background: #89D1B2">REQUERIMIENTO</th>
        <th style="background: #89D1B2">SALA DE ESPERA</th>
        <th style="background: #89D1B2">CONSULTORIOS</th>
        <th style="background: #89D1B2">MEDICINA PREVENTIVA</th>
        <th style="background: #89D1B2">ÁREA ESTERILIZACIÓN</th>
        <th style="background: #89D1B2">ESTOMATOLOGIA</th>
        <th style="background: #89D1B2">PSICOLOGIA</th>
        <th style="background: #89D1B2">ARCHIVO</th>
        <th style="background: #89D1B2">FARMACIA</th>
        <th style="background: #89D1B2">OTRAS ÁREAS</th>


    </tr>
    </thead>
    <tbody>
      @foreach ( $emis as $key => $emi )
      <tr>
        <th scope="row">{{ $emi ->nombre_emi}} </th>
        <td>{{isset($data20->data20['key_11'.$key]) ? $data20->data20['key_11'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key_12'.$key]) ? $data20->data20['key_12'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key_13'.$key]) ? $data20->data20['key_13'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key_14'.$key]) ? $data20->data20['key_14'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key_15'.$key]) ? $data20->data20['key_15'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key_16'.$key]) ? $data20->data20['key_16'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key_17'.$key]) ? $data20->data20['key_17'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key_18'.$key]) ? $data20->data20['key_18'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key_19'.$key]) ? $data20->data20['key_19'.$key] : 'No aplica'}}</td>
        <td>{{isset($data20->data20['key_20'.$key]) ? $data20->data20['key_20'.$key] : 'No aplica'}}</td>
      </tr>
      @endforeach
    </tbody>

</table>

</body>
</html>
