<table>
  <tr>
    <td>Unidades</td>
  </tr>
@foreach($unidades as $unidad)
  <tr>
    <td>
{{ $unidad->id_clues }}
    </td>
    <td>
{{ $unidad->clues }}
    </td>
    <td>
{{ $unidad->nombreunidad }}
    </td>
  </tr>
@endforeach


</table>
