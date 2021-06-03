  
@extends('admin.common')

@section('title', $title)

@section('content')

<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
      <a href="{{url()->current()}}/..">
        <button type="button" class="btn-block btn btn-secondary mb-3">Powrót</button>
      </a>
      <form action="{{url()->current()}}/../add" method="POST">
        @csrf
        @foreach($values as $key)
          <input class="btn-block" type="{{$key['type']}}" name="{{$key['value']}}" placeholder="{{$key['value']}}">
        @endforeach
        <br><button class="btn-block btn btn-primary">Dodaj!</button>
      </form>

    </div>
  </div>
</div>

@endsection