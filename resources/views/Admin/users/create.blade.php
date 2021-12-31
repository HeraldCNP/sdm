@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Asignar un Rol</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success"><strong>{{ session('info') }}</strong></div>
    @endif
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.users.store']) !!}
            <div class="row">
                {{-- <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('email', 'Correo Electronico') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Correo Electronico']) !!}
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div> --}}
                <div class="col-md-6 offset-3">
                    <div class="form-group">
                        {!! Form::label('name', 'Nombres') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre completo']) !!}
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('app', 'Apellido Paterno') !!}
                        {!! Form::text('app', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido paterno']) !!}
                        @error('app')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('apm', 'Apellido Materno') !!}
                        {!! Form::text('apm', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido materno']) !!}
                        @error('apm')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('ci', 'Carnet de Identidad') !!}
                        {!! Form::text('ci', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el # Carnet de Identidad']) !!}
                        @error('ci')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone', 'Celular (Whatsapp)') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el # de celular Whatsapp']) !!}
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('address', 'Dirección') !!}
                        {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Dirección']) !!}
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {!! Form::submit('Crear Usuario', ['class' => 'btn btn-primary w-100']) !!}

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
