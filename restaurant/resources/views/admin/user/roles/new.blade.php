@extends('admin.common')

@section('title', 'Add new role')

@section('content')

<div class="container">
    <div class="row">
        <form action="/admin/users/roles/new" method="POST">
            @csrf
            <input type="text" name="nazwa" placeholder="Nazwa"><br>
            <button class="btn btn-primary">Add!</button>
        </form>
    </div>
</div>

@endsection
