
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
         <td colspan="6" style="text-align: center"><a href=" "><img alt="" src="{{ asset('images/pdf/banner.jpg') }}" /></a></td>
        </tr>
        <tr>
            <th colspan="6" align="center" style="font-size: 1.5em; font-weight: bold">CERTIFICADO DE ANALISIS</th>
        </tr>
        {{-- <tr>
            <td colspan="4"><h4>Potosí {{ $packages[0]->created_at->isoFormat('LL') }}</h4></td>
            <td colspan="3"><b>Empresa :</b>
                <span>{{ $packages[0]->company->name }}</span></td>
            <td><b>Lote N° :</b>
                <span>{{ $packages[0]->code }}</span></td>
        </tr> --}}
        <tr >
            {{-- max 160 --}}
            {{-- <th style="text-align: center; width:50; font-size: 1.2em;">
                <b>N°</b>
            </th> --}}
            <th style="text-align: center; font-size: 1.2em;">
                <b>Lote</b>
            </th>
            <th style="text-align: center; font-size: 1.2em;">
                <b>Cliente</b>
            </th>
            <th style="text-align: center; font-size: 1.2em;">
                <b>Empresa</b>
            </th>
            <th colspan="2" style="text-align: center; font-size: 1.2em;">
                <b>Analisis</b>
            </th>
            <th style="text-align: center; font-size: 1.2em;">
                <b>Fecha</b>
            </th>
            
        </tr>
        @foreach ($packages as $package)
        <tr>
        
            {{-- <td style="text-align: center">{{ $package->id }}</td> --}}
            <td style="text-align: center">{{ $package->code }}</td>
            @if ($package->renown)
                <td style="text-align: center; font-size: 0.8em;">{{ $package->renown }}</td>
            @else
                <td style="text-align: center; font-size: 0.8em;">{{ $package->user->people->name }} {{ $package->user->people->app }}</td>
            @endif
            <td style="text-align: center; font-size: 0.8em;">{{ $package->company->name }}</td>
            <td colspan="2" style="text-align: center;">
                @foreach ($package->elements as $element)
                    @if ($element == $package->elements->last())
                        <b>{{  $element->name . ' ' }}</b> = {{ $element->pivot->value }} {{ $element->symbol }}
                    @else
                        <b>{{  $element->name . ' ' }}</b> = {{ $element->pivot->value }} {{ $element->symbol }}<br>
                    @endif
                    
                   
                @endforeach
            </td>
            <td style="text-align: center; font-size: 0.8em;">{{ $package->updated_at->isoFormat('L') }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="6" style="text-align: center; font-size:9px">"ESTE ES UN <b color="#FF0000">DOCUMENTO FIRMADO DIGITALMENTE"</b> <br>LA ALTERACI&Oacute;N, FALSIFICACI&Oacute;N O COMERCIALIZACI&Oacute;N ILEGAL DE ESTE DOCUMENTO ESTA PENADO POR LA LEY"</td>
        </tr>
       </table>
</body>
</html>




