<h2 style="color:#555050;">Calidad Percibida/Aval Ciudadano (Reporte)</h2>

<table>
    <thead>
            <th style="background: #BDE487">Clave reporte</th>
            <th style="background: #BDE487">Codigo clues</th>
            <th style="background: #BDE487">Clues</th>
            <th style="background: #BDE487">Nombre de la Unidad</th>
            <th style="background: #BDE487">Usuario Encargado de la captura</th>
            <th style="background: #BDE487">Fecha de creacion</th>
            <th style="background: #BDE487">Fecha de Modificacion</th>
    </thead>
    <tbody>
        @foreach($data as $key => $data20 )
            <tr>
        <th>{{$data20->id}}</th>
        <th>{{ $data20->id_clues }}</th>
        <th>{{$data20->clues->clues}}</th>
        <th>{{$data20->clues->nombreunidad}}</th>
        <th>{{ $data20->user->name }}</th>
        <th>{{ $data20->created_at }}</th>
        <th>{{ $data20->updated_at }}</th>

            </tr>
        @endforeach


    </tbody>
</table>
