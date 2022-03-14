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
            <th  >id User</th>
            <th  >data3</th>
            <th  >created</th>
            <th>id_user</th>

        </thead>
        <tbody>
            @foreach ($Calidadpercibidadata as $clpcd)
                <tr>
                    <td>{{ $clpcd->id }}</td>
                    <td>{{ $clpcd->data3 }}</td>
                    <td>{{ $clpcd->created_at }}</td>
                    <td>{{ $clpcd->id_user }}</td>
                </tr>
            @endforeach
        </tbody>
    </table></center>


</body>
</html>
