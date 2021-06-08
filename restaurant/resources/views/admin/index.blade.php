@extends('admin.common')

@section('title', 'Admin ..')
@section('content')
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-2 col-md-4 col-6">
                <div class="icon-box">
                    <i class="ri-slice-fill"></i>
                    <h3><a href="admin/menu">Edytuj menu</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6 ">
                <div class="icon-box">
                    <i class="ri-shirt-fill"></i>
                    <h3><a href="admin/users">Edytuj pracowników</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6 ">
                <div class="icon-box">
                    <i class="ri-shirt-fill"></i>
                    <h3><a href="{{route('stoliki-kelnerzy')}}">Edytuj stoliki kelnerów</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6 ">
                <div class="icon-box">
                    <i class="ri-shirt-fill"></i>
                    <h3><a href="admin/autoTables">Auto tabele</a></h3>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection