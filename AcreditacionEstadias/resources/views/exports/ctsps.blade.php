<br>
<br>
<table>

    <th>Reporte CALIDAD TECNICA Y SEGURIDAD DEL PACIENTE</th>
</table>
<br><br>
<table>
    @foreach($ctsps as $key => $ct)
    @if($key == 0 || $ctsps[$key-1]->clasificacion_ctsp != $ct->clasificacion_ctsp)
    <thead>
      <tr>
        <th scope="col" style="background-color: rgb(133, 193, 233);">{{$ct->clasificacion_ctsp}}</th>
        <th style="background-color: rgb(133, 193, 233);">SI</th>
        <th style="background-color: rgb(133, 193, 233);">NO</th>
        <th style="background-color: rgb(133, 193, 233);">OBSERVACIONES</th>
      </tr>
    </thead>
    @endif
    <tbody>
        <tbody>
            <tr>
                <th scope="row">{{$ct->nombre_ctsp}}</th>
                <td>
                     @if($data2->data2['key_'.$key] == 'Si') ✔ @endif
                </td>
                <td>
                    @if($data2->data2['key_'.$key] == 'No') ❌ @endif
                </td>
                <td>
                 {{$data2->data2['textarea_'.$key]}}
                </td>
            </tr>

    </tbody>
    @endforeach
</table>

{{--  --}}
