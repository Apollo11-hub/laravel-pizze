@extends('layouts.app')

@section('content')

<h1 class="container w-50">Modifiche per la Pizza {{ $pizza->nome }}</h1>

@if($errors->any())
    <ul class="alert-danger container w-50">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form class="container w-50" action="{{ route('admin.pizzas.update', $pizza) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="nome">Inserire nome pizza</label>
      <input    type="text"
                name="nome"
                class="form-control @error('nome') is-invalid @enderror"
                id="nome"
                value="{{ old('nome', $pizza->nome) }}"
                placeholder="Nome pizza">
                @error('nome')
                    <p class="error-msg text-danger">{{ $message }}</p>
                @enderror
    </div>

    <div class="form-group">
      <label for="prezzo">Inserire prezzo</label>
      <input    type="text"
                name="prezzo"
                class="form-control @error('prezzo') is-invalid @enderror"
                id="prezzo"
                value="{{ old('prezzo', $pizza->prezzo) }}"
                placeholder="Prezzo">
                @error('prezzo')
                    <p class="error-msg text-danger">{{ $message }}</p>
                @enderror
    </div>

    <div class="form-group">
      <label for="ingredienti">Inserire ingredienti</label>
            <textarea
                type="text"
                name="ingredienti"
                class="form-control  @error('ingredienti') is-invalid @enderror"
                id="ingredienti"
                value="{{ old('ingredienti', $pizza->ingredienti) }}"
                placeholder="Ingredienti"> {{ old('ingredienti', $pizza->ingredienti) }}
            </textarea>
            @error('ingredienti')
                <p class="error-msg text-danger">{{ $message }}</p>
            @enderror
    </div>

    <div class="form-group">
      <label for="vegetariana">La pizza è vegetariana?</label>
      <select   type="select"
                name="vegetariana"
                class="form-select @error('vegetariana') is-invalid @enderror"
                id="vegetariana"
                aria-label="select">
            <option value="0">No</option>
            <option value="1">Sì</option>
            </select>
            @error('vegetariana')
            <p class="error-msg text-danger">{{ $message }}</p>
            @enderror
    </div>

    <button type="submit" class="btn btn-primary">MODIFICA</button>
  </form>

@endsection
