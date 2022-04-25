<h2 style="color:#555050;">COCASEP(Reporte)</h2>

<table>
    <thead>
            <th style="background: #e0b565">Clave reporte</th>
            <th style="background: #e0b565">Codigo clues</th>
            <th style="background: #e0b565">Clues</th>
            <th style="background: #e0b565">Nombre de la Unidad</th>
            <th style="background: #e0b565">Usuario Encargado de la captura</th>
            <th style="background: #e0b565">Fecha de creacion</th>
            <th style="background: #e0b565">Fecha de Modificacion</th>
    </thead>
    <tbody>
        @foreach($data as $key => $data1 )
            <tr>
        <th>{{$data1->id}}</th>
        <th>{{ $data1->id_clues }}</th>
        <th>{{$data1->clues->clues}}</th>
        <th>{{$data1->clues->nombreunidad}}</th>
        <th>{{ $data1->user->name }}</th>
        <th>{{ $data1->created_at }}</th>
        <th>{{ $data1->updated_at }}</th>

            </tr>
        @endforeach


    </tbody>
</table>
