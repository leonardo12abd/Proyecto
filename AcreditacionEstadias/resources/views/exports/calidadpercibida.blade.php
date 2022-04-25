
<h3 style="background-color: white">Calidad Percibida/Aval Ciudadano</h3>
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

        <th>{{ $data3->id_clues }}</th>
        <th>{{$data3->clues->clues}}</th>
        <th>{{$data3->clues->nombreunidad}}</th>
        <th>{{ $data3->user->name }}</th>

    </tr>
    </tbody>
</table>

    <table >
        @foreach($calidadpers as $key => $cpers)
          @if($key == 0 || $calidadpers[$key-1]->clasificacion_aval != $cpers->clasificacion_aval)
          <thead>
              <tr>
                  <th style="background: #CAF2DD">{{$cpers->clasificacion_aval}}</th>
                  <th style="background: #B8E8A7">SI</th>
                  <th style="background: #F0816B">NO</th>
                  <th style="background: #E5DCDA">OBSERVACIONES</th>


              </tr>
          </thead>
          @endif

          <tbody>
              <tr>
                  <th scope="row">{{$cpers->nombre_aval}}</th>
                  <td>
                  @if($data3->data3['key_'.$key] == 'Si') ✔ @endif
                  </td>
                  <td>
                  @if($data3->data3['key_'.$key] == 'No') ❌ @endif
                  </td>
                  <td>
                  {{$data3->data3['textarea_'.$key]}}
                  </td>
              </tr>
          </tbody>
      @endforeach
      </table>



