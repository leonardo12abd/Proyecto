<th>{{ $data20->fecha_primernivel }}</th>
<br>

<h5>NECESIDADES DE MANTENIMIENTO</h5>
<table >
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
        <td>{{isset($data20->data20['key0_'.$key]) ? $data20->data20['key0_'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key1_'.$key]) ? $data20->data20['key1_'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key2_'.$key]) ? $data20->data20['key2_'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key3_'.$key]) ? $data20->data20['key3_'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key4_'.$key]) ? $data20->data20['key4_'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key5_'.$key]) ? $data20->data20['key5_'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key6_'.$key]) ? $data20->data20['key6_'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key7_'.$key]) ? $data20->data20['key7_'.$key] : ''}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>


<h5 style="background-color: #37fc00">NECESIDADES DE EQUIPO, INMOBILIARIO E INSTRUMENTAL</h5>
<br>
  <table>
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


      </tr>
    </thead>
    <tbody>
      @foreach ( $emis as $key => $emi )
      <tr>
        <th scope="row">{{ $emi ->nombre_emi}} </th>
        <td>{{isset($data20->data20['key_11'.$key]) ? $data20->data20['key_11'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key_12'.$key]) ? $data20->data20['key_12'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key_13'.$key]) ? $data20->data20['key_13'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key_14'.$key]) ? $data20->data20['key_14'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key_15'.$key]) ? $data20->data20['key_15'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key_16'.$key]) ? $data20->data20['key_16'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key_17'.$key]) ? $data20->data20['key_17'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key_18'.$key]) ? $data20->data20['key_18'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key_19'.$key]) ? $data20->data20['key_19'.$key] : ''}}</td>
        <td>{{isset($data20->data20['key_20'.$key]) ? $data20->data20['key_20'.$key] : ''}}</td>
      </tr>
      @endforeach
    </tbody>

</table>
