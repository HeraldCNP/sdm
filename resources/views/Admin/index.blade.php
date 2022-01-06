@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenido: {{ auth()->user()->people->name }}</h1>
@stop

@section('content')
    @can('admin.packages.index')
      <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $usersTotal }}</h3>

                <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('admin.users.index') }}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $packagesTotal }}</h3>

                <p>Paquetes Registrados</p>
              </div>
              <div class="icon">
                <i class="fas fa-archive"></i>
              </div>
              <a href="{{ route('admin.packages.index') }}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{  $companiesTotal }}</h3>

                <p>Empresas Registradas</p>
              </div>
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
              <a href="{{ route('admin.companies.index') }}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $elementTotal }}</h3>

                <p>Elementos Registrados</p>
              </div>
              <div class="icon">
                <i class="fas fa-flask"></i>
              </div>
              <a href="{{ route('admin.elements.index') }}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
    </div>  
    @endcan
    
    <h3>Cotización de Minerales</h3>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe src="http://pimm.mineria.gob.bo/PyoServicios/Estadisticas/" width=680 height=550 frameborder=0 scrolling=yes></iframe>
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
