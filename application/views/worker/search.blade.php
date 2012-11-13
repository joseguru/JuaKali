@layout('account')

@section('subnav')
    Search for Workers
    <span class="pull-right">
        {{ HTML::link_to_route('workers', 'List workers') }}
    </span>
@endsection

@section('pagetitle')
    Search: Workers
@endsection