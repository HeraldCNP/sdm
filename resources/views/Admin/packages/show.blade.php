@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>
    @endif
    <h1>Ver Paquete</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <div class="text-left">
            <form action="">
                <input type="hidden" id="phone" value="{{ $package->user->people->phone }}">
                <input type="hidden" id="key" value="{{ url('/paquete/pdf/'.$package->key) }}">
                <a href="{{ route('admin.packages.index') }}" data-toggle="tooltip" title="Lista de Paquetes" class="btn btn-lg btn-info">Lista de Paquetes</a>
                {{-- <button class="btn btn-lg btn-success" id="btnWhatsapp" type="submit" data-toggle="tooltip" title="Notificar por Whatsapp">
                    <i class="fab fa-whatsapp"> Notificar</i>
                </button> --}}
                <a href="{{ route('admin.package.pdf', $package) }}" data-toggle="tooltip" title="Generar PDF" class="btn btn-lg btn-warning" target="_blank"><i class="far fa-file-pdf"> Generar PDF </i></a>
            </form>
        </div>
    </div>
    <div class="card-body px-5 mx-5">
        <table border="1">
            <tr>
                <td style="height:90px" colspan="4"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="2" style="text-align: center">{{ $package->id }}</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="2">
                    @foreach ($package->elements as $element)
                        {{ $element->name . ' ' }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="3" style="text-align: center; text-transform: uppercase">{{ $package->user->people->name }} {{ $package->user->people->app }} {{ $package->user->people->apm}}</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: center">{{ $package->code }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right">{{ $package->features }}</td>
                <td colspan="2" style="text-align: center">{{ $package->company->name }}</td>
            </tr>
            <tr><td colspan="4" height="50px"></td></tr>
            @foreach ($package->elements as $element)
                <tr >
                    <td></td>
                    <td style="text-align: center; height:25"><b>{{ $element->name . ' ' }}</b></td>
                    <td style="text-align: center;">{{ $element->pivot->value }}</td>
                    <td>{{ $element->symbol }}</td>
                </tr>
            @endforeach
            <tr><td colspan="4" height="50px"></td></tr>
            <tr>
                
                <td colspan="4">{{ $package->fecha }}</td>
            </tr>
        </table>
    </div>
</div>
@stop


@section('css')
    {{-- <style>
        table{
            width: 100%;
        }
        td {
            border: solid 1px;
        }
    </style> --}}
@stop

@section('js')
    {{-- <script>
    document.querySelector('#btnWhatsapp').addEventListener('click', function() {
        let phone = document.querySelector('#phone').value;
        let key = document.querySelector('#key').value;
        let url = "https://api.whatsapp.com/send?phone=591" + phone +"&text=*Laboratorio Quimico Instrumental San Martin* informa que el resultado de su analisis ya se encuentra disponible, puede descargar su certificado digital aqui:%0A %0A" + key + "%0A %0A No olvide agregar este número como *LaboratorioSanMartin* para poder descargar su certificado";
        window.open(url);
    });
    </script> --}}
@stop
