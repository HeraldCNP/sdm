@extends('layouts.layout2')
@section('content')
      <div class="row position-relative inline-block">
        <div class="col">
            <img src="{{ asset('img/report/cert.jpg') }}" alt="">
        </div>
        <span class="date">{{ $package->created_at->isoFormat('LL') }}</span>
        <span class="company">{{ $package->company->name }}</span>
        <span class="client">
            @if ($package->renown)
                {{ $package->renown }}
            @else
                {{ $package->user->people->name }} {{ $package->user->people->app }} {{ $package->user->people->apm}}
            @endif
        </span>
          <span class="code">{{ $package->code }}</span>
          <span class="features">{{ $package->features }}</span>
          <span class="results">
            @foreach ($package->elements as $element)
                <b>{{ $element->name . ': ' }}  {{ $element->pivot->value }}  {{ $element->symbol }}</b><br>
            @endforeach
          </span>
      </div>
      <div class="row">
          <div class="col mt-5">
              <a class="btn btn-danger btn-lg" href="#">Consultas</a>
          </div>
      </div>
@endsection