@extends('admin.common')

@section('title', 'Users')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="../">
                <button type="button" class="btn-block btn btn-secondary mb-3">Powrót</button>
            </a>
        </div>

        <div class="col-12">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nazwa</th>
                        <th scope="col">Zarządzaj</th>
                    </tr>
                </thead>
                <tbody>

        @foreach($statuses as $row)
                    <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td>{{$row->nazwa}}</td>
                        <td>
                            <a href="statuses/{{$row->id}}"><i class="bi bi-pencil"></i></a>
                        </td>
                    </tr>
        @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
