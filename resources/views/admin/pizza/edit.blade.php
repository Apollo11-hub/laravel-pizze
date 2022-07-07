@extends('layouts.app')

@section('content')

<form class="container w-50" action="{{ route('admin.pizzas.update', $pizza) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="nome">Inserire nome pizza</label>
      <input    type="text"
                name="nome"
                class="form-control"
                id="nome"
                value="{{ old('nome', $pizza->nome) }}"
                placeholder="Nome pizza">
    </div>

    <div class="form-group">
      <label for="prezzo">Inserire prezzo</label>
      <input    type="text"
                name="prezzo"
                class="form-control"
                id="prezzo"
                value="{{ old('prezzo', $pizza->prezzo) }}"
                placeholder="Prezzo">
    </div>

    <div class="form-group">
      <label for="ingredienti">Inserire ingredienti</label>
      <textarea
        {{--------------------- Controllare tipe a fine creazione edit ----------------------}}
                type="text"
                name="ingredienti"
                class="form-control"
                id="ingredienti"
                value="{{ old('ingredienti', $pizza->ingredienti) }}"
                placeholder="Ingredienti"> {{ old('ingredienti', $pizza->ingredienti) }}
      </textarea>
    </div>

    <div class="form-group">
      <label for="vegetariana">La pizza è vegetariana?</label>
      <input    type="text"
                name="vegetariana"
                class="form-control"
                id="vegetariana"
                value="{{ old('vegetariana', $pizza->vegetariana) }}"
                placeholder="Si o No">
    </div>

    <button type="submit" class="btn btn-primary">MODIFICA</button>
  </form>

@endsection
