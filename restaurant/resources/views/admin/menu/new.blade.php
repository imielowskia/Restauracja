@extends('admin.common')

@section('title', 'Add new menu element')

@section('content')

<div class="container">
  <div class="row">
    <form action="new" method="POST">
      @csrf
      <input type="text" name="nazwa" placeholder="Nazwa"><br>
      <input type="text" name="opis" placeholder="Opis"><br>
      <select class="custom-select" name="kategoria_id">
        @foreach($categories as $row)
          <option value="{{$row->id}}">{{$row->nazwa}}</option>
        @endforeach
      </select><br>
      <input type="text" name="cena" placeholder="Cena"><br>
      <button class="btn btn-primary">Add!</button>



    </form>
  </div>
</div>

@endsection