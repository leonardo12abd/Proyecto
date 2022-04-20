
<br>
<br>
<th>Indicas</th>
<br><br>
<table>
    @foreach($indicas as $key => $indi)
    @if($key == 0 || $indicas[$key-1]->clasificacion_indicas != $indi->clasificacion_indicas)
    <thead >
      <tr>
        <th scope="col" style="background-color: rgb(127, 179, 213);">{{$indi->clasificacion_indicas}}</th>
        <th scope="col" style="background-color: rgb(127, 179, 213);">SI</th>
        <th scope="col" style="background-color: rgb(127, 179, 213);">NO</th>
        <th scope="col" style="background-color: rgb(127, 179, 213);">OBSERVACIONES</th>
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
