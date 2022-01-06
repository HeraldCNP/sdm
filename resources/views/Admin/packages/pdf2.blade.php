
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
         <td colspan="4" style="text-align: center"><a href="www.labsanmartin.com.bo" target="_blank"><img alt="" src="{{ asset('images/pdf/banner.jpg') }}" /></a></td>
        </tr>
        <tr>
            <th colspan="4" align="center" style="font-size: 1.5em; font-weight: bold">CERTIFICADO DE ANALISIS</th>
        </tr>
        <tr>
            <td style="font-size: 1em;">Potosí {{ $package->created_at->isoFormat('LL') }}</td>
            <td  colspan="2"><b>Empresa :</b>
                <span>{{ $package->company->name }}</span></td>
            <td><b>Lote N° :</b>
                <span>{{ $package->code }}</span></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center; height:25">
                <b>Perteneciente a:</b>
                @if ($package->renown)
                    <span>{{ $package->renown }}</span>
                @else
                    <span>{{ $package->user->people->name }} {{ $package->user->people->app }} {{ $package->user->people->apm}}</span>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center; height:25">
                    <b style="">Caracteristicas:</b>
                    <span>{{ $package->features }}</span>
            </td>
        </tr>
        <tr >
            {{-- max 160 --}}
            <th colspan="2" style="text-align: center; font-size: 1.2em; height:27">
                <b><u>Elemento</u> </b>
            </th>
            <th style="text-align: center; font-size: 1.2em;">
                <b><u>Resultado</u> </b>
            </th>

        </tr>
        @foreach ($package->elements as $element)
            <tr>
                <td colspan="2" style="text-align: center; height:24;"><b>{{ $element->name . ' ' }}</b></td>
                <td style="text-align: center;">{{ $element->pivot->value }} {{ $element->symbol }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3" style="text-align: center; font-size:8px; border-style: none;">Este certificado se encuentra firmado digitalmente por el <a href="www.labsanmartin.com.bo" target="_blank">Laboratorio Quimico Instrumental San Martin</a> y puede ser verificado en la página <a href="https://validar.firmadigital.bo/" target="_blank">https://validar.firmadigital.bo/</a><br>Recuerda que la Firma Digital es legalmente válida según la Ley 164 de 2011 y el Decreto Supremo 3525 de 2018 </td>
            <td style="border-style: none;"><a style="text-align: center;" href="www.firmadigital.bo" target="_blank"><img height="30px" alt="" src="{{ asset('images/pdf/logoFirmaDigital.jpg') }}" /></a>  </td>
        </tr>

       </table>
</body>
</html>




