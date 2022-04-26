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
            <td style="height:125px" colspan="4"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="text-align: left; height:16">{{ $package->fecha }}</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="text-align: left; height:16">{{ $package->company->name }}</td>
        </tr>
        <tr>
            <td></td>
            @if ($package->renown)
                <td colspan="2" style="text-align: left; height:16; text-transform: uppercase;">{{ $package->renown }}</td>

            @else
                <td colspan="2" style="text-align: left; height:16; text-transform: uppercase;">{{ $package->user->people->name }} {{ $package->user->people->app }} {{ $package->user->people->apm}}</td>
            @endif
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="text-align: left; height:16">{{ $package->code }}</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="height:16; text-align: left">{{ $package->features }}</td>
        </tr>
        <tr><td colspan="4" height="105px"></td></tr>
        @foreach ($package->elements as $element)
            <tr style="font-size: 1.2em">
                <td style="text-align: right; height:25"><b>{{ $element->name . ' ' }}</b></td>
                <td style="text-align: center;"><b>{{ $element->pivot->value }}</b></td>
                <td><b>{{ $element->symbol }}</b></td>
                <td></td>
            </tr>
        @endforeach
        <tr><td colspan="4" height="123px"></td></tr>

    </table>
</body>
</html>




