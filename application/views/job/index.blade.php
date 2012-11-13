@layout('account')

@section('subnav')
    {{__('jobs.listing')}}
    <span class="pull-right">
        <i class='icon-plus'></i> {{HTML::link_to_route('new_job', __('jobs.create'))}}
    </span>
@endsection

@section('pagetitle')
    {{__('jobs.jobs')}}
@endsection

@section('content')
    <div class="row">
        {{ render_each('partials.job', $jobs, 'job') }}
    </div>
@endsection