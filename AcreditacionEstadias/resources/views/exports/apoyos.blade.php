<h3>Apoyos e Incentivos</h3>
<table>
    <thead>
        <tr>

            <th style="background: #BDE487">Codigo clues</th>
            <th style="background: #BDE487">Nombre Clues</th>
            <th style="background: #BDE487">Nombre de la Unidad</th>
            <th style="background: #BDE487">Usuario Encargado de la captura</th>

        </tr>
    </thead>
    <tbody>
<tr>

        <th>{{ $data4->id_clues }}</th>
        <th>{{$data4->clues->clues}}</th>
        <th>{{$data4->clues->nombreunidad}}</th>
        <th>{{ $data4->user->name }}</th>

    </tr>
    </tbody>
</table>


<table>
    <thead>
          <tr>
            <th  style="background-color: #AEB6BF">  CÉDULA DE MADUREZ MODELO DE GESTIÓN DE CALIDAD </th>
            <th  style="background-color: #AEB6BF"></th>
            <th  style="background-color: #AEB6BF">FEBRERO</th>
            <th  style="background-color: #AEB6BF"></th>
            <th  style="background-color: #AEB6BF"></th>
            <th  style="background-color: #AEB6BF">JUNIO</th>
            <th  style="background-color: #AEB6BF"></th>
            <th  style="background-color: #AEB6BF"></th>
            <th  style="background-color: #AEB6BF">SEPTIEMBRE</th>
            <th  style="background-color: #AEB6BF"></th>
            <th  style="background-color: #AEB6BF">OBSERVACIONES</th>
          </tr>
        </thead>
        <thead>
            <tr>
              <th  style="background-color: #D6DBDF"></th>
              <th  style="background-color: #D6DBDF"> PUNTAJE </th>
              <th  style="background-color: #D6DBDF"> CUMPLE </th>
              <th  style="background-color: #D6DBDF"> NO CUMPLE </th>
              <th  style="background-color: #D6DBDF"> PUNTAJE</th>
              <th  style="background-color: #D6DBDF"> CUMPLE</th>
              <th  style="background-color: #D6DBDF"> NO CUMPLE </th>
              <th  style="background-color: #D6DBDF"> PUNTAJE </th>
              <th  style="background-color: #D6DBDF"> CUMPLE </th>
              <th  style="background-color: #D6DBDF"> NO CUMPLE </th>
              <th  style="background-color: #D6DBDF"> OBSERVACIONES </th>
            </tr>
        </thead>
        <tbody>
            @foreach($apoyos as $key => $apo)
                <tr>
                    <th scope="row">{{$apo->nombre_apoyos}}</th>
                    <td>
                        {{$data4->data4['puntaje_0_'.$key] }}
                    </td>
                    <td>
                         @if($data4->data4['key_0_'.$key] == 'Si') ✔ @endif
                    </td>
                    <td>
                         @if($data4->data4['key_0_'.$key] == 'No') ❌ @endif
                    </td>
                    <td>
                        {{ $data4->data4['puntaje_1_'.$key] }}
                    </td>
                    <td>
                         @if($data4->data4['key_1_'.$key] == 'Si') ✔ @endif
                    </td>
                    <td>
                        @if($data4->data4['key_1_'.$key] == 'No') ❌ @endif
                    </td>
                    <td>
                        {{$data4->data4['puntaje_2_'.$key] }}
                    </td>
                    <td>
                         @if($data4->data4['key_2_'.$key] == 'Si') ✔ @endif
                    </td>
                    <td>
                         @if($data4->data4['key_2_'.$key] == 'No') ❌ @endif
                    </td>
                    <td>
                        {{$data4->data4['textarea_'.$key]}}
                    </td>
                </tr>
                @endforeach
            </tbody>
</table>
