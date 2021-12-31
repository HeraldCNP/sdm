
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="2" nobr="true">
        <tr>
         <td colspan="3" style="text-align: center"><a href=" "><img alt="" src="{{ asset('images/pdf/banner.jpg') }}" /></a></td>
        </tr>
        <tr>
            <th colspan="3" align="center" style="font-size: 1.5em; font-weight: bold">CERTIFICADO DE ANALISIS</th>
        </tr>
        <tr>
            <td><h4>Potosí {{ $package->created_at->isoFormat('LL') }}</h4></td>
            <td><b>Empresa :</b>
                <span>{{ $package->company->name }}</span></td>
            <td><b>Lote N° :</b>
                <span>{{ $package->code }}</span></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; height:38">
                <b>Perteneciente a:</b>
                @if ($package->renown)
                    <span>{{ $package->renown }}</span>
                @else
                    <span>{{ $package->user->people->name }} {{ $package->user->people->app }} {{ $package->user->people->apm}}</span>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; height:38">
                    <b style="">Caracteristicas:</b>
                    <span>{{ $package->features }}</span>
            </td>
        </tr>
        <tr >
            {{-- max 160 --}}
            <th style="text-align: center; height:0">
                <b>Elemento</b>
            </th>
            <th style="text-align: center;">
                <b>Resultado</b>
            </th>

        </tr>
        @foreach ($package->elements as $element)
            <tr>
                <td style="text-align: center; height:25;"><b>{{ $element->name . ' ' }}</b></td>
                <td style="text-align: center;">{{ $element->pivot->value }} {{ $element->symbol }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3" style="text-align: center; font-size:9px">"ESTE ES UN <b color="#FF0000">DOCUMENTO FIRMADO DIGITALMENTE"</b> <br>LA ALTERACI&Oacute;N, FALSIFICACI&Oacute;N O COMERCIALIZACI&Oacute;N ILEGAL DE ESTE DOCUMENTO ESTA PENADO POR LA LEY"</td>
        </tr>
       </table>
</body>
</html>




