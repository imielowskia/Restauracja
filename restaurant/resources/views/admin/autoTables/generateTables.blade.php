@extends('admin.common')

@section('title', 'Add new menu categoory')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
        <form action="{{url('/admin/autoTables/generateTables')}}" method="POST">
        @csrf
        <input class="btn-block" type="text" name="ilosc" placeholder="ilosc"><br>
        <button class="btn-block btn btn-primary">Generuj!</button>
      </form>
    </div>
  </div>
</div>

@endsection