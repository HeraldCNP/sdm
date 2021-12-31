<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <table border="0">
        <tr>
            <td style="height: 20px">Lote: {{ $package->code }}</td>
            <td style="text-align: rigth; height:22">{{ $package->id }}</td>
        </tr>
        <tr>
            <td style="height:140px" colspan="2"></td>
        </tr>
        <tr>
            @if ($package->renown)
                <td colspan="2" style="text-align: center; height:10; text-transform: uppercase; font-size:13px">{{ $package->renown }}</td>
            @else
                <td colspan="2" style="text-align: center; height:10; text-transform: uppercase; font-size:13px">{{ $package->user->people->name }} {{ $package->user->people->app }} {{ $package->user->people->apm}}</td>
            @endif
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; height:10; text-transform: uppercase; font-size:13px">{{ $package->created_at }}</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; height:10; text-transform: uppercase; font-size:8px">Escanee el código QR a la hora indicada para que pueda descargar su certificado digital.</td>
        </tr>
    </table>
</body>
</html>




