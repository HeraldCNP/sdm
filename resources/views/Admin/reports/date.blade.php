@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reporte por Fecha</h1>
@stop

@section('content')
    <div class="card text">
        <div class="card-header d-flex">
            <div class="text-center">
                <h4><b>Reporte de Paquetes desde el:</b> {{ $from->isoFormat('LL') }} <b>hasta el: </b>{{ $to->isoFormat('LL') }}</h4>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Lote N°</th>
                        <th>Cliente</th>
                        <th>Empresa</th>
                        <th>Analisis</th>
                        <th>Fecha</th>
                        {{-- <th>Estado</th> --}}
                        <th colspan="4"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->code }}</td>
                            @if ($package->renown)
                                <td>{{ $package->renown }}</td>
                            @else
                                <td>{{ $package->user->people->name }} {{ $package->user->people->app }}</td>
                            @endif
                            <td>{{ $package->company->name }}</td>
                            <td>
                                @foreach ($package->elements as $element)
                                    <b>{{  $element->name . ' ' }}</b> = {{ $element->pivot->value }} {{ $element->symbol }}
                                @endforeach
                            </td>
                            <td>{{ $package->updated_at->isoFormat('L') }}</td>
                            {{-- <td width="10px">
                                @can('admin.companies.edit')
                                    <a class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Ver" href="{{ route('admin.packages.show', $package) }}"><i class="far fa-eye"></i></a>
                                @endcan
                            </td> --}}
                            <td width="10px">
                                @can('admin.companies.edit')
                                    <a class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Editar" href="{{ route('admin.packages.edit', $package) }}"><i class="fas fa-pencil-alt"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.companies.edit')
                                    <a class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Generar PDF" href="{{ route('admin.package.pdf', $package) }}" target="_blank"><i class="far fa-file-pdf"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.companies.destroy')
                                    <form action="{{ route('admin.packages.destroy', $package) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                @endcan
                            </td>
                            {{-- <td width="10px">
                                @can('admin.companies.edit')
                                    <a class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Generar PDF peque" href="{{ route('admin.package.certPdf', $package) }}" target="_blank"><i class="far fa-file-pdf"></i></a>
                                @endcan
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col-md text-center">
                    {{-- {{ $packages->links() }} --}}
                    {{-- {{ $packages->appends(Request::except('page'))->links() }} --}}
                </div>
            </div>
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
            $('.js-example-basic-single').select2();
        });
    </script>
@stop
