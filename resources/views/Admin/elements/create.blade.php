@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Nuevo Elemento</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success"><strong>{{ session('info') }}</strong></div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.elements.store']) !!}
                @include('admin.elements.partials.form')
            <div class="row">
                <div class="col text-center">
                    {!! Form::submit('Crear Elemento', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
