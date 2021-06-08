
    @if(\App\Models\uzytkownicy::find(
    session()->get('userID'))->pozycja_id<>3)
        <script>window.location = "{{url('log-in-form')}}";</script>
@endif
