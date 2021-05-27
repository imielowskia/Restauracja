@extends('admin.common')

@section('title', 'Add new role')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <form action="new" method="POST">
                @csrf

                <select class="btn-block custom-select" name="nazwa">
                    <option value="Kierownik">Kierownik</option>
                    <option value="Kelner">Kelner</option>
                    <option value="Kasjer">Kasjer</option>
                    <option value="Kucharz">Kucharz</option>
                </select><br><br>
                <button class="btn-block btn btn-primary">Dodaj!</button>
            </form>
        </div>
    </div>
</div>

@endsection
