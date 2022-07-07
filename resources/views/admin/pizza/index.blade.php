@extends('layouts.app')

@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Pizze</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pizzas as $pizza)
            <tr>
                <th scope="row">{{ $pizza->id }}</th>
                <td>{{ $pizza->nome }}</td>
                <td>{{ $pizza->prezzo }}&euro;</td>
                <td class="d-flex">
                    <a class="btn btn-success" href="{{ route('admin.pizzas.show', $pizza) }}">SHOW</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection
