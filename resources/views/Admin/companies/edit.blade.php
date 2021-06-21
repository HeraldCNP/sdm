@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Empresa</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>
@endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($company, ['route' => ['admin.companies.update', $company], 'method' => 'PUT']) !!}
                @include('admin.companies.partials.form')
                <div class="row">
                    <div class="col text-center">
                        {!! Form::submit('Actualizar Empresa', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection
