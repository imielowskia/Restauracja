@extends('admin.common')

@section('title', 'your users')

@section('content')

<div class="container">
    <div class="row">
        <table class="table">
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

    @foreach($user as $row)
                <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->logowanie}}</td>
                    <td>{{$row->imie}}</td>
                    <td>{{$row->nazwisko}}</td>
                    <td>{{$row->stanowisko}}</td>
                    <td>
                        <a href="users/edit/{{$row->id}}"><i class="bi bi-pencil"></i></a>
                        <a href="users/delete/{{$row->id}}"><i class="text-danger bi bi-trash"></i></a>
                    </td>
                </tr>
    @endforeach
                <tr>
                    <td style="text-align: center;" class="table-secondary" colspan="6">
                        <a href="/admin/users/new">
                            <i class="bi bi-plus-circle-dotted" data-bs-toggle="modal" data-bs-target="#newUser"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
