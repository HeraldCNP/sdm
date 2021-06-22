@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.elements.create')
        <a href="{{ route('admin.elements.create') }}" class="btn btn-secondary btn-sm float-right">Agregar Elemento</a>
    @endcan
    <h1>Lista de Elementos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-stripe">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Simbolo</th>
                        <th>Precio</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($elements as $element)
                        <tr>
                            <td>{{ $element->id }}</td>
                            <td>{{ $element->name }}</td>
                            <td>{{ $element->symbol }}</td>
                            <td>{{ $element->price }}</td>
                            <td width="10px">
                                @can('admin.elements.edit')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.elements.edit', $element) }}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.elements.destroy')
                                    <form action="{{ route('admin.elements.destroy', $element) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
