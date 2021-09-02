@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reporte por Usuario</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            {!! Form::open(['route' => 'admin.reports.reportDate']) !!}
                <div class="card-body" id="rangoFechas">
                    <div class="input-daterange input-group" id="datepicker">
                        <span class="input-group-addon">Desde </span>
                        <input type="text" name="from" class="input-sm form-control" name="start" />
                        <span class="input-group-addon">Hasta </span>
                        <input type="text" name="to" class="input-sm form-control" name="end" />
                    </div>
                </div>
                <div class="text-center">
                    {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>

    </div>
</div>
@stop


@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
            $('#rangoFechas .input-daterange').datepicker({
});
    </script>
@stop
