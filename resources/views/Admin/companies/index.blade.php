@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.companies.create')
        <a href="{{ route('admin.companies.create') }}" class="btn btn-secondary btn-sm float-right">Agregar Empresa</a>
    @endcan
    <h1>Lista de Empresas</h1>
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
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->phone }}</td>
                            <td>{{ $company->address }}</td>
                            <td width="10px">
                                @can('admin.companies.edit')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.companies.edit', $company) }}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.companies.destroy')
                                    <form action="{{ route('admin.companies.destroy', $company) }}" method="POST">
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
        {{ $companies->links() }}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
