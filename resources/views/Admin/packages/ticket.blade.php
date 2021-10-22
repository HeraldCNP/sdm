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
            <td style="height: 20px">{{ $package->code }}</td>
            <td style="text-align: rigth; height:22">{{ $package->id }}</td>
        </tr>
        <tr>
            <td style="height:165px" colspan="2"></td>
        </tr>
        <tr>
            @if ($package->renown)
                <td colspan="2" style="text-align: center; height:22; text-transform: uppercase; font-size:13px">{{ $package->renown }}</td>
            @else
                <td colspan="2" style="text-align: center; height:22; text-transform: uppercase; font-size:13px">{{ $package->user->people->name }} {{ $package->user->people->app }} {{ $package->user->people->apm}}</td>
            @endif
        </tr>
    </table>
</body>
</html>




