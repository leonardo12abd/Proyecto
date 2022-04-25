<h2 style="color:#555050;">Calidad Técnica y Seguridad al Paciente(Reporte)</h2>

<table>
    <thead>
            <th style="background: #87c2e9">Clave reporte</th>
            <th style="background: #87c2e9">Codigo clues</th>
            <th style="background: #87c2e9">Clues</th>
            <th style="background: #87c2e9">Nombre de la Unidad</th>
            <th style="background: #87c2e9">Usuario Encargado de la captura</th>
            <th style="background: #87c2e9">Fecha de creacion</th>
            <th style="background: #87c2e9">Fecha de Modificacion</th>
    </thead>
    <tbody>
        @foreach($data as $key => $data3 )
            <tr>
        <th>{{$data3->id}}</th>
        <th>{{ $data3->id_clues }}</th>
        <th>{{$data3->clues->clues}}</th>
        <th>{{$data3->clues->nombreunidad}}</th>
        <th>{{ $data3->user->name }}</th>
        <th>{{ $data3->created_at }}</th>
        <th>{{ $data3->updated_at }}</th>

            </tr>
        @endforeach


    </tbody>
</table>
