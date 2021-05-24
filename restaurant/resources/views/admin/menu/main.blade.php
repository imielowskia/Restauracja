@extends('admin.common')

@section('title', 'your menu')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-8">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nazwa</th>
            <th scope="col">Opis</th>
            <th scope="col">Kategoria</th>
            <th scope="col">Cena</th>
            <th scope="col">Zarządzaj</th>
          </tr>
        </thead>
        <tbody>
          @foreach($menu as $row)
          <tr>
            <th scope="row">{{$row->id}}</th>
            <td>{{$row->nazwa}}</td>
            <td>{{$row->opis}}</td>
            <td>{{$row->kategoria_id}}</td>
            <td>{{$row->cena}}</td>
            <td>
              <a href="menu/edit/{{$row->id}}"><i class="bi bi-pencil"></i></a>
              <a href="menu/delete/{{$row->id}}"><i class="text-danger bi bi-trash"></i></a>
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

    <div class="col-4">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nazwa</th>
            <th scope="col">Zarządzaj</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $row)
          <tr>
            <th scope="row">{{$row->id}}</th>
            <th scope="row">{{$row->nazwa}}</th>
            <td>
              <a href="menu/categories/edit/{{$row->id}}"><i class="bi bi-pencil"></i></a>
              <a href="menu/categories/delete/{{$row->id}}"><i class="text-danger bi bi-trash"></i></a>
            </td>
          </tr>
          @endforeach
          <tr>
            <td style="text-align: center;" class="table-secondary" colspan="6">
              <a href="menu/categories/new">
                <i class="bi bi-plus-circle-dotted" data-bs-toggle="modal" data-bs-target="#newUser"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
