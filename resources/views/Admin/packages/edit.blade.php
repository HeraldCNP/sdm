@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Paquete</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body px-5 mx-5">
            {!! Form::model($package, ['route' => ['admin.packages.update', $package], 'autocomplete' => 'off', 'method' => 'PUT']) !!}
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        {!! Form::label('company_id', 'Empresa:') !!}
                        {!! Form::select('company_id', $companies, null, ['class' => 'form-control companies']) !!}
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
                        {!! Form::text('features', 'Paquete Sellado', ['class' => 'form-control']) !!}
                        @error('features')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        @foreach ($package->elements as $element)
                            <label for="nombre">{{ $element->name }}</label>
                            <input type="hidden" name="elements[]" value="{{ $element->id }}">
                            <input type="text" id="elements[]" class="form-control @error('features') is-invalid @enderror"
                                name="values[]" value="{{ $element->pivot->value }}">
                            @error('elements[]')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        @endforeach
                    </div>

                    {{-- <div class="form-group">
                        {!! Form::label('element_id', 'Elementos:') !!}
                        {!! Form::select('elements[]', $elements, null, ['class' => 'form-control elements', 'multiple' => 'multiple']) !!}
                        @error('element_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        {!! Form::label('renown', 'Renombre') !!}
                        {!! Form::text('renown', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el renombre']) !!}
                        @error('renown')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('fecha', 'Fecha') !!}
                        <div id="date">
                            <div class="input-daterange input-group" id="datepicker">
                                <input type="text" class="input-sm form-control" name="fecha" value="{{ $package->fecha }}" />
                            </div>
                        </div>
                    </div>
                   
                    <div class="text-center">
                        {!! Form::submit('Editar Paquete', ['class' => 'btn btn-primary']) !!}
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
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('.elements').select2();
        });
    </script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
            $('#date .input-daterange').datepicker({
});
    </script>
@stop
