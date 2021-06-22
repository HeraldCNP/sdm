@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Elemento</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>
@endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($element, ['route' => ['admin.elements.update', $element], 'method' => 'PUT']) !!}
                @include('admin.elements.partials.form')
                <div class="row">
                    <div class="col text-center">
                        {!! Form::submit('Actualizar Elemento', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('js')

@endsection
