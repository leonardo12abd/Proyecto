<h3 style="background-color: white">INDICAS</h3>
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

        <th>{{ $data1->id_clues }}</th>
        <th>{{$data1->clues->clues}}</th>
        <th>{{$data1->clues->nombreunidad}}</th>
        <th>{{ $data1->user->name }}</th>
    </tr>
    </tbody>
</table>


<table>
    @foreach($indicas as $key => $indi)
    @if($key == 0 || $indicas[$key-1]->clasificacion_indicas != $indi->clasificacion_indicas)
    <thead >
      <tr>
        <th style="background: #CAF2DD">{{$indi->clasificacion_indicas}}</th>
        <th style="background: #B8E8A7">SI</th>
        <th style="background: #F0816B">NO</th>
        <th style="background: #E5DCDA">OBSERVACIONES</th>
      </tr>
    </thead>
    @endif

    <tbody>
        <tr>
            <th scope="row">{{$indi->nombre_indicas}}</th>
            <td>
                @if($data1->data1['key_'.$key] == 'Si') ✔ @endif
            </td>
            <td>
                 @if($data1->data1['key_'.$key] == 'No') ❌ @endif
            </td>
            <td>
                {{$data1->data1['textarea_'.$key]}}
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
