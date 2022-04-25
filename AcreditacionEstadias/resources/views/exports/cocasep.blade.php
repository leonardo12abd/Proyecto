<h3 style="background-color: white">COCASEP</h3>
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

        <th>{{ $data9->id_clues }}</th>
        <th>{{$data9->clues->clues}}</th>
        <th>{{$data9->clues->nombreunidad}}</th>
        <th>{{ $data9->user->name }}</th>

    </tr>
    </tbody>
</table>


<table>
    @foreach($cocaseps as $key => $pepsi)
        @if($key == 0 || $cocaseps[$key-1]->clasificacion_cocasep != $pepsi->clasificacion_cocasep)
            <thead>
                <tr>
                    <th style="background: #CAF2DD">{{$pepsi->clasificacion_cocasep}}</th>
                    <th style="background: #B8E8A7">SI</th>
                    <th style="background: #F0816B">NO</th>
                    <th style="background: #E5DCDA">OBSERVACIONES</th>
                </tr>
            </thead>
        @endif
        <tbody>
            <tr>
                <th scope="row">{{$pepsi->nombre_cocasep}}</th>
                <td>
                     @if($data9->data9['key_'.$key] == 'Si') ✔ @endif
                </td>
                <td>
                    @if($data9->data9['key_'.$key] == 'No') ❌ @endif
                </td>
                <td>
                    {{$data9->data9['textarea_'.$key]}}
                </td>
            </tr>
        </tbody>
    @endforeach
  </table>
