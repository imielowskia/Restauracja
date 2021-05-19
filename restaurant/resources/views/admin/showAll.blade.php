@extends('common.main')

@section('title', 'Menu all')

@section('content')

<div class="container">
  <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nazwa</th>
          <th scope="col">Opis</th>
          <th scope="col">Kategoria</th>
          <th scope="col">Cena</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>

  @foreach($menu as $row)
    
            <tr>
              <th scope="row">{{$row->id}}</th>
              <td>{{$row->nazwa}}</td>
              <td>{{$row->opis}}</td>
              <td>{{$row->kategoria}}</td>
              <td>{{$row->cena}}</td>
              <td>
                <a href="menu/{{$row->id}}">
                  <i class="bi bi-pencil"></i>
                </a>
              </td>
            </tr>

  @endforeach
        <tr>
          <td style="text-align: center;" class="table-secondary" colspan="6">
            <a href="menu/new">
              <i class="bi bi-plus-circle-dotted" data-bs-toggle="modal" data-bs-target="#newUser"></i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection