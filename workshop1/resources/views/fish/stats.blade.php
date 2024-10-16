@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
    <h3>Peces por Especie</h3>
    <ul>
        @foreach ($viewData["speciesCount"] as $speciesData)
        <li>{{ $speciesData->total }} {{ $speciesData->species }}</li>
        @endforeach
    </ul>
    <h3>Peso Máximo</h3>
    <p>El peso más grande encontrado es: {{ $viewData["maxWeight"] }} kg</p>
</div>
@endsection
