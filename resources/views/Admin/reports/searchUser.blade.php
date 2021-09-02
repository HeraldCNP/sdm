@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reporte por Usuario</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.reports.reportUser']) !!}
                <div class="form-group">
                    {!! Form::label('ci', 'Carnet de Identidad') !!}
                    {!! Form::text('ci', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Carnet de Identidad del usuario']) !!}
                    @error('ci')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@stop
