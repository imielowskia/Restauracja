@extends('admin.common')

@section('title', 'Users')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <a href=".">
                <button type="button" class="btn-block btn btn-secondary mb-3">Powrót</button>
            </a>
        </div>
        <div class="col-12">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Login</th>
                        <th scope="col">Imię</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Stanowisko</th>
                        <th scope="col">Zarządzaj</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($users as $row)
                    <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td>{{$row->login}}</td>
                        <td>{{$row->imie}}</td>
                        <td>{{$row->nazwisko}}</td>
                        <td>{{$row->pozycja_id}}</td>
                        <td>
                            <a href="users/edit/{{$row->id}}"><i class="bi bi-pencil"></i></a>
                            <a href="users/delete/{{$row->id}}"><i class="text-danger bi bi-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                    <tr>
                        <td style="text-align: center;" colspan="6">
                            <a href="users/new">
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
