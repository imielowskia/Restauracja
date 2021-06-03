  
@extends('admin.common')

@section('title', $title)

@section('content')

<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
      <a href="{{url()->current()}}/../..">
        <button type="button" class="btn-block btn btn-secondary mb-3">Powrót</button>
      </a>
      <form action="{{url()->current()}}/../../update" method="POST">
        @csrf
        <input type="hidden" value="{{$object->id}}" name="id">
        <input class="btn-block" disabled value="{{$object->id}}">
        @foreach($values as $key)
          <input class="btn-block" type="{{$key['type']}}" value="{{$object[$key['value']]}}" name="{{$key['value']}}" placeholder="{{$key['value']}}"><br>
        @endforeach
        <button class="btn-block btn btn-primary">Aktualizuj!</button>
      </form>

    </div>
  </div>
</div>

@endsection