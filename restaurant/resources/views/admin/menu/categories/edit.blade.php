@extends('admin.common')

@section('title', 'Edit ' . $category->nazwa)

@section('content')

<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
      <form action="../edit" method="POST">
        @csrf
        <input type="hidden" value="{{$category->id}}" name="id">
        <input class="btn-block" disabled value="{{$category->id}}">
        <input class="btn-block" type="text" value="{{$category->nazwa}}" name="nazwa" placeholder="Nazwa"><br>
        <button class="btn-block btn btn-primary">Aktualizuj!</button>
      </form>
    </div>
  </div>
</div>

@endsection