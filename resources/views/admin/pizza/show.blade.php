@extends('layouts.app')

@section('content')

<h1 class="container w-50">Dettagli della Pizza {{ $pizza->nome }}</h1>

<div class="container w-50">
    <div class="card w-50">
        <h1>Pizza {{ $pizza->nome }}</h1>

        <h3>Prezzo: {{ $pizza->prezzo }}&euro;</h3>
        <h3>Ingredienti: {{ $pizza->ingredienti }}</h3>
        <h3>Vegetariana: {{ $pizza->vegetariana }}</h3>
    </div>

    <a class="btn btn-success" href="{{ route('admin.pizzas.index') }}">BACK</a>
    <a class="btn btn-primary mx-2" href="{{ route('admin.pizzas.edit', $pizza) }}">EDIT</a>

</div>

@endsection
