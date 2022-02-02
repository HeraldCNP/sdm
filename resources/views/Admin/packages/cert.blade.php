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
            <th colspan="2" align="center" style="font-size: 0.8em; font-weight: bold">Laboratorio Químico Instrumental San Martin</th>
        </tr>
        <tr>
            <th colspan="2" align="center" style="font-size: 1.2em; font-weight: bold">CERTIFICADO DE ANALISIS</th>
        </tr>
        <tr>
            <td colspan="2" align="center" style="font-size: 1em; ">Potosí {{ $package->created_at->isoFormat('LL') }}</td>
        </tr>
        <tr>
            <td style="height:110px" colspan="2"></td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="font-size: 0.65em; font-style:italic">"Aprendimos que el crecimiento económico y la protección del medio ambiente pueden y deben ir de la mano"</td>
        </tr>
        <tr>
            <td style="font-size: 1em;" align="center"  colspan="2"><b>Empresa :</b><br>
                <span>{{ $package->company->name }}</span></td>
        </tr>
        <tr>
            <td style="font-size: 1em;" colspan="2" align="center"><b>Lote N° :</b><br>
                <span>{{ $package->code }}</span></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; font-size: 1em;">
                    <b style="">Caracteristicas:</b><br>
                    <span>{{ $package->features }}</span>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; font-size: 1em;">
                <b>Perteneciente a:</b> <br>
                @if ($package->renown)
                    <span>{{ $package->renown }}</span>
                @else
                    <span>{{ $package->user->people->name }} {{ $package->user->people->app }} {{ $package->user->people->apm}}</span>
                @endif
            </td>
        </tr>
        <tr >
            {{-- max 160 --}}
            <th style="text-align: center; font-size: 1.2em;">
                <b><u>Elemento</u> </b>
            </th>
            <th style="text-align: center; font-size: 1.2em;">
                <b><u>Resultado</u> </b>
            </th>
        </tr>
        @foreach ($package->elements as $element)
            <tr>
                <td style="text-align: center; font-size: 1.2em; border-style: double;"><b>{{ $element->name . ' ' }}</b></td>
                <td style="text-align: center;font-size: 1.2em; height: 20; border-style: double;">{{ $element->pivot->value }} {{ $element->symbol }}</td>
            </tr>
        @endforeach
        
        <tr>
            <td colspan="2" style="text-align: center; font-size:8px; border-style: none;">Este certificado se encuentra firmado digitalmente por el <a href="www.labsanmartin.com.bo" target="_blank">Laboratorio Quimico Instrumental San Martin</a> y puede ser verificado en la página <a href="https://validar.firmadigital.bo/" target="_blank">https://validar.firmadigital.bo/</a><br>Recuerda que la Firma Digital es legalmente válida según la Ley 164 de 2011 y el Decreto Supremo 3525 de 2018 </td>
        </tr>
    </table>
</body>
</html>




