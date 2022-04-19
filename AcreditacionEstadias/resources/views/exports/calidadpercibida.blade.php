<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
    <br>
    <table>
        <th style="background-color: white">excel</th>
    </table>
    <br>

    <table class="table">
        @foreach($calidadpers as $key => $cpers)
          @if($key == 0 || $calidadpers[$key-1]->clasificacion_aval != $cpers->clasificacion_aval)
          <thead class="thead-dark">
              <tr>
                  <th scope="col" style="background-color: #ECFBA2">{{$cpers->clasificacion_aval}}</th>
                  <th scope="col" style="background-color: #ACFBA2">SI</th>
                  <th scope="col" style="background-color: #FBB2A2">NO</th>
                  <th scope="col" style="background-color: #D1F1E6">OBSERVACIONES</th>


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




</body>
</html>




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
