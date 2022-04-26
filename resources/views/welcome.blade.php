@extends('layouts.layout2')
@section('content')
      <div class="row">
          <div class="col text-center mt-5">
            <img src="{{ asset('img/logo/logo.png') }}" alt="">
          </div>
      </div>
      <div class="row">
          <div class="col text-center mt-5">
              <a class="btn btn-danger btn-lg" href="{{ route('login') }}">Iniciar Sesion</a>
          </div>
      </div>
@endsection