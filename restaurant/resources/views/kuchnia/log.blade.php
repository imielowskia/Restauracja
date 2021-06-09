
@php $session_id = Session::get('userID');
$user=\App\Models\uzytkownicy::find($session_id);
@endphp
@if($session_id=='')
    <script>window.location = "{{url('log-in-form')}}";</script
@else
    @if($user->pozycja_id<>3)
        <script>window.location = "{{url('log-in-form')}}";</script
    @endif
@endif


