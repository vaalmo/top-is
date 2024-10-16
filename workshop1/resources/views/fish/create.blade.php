@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Crear Pez</div>
        <div class="card-body">
          @if($errors->any())
          <ul id="errors" class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
          @endif

          <form method="POST" action="{{ route('fish.save') }}">
            @csrf
            <input type="text" class="form-control mb-2" placeholder="Ingresa el nombre" name="name" value="{{ old('name') }}" />

            <select name="species" class="form-control mb-2">
              <option value="">Selecciona una especie</option>
              <option value="Salmon" {{ old('species') == 'Salmon' ? 'selected' : '' }}>Salmón</option>
              <option value="Tuna" {{ old('species') == 'Tuna' ? 'selected' : '' }}>Atún</option>
              <option value="Trout" {{ old('species') == 'Trout' ? 'selected' : '' }}>Trucha</option>
              <option value="SapoPerro" {{ old('species') == 'SapoPerro' ? 'selected' : '' }}>Sapo Perro</option>
            </select>

            <input type="text" class="form-control mb-2" placeholder="Ingresa el peso" name="weight" value="{{ old('weight') }}" />

            <input type="submit" class="btn btn-primary" value="Send" />
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection