@layout('account')

@section('subnav')
    {{__('categories.categories')}} <i class="icon-arrow-right"></i> {{$category->category_name}}
@endsection

@section('pagetitle')
    {{$category->category_name}}
@endsection

@section('content')
<div class="row">
    <div class="span6">
        <legend>Workers</legend>
        @forelse ($category->workers as $worker)
            {{ $worker->name }}
        @empty
            {{__('categories.no_workers')}}
        @endforelse
    </div>

    <div class="span6">
        <legend>Jobs</legend>
        @forelse ($category->jobs as $job)
            {{ $job->title }}
        @empty
            {{__('categories.no_jobs')}}
        @endforelse
    </div>
</div>
@endsection