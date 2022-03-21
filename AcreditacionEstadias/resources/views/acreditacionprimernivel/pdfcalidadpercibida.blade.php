<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDFCAPERC</title>
</head>
<body>
    <br>
    <center><h1>CalidadPercs PDF</h1></center>
<br><br>
    <center><table>
        <thead>
            <th  >Clave reoprte</th>

            <th  >Fecha de Creacion</th>
            <th>Usuario encargado de la creacio</th>

        </thead>
        <tbody>
            @foreach ($Calidadpercibidadata as $clpcd)
                <tr>
                    <td>{{ $clpcd->id }}</td>
                    <td>{{ $clpcd->created_at }}</td>
                    <td>{{ $clpcd->user->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table></center>


</body>
</html>
