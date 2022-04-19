<table>
    <th>excel prueba 3</th>
</table>


<table>
    @foreach($cocaseps as $key => $pepsi)
        @if($key == 0 || $cocaseps[$key-1]->clasificacion_cocasep != $pepsi->clasificacion_cocasep)
            <thead>
                <tr>
                    <th scope="col" style="background-color: rgb(169, 223, 191);">{{$pepsi->clasificacion_cocasep}}</th>
                    <th scope="col" style="background-color: rgb(169, 223, 191);">SI</th>
                    <th scope="col" style="background-color: rgb(169, 223, 191);">NO</th>
                    <th scope="col" style="background-color: rgb(169, 223, 191);">OBSERVACIONES</th>
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
