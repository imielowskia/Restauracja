@extends('admin.common')

@section('title', 'Edit ' . $category->nazwa)

@section('content')

<div class="container">
  <div class="row">
    <form action="." method="POST">
      @csrf
      <input type="hidden" value="{{$category->id}}" name="id">
      <input type="text" value="{{$category->nazwa}}" name="nazwa" placeholder="Nazwa"><br>
      <button class="btn btn-primary">Update!</button>
    </form>
  </div>
</div>

@endsection