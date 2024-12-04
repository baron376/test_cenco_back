<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>NUMERO ID</th>
        <th>SECCION</th>
        <th>SAP</th>
        <th>DESCRIPCION</th>
        <th>MEDIO</th>
        <th>TMP</th>
        <th>FECHA INICIO PROMO</th>
        <th>FECHA TERMINO PROMO</th>
        <th>ACTIVO</th>

    </tr>
    </thead>
    <tbody>
    @foreach($data as $produc)
        <tr>
            <td>{{ $produc->count_robot }}</td>
            <td>{{ $produc->seccion }}</td>
            <td>{{ $produc->sap }}</td>
            <td>{{ $produc->descripcion }}</td>
            <td>{{ $produc->medio }}</td>
            <td>{{ $produc->tmp }}</td>
            <td>{{ $produc->fecha_inicio }}</td>
            <td>{{ $produc->fecha_termino }}</td>
            <td>{{ $produc->stock }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>