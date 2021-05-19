@extends('common.main')

@section('title', 'Edit ' . $menuElement -> nazwa)

@section('content')

  <form action="/admin/menu/edit" method="POST">
      @csrf
      <input type="hidden" value="{{$menuElement->id}}" name="id">
      <input type="text" value="{{$menuElement->nazwa}}" name="nazwa" placeholder="Nazwa"><br>
      <input type="text" value="{{$menuElement->opis}}" name="opis" placeholder="Opis"><br>
      <input type="text" value="{{$menuElement->kategoria}}" name="kategoria" placeholder="Kategoria"><br>
      <input type="text" value="{{$menuElement->cena}}" name="cena" placeholder="Cena"><br>
      <button class="btn btn-primary">Update!</button>

  </form>

@endsection