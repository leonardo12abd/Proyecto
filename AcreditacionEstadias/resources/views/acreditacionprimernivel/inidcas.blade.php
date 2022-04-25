<h2 style="color:#555050;">Indicas(Reporte)</h2>

<table>
    <thead>
            <th style="background: #f1a0dd">Clave reporte</th>
            <th style="background: #f1a0dd">Codigo clues</th>
            <th style="background: #f1a0dd">Clues</th>
            <th style="background: #f1a0dd">Nombre de la Unidad</th>
            <th style="background: #f1a0dd">Usuario Encargado de la captura</th>
            <th style="background: #f1a0dd">Fecha de creacion</th>
            <th style="background: #f1a0dd">Fecha de Modificacion</th>
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
