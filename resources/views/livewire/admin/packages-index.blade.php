<div>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card text">
        <div class="text-center">
            <h4><b>Reporte del {{ $fechaHoy }}</b> <br> <b>Total Ingresos: {{  $total }}</b></h4>
        </div>
        <div class="card-header d-flex">
            <a href="{{ route('admin.packages.create') }}" class="btn btn-danger">Reporte Ayer</a>
            <x-jet-input class="mx-4" style="flex: 1"></x-jet-input>
            <a href="{{ route('admin.packages.create') }}" class="btn btn-danger">Crear Nuevo</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Codigo</th>
                        <th>Cliente</th>
                        <th>Empresa</th>
                        <th>Analisis</th>
                        {{-- <th>Estado</th> --}}
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->code }}</td>
                            <td>{{ $package->user->people->name }} {{ $package->user->people->app }}</td>
                            <td>{{ $package->company->name }}</td>
                            <td>
                                @foreach ($package->elements as $element)
                                    <b>{{  $element->name . ' ' }}</b> = {{ $element->pivot->value }} {{ $element->symbol }}
                                @endforeach
                            </td>
                            <td width="10px">
                                @can('admin.companies.edit')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.packages.edit', $package) }}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.companies.destroy')
                                    <form action="{{ route('admin.packages.destroy', $package) }}" method="POST">
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

</div>
