@extends('admin.common')

@section('title', 'Add new menu categoory')

@section('content')

<div class="container">
  <div class="row">
    <form action="/admin/menu/categories/new" method="POST">
      @csrf
      <input type="text" name="nazwa" placeholder="Nazwa"><br>
      <button class="btn btn-primary">Add!</button>
    </form>
  </div>
</div>

@endsection