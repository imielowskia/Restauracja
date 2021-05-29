  
@extends('admin.common')

@section('title', 'Edit ' . $status->nazwa)

@section('content')

<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
      <form action="../status" method="POST">
        @csrf
        <input type="hidden" value="{{$status->id}}" name="id">
        <input class="btn-block" disabled value="{{$status->id}}">
        <input class="btn-block" type="text" value="{{$status->nazwa}}" name="nazwa" placeholder="Nazwa"><br>
        <button class="btn-block btn btn-primary">Aktualizuj!</button>
      </form>

    </div>
  </div>
</div>

@endsection