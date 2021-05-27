@extends('admin.common')

@section('title', 'Edit ' . $role->nazwa)

@section('content')

<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
      <form action="../edit" method="POST">
        @csrf
        <input type="hidden" value="{{$role->id}}" name="id">
        <input class="btn-block" disabled value="{{$role->id}}">
        <input class="btn-block" type="text" value="{{$role->nazwa}}" name="nazwa" placeholder="Nazwa"><br>
        <button class="btn-block btn btn-primary">Aktualizuj!</button>
      </form>

    </div>
  </div>
</div>

@endsection