@extends('admin.common')

@section('title', 'Add new role')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
        <form action="new" method="POST">
            @csrf
                <button class="btn-block btn btn-primary">Dodaj!</button>
        </form>
    </div>
</div>
</div>

@endsection
