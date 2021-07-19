@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Nuevo Paquete</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success"><strong>{{ session('info') }}</strong></div>
    @endif
    <div class="card">
        <div class="card-body px-5 mx-5">
            {!! Form::open(['route' => 'admin.packages.store']) !!}
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        @livewire('admin.packages-user')
                    </div>
                    <div class="form-group">
                        {!! Form::label('company_id', 'Empresa:') !!}
                        {!! Form::select('company_id', $companies, null, ['class' => 'form-control companies', 'required' => 'required']) !!}
                        @error('company_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('code', 'Codigo de Paquete') !!}
                        {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el codigo de paquete']) !!}
                        @error('code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('features', 'Caracteristicas') !!}
                        {!! Form::text('features', 'PAQUETE SELLADO', ['class' => 'form-control']) !!}
                        @error('features')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('element_id', 'Elementos:') !!}
                        {!! Form::select('elements[]', $elements, null, ['class' => 'form-control elements', 'multiple' => 'multiple', 'required' => 'required']) !!}
                        @error('element_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('renown', 'Renombre') !!}
                        {!! Form::text('renown', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el renombre']) !!}
                        @error('renown')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-center">
                        {!! Form::submit('Crear Paquete', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                <div class="col-md-4">

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
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.companies').select2();
        });
        $(document).ready(function() {
            $('.elements').select2();
        });
    </script>
@stop
