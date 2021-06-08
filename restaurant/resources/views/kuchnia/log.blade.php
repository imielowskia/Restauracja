@if(session()->has('userID'))

@php
    $uzytkownik=\App\Models\uzytkownicy::find(
    session()->get('userID'));

@endphp
@if($uzytkownik->pozycja_id<>3)
    <script>window.location = "{{url('log-in-form')}}";</script
@else
@endif
    @else<script>window.location = "{{url('log-in-form')}}";</script

    @endif
