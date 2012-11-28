@layout('account')

@section('subnav')
    Hello, {{ Auth::user()->username }}
@endsection

@section('pagetitle')
Dashboard
@endsection
