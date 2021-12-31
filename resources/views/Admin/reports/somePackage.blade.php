@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reportes Varios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.reports.reportSome']) !!}
                <div class="form-group">
                    {!! Form::label('codes', 'Ingrese codigos') !!}
                    {!! Form::select('codes[]', [], null, ['class' => 'form-control codigos', 'multiple' => 'multiple']) !!}
                    @error('codes')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {!! Form::submit('Generar', ['class' => 'btn btn-primary']) !!}
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
            $(".codigos").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            });
    </script>
@stop