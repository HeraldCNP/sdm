@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <form action="">
        <div class="form-group">
            <select class="js-example-basic-single form-control" name="state">
                <option value="AL">Alabama</option>
                ...
                <option value="WY">Wyoming</option>
            </select>
        </div>
    </form>
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
