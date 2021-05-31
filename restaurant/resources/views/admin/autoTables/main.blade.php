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
        <div class="col-6 bg-dark offset-3 text-light border border-light py-3 rounded">
            {!! $message !!}
        </div>
    </div>
    <div class="row mt-5">
        <div class="offset-3 col-xl-2 col-md-4 col-6 ">
            <div class="icon-box">
                <i class="ri-shirt-fill"></i>
                <h3><a href="autoTables/edit/roles">Edytuj pozycje</a></h3>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 ">
            <div class="icon-box">
                <i class="ri-dashboard-line"></i>
                <h3><a href="{{url('/admin/autoTables/tables/show')}}">Edytuj stoliki</a></h3>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 ">
            <div class="icon-box">
                <i class="ri-align-center"></i>
                <h3><a href="autoTables/edit/statuses">Edytuj statusy</a></h3>
            </div>
        </div>
    </div>
</div>

@endsection
