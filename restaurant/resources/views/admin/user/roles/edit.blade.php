@extends('admin.common')

@section('title', 'Edit ' . $role->nazwa)

@section('content')

<div class="container">
  <div class="row">
    <form action="edit" method="POST">
      @csrf
      <input type="hidden" value="{{$role->id}}" name="id">
      <input type="text" value="{{$role->nazwa}}" name="nazwa" placeholder="Nazwa"><br>
      <button class="btn btn-primary">Update!</button>
    </form>
  </div>
</div>

@endsection