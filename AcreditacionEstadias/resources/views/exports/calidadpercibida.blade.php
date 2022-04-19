<table class="table">
    @foreach($calidadpers as $key => $cpers)
      @if($key == 0 || $calidadpers[$key-1]->clasificacion_aval != $cpers->clasificacion_aval)
      <thead class="thead-dark">
          <tr>
              <th scope="col" style="background-color: rgb(249, 231, 159);">{{$cpers->clasificacion_aval}}</th>
              <th scope="col" style="background-color: rgb(249, 231, 159);">SI</th>
              <th scope="col" style="background-color: rgb(249, 231, 159);">NO</th>
              <th scope="col" style="background-color: rgb(249, 231, 159);">OBSERVACIONES</th>


          </tr>
      </thead>
      @endif

      <tbody>
          <tr>
              <th scope="row">{{$cpers->nombre_aval}}</th>
              <td>
              @if($data3->data3['key_'.$key] == 'Si') X @endif
              </td>
              <td>
              @if($data3->data3['key_'.$key] == 'No') X @endif
              </td>
              <td>
              {{$data3->data3['textarea_'.$key]}}
              </td>
          </tr>
      </tbody>
  @endforeach
  </table>


  <table>

    <thead>{{ $data3->id }}</thead>
  </table>




{{-- <table>
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
@endforeach
  </tr>


</table>
 --}}
