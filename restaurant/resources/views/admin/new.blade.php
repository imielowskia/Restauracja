@extends('common.main')

@section('title', 'New think in menu')

@section('content')

<div class="container">
  <div class="row">

    <form action="/admin/menu" method="POST">
      @csrf
      <input type="text" name="nazwa" placeholder="Nazwa"><br>
      <input type="text" name="opis" placeholder="Opis"><br>
      <input type="text" name="kategoria" placeholder="Kategoria"><br>
      <input type="text" name="cena" placeholder="Cena"><br>
      <button class="btn btn-primary">Add!</button>
    </form>

  </div>
</div>
@endsection