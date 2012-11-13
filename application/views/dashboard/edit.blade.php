@layout('account')
@section('subnav')
    Hello, {{ Auth::user()->username }}
@endsection