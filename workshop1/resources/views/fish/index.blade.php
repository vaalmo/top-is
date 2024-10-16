@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
  @foreach ($viewData["fishes"] as $fish)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <div class="card-body text-center">
        <a>ID: {{ $fish->getId() }}</a>
        </br>
        </br>
        @if ($fish->highlight == 'weight')
          <a>Nombre: {{ $fish->getName() }}</a>
          </br>
          <a style="color: blue;">Peso: {{ $fish->getWeight() }} kg</a>
        @else
          <a><strong>Nombre: {{ $fish->getName() }}</strong></a>
        @endif
        </br>
        <a>Especie: {{ $fish->getSpecies() }}</a>
        </br>
        @if ($fish->highlight != 'weight')
          <a>Peso: {{ $fish->getWeight() }} kg</a>
        @endif
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection

