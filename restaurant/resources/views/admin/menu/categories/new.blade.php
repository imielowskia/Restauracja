@extends('admin.common')

@section('title', 'Add new menu categoory')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
        <form action="new" method="POST">
        @csrf
        <input class="btn-block" type="text" name="nazwa" placeholder="Nazwa"><br>
        <button class="btn-block btn btn-primary">Dodaj!</button>
      </form>
    </div>
  </div>
</div>

@endsection