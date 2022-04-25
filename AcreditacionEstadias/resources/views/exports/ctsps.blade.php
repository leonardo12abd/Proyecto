<br>
<h3 style="background-color: white">CALIDAD TECNICA Y SEGURIDAD AL PACIENTE</h3>
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

        <th>{{ $data2->id_clues }}</th>
        <th>{{$data2->clues->clues}}</th>
        <th>{{$data2->clues->nombreunidad}}</th>
        <th>{{ $data2->user->name }}</th>

    </tr>
    </tbody>
</table>

<table>
    @foreach($ctsps as $key => $ct)
    @if($key == 0 || $ctsps[$key-1]->clasificacion_ctsp != $ct->clasificacion_ctsp)
    <thead>
      <tr>
        <th style="background: #CAF2DD">{{$ct->clasificacion_ctsp}}</th>
        <th style="background: #B8E8A7">SI</th>
        <th style="background: #F0816B">NO</th>
        <th style="background: #E5DCDA">OBSERVACIONES</th>
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
