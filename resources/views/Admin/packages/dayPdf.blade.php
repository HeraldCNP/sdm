
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
         <td colspan="6" style="text-align: center"><a href="www.labsanmartin.com.bo"><img alt="" src="{{ asset('images/pdf/banner.jpg') }}" /></a></td>
        </tr>
        <tr>
            <th colspan="6" align="center" style="font-size: 1.3em; font-weight: bold">CERTIFICADO DE ANALISIS</th>
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
            <th style="text-align: center; width:30px; font-size: 0.9em;">
                <b>N°</b>
            </th>
            <th style="text-align: center; font-size: 0.9em;">
                <b>Lote</b>
            </th>
            <th style="text-align: center; font-size: 0.9em;">
                <b>Cliente</b>
            </th>
            <th style="text-align: center; font-size: 0.9em;">
                <b>Empresa</b>
            </th>
            <th colspan="2" style="text-align: center; font-size: 0.9em;">
                <b>Analisis</b>
            </th>
            <th style="text-align: center; font-size: 0.8em;">
                <b>Fecha</b>
            </th>
            
        </tr>
        @foreach ($packages as $package)
        <tr>
        
            <td style="text-align: center; font-size: 0.8em;">{{ $package->id }}</td>
            <td style="text-align: center; font-size: 0.8em;">{{ $package->code }}</td>
            @if ($package->renown)
                <td style="text-align: center; font-size: 0.7em;">{{ $package->renown }}</td>
            @else
                <td style="text-align: center; font-size: 0.7em;">{{ $package->user->people->name }} {{ $package->user->people->app }}</td>
            @endif
            <td style="text-align: center; font-size: 0.7em;">{{ $package->company->name }}</td>
            <td colspan="2" style="text-align: center; font-size: 0.8em;">
                @foreach ($package->elements as $element)
                    @if ($element == $package->elements->last())
                        <b>{{  $element->name . ' ' }}</b> = {{ $element->pivot->value }} {{ $element->symbol }}
                    @else
                        <b>{{  $element->name . ' ' }}</b> = {{ $element->pivot->value }} {{ $element->symbol }}<br>
                    @endif    
                @endforeach
            </td>
            <td style="text-align: center; font-size: 0.6em;">{{ $package->updated_at->isoFormat('L') }}</td>
        </tr>
        @endforeach
        
       </table>
</body>
</html>




