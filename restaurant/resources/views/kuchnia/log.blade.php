
    @if(session()->get('userID')<>3)
        <script>window.location = "{{url('kuchnia')}}";</script>
@endif
