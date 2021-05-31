  
@extends('admin.common')

@section('title', 'Edit ' . $table->nazwa)

@section('content')

<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
      <form action="../update" method="POST">
        @csrf
        <input type="hidden" value="{{$table->id}}" name="id">
        <input class="btn-block" disabled value="{{$table->id}}">
        <input class="btn-block" type="text" value="{{$table->numer}}" name="numer" placeholder="numer"><br>
        <button class="btn-block btn btn-primary">Aktualizuj!</button>
      </form>

    </div>
  </div>
</div>

@endsection