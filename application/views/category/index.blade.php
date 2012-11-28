@layout('account')

<!-- subnav -->
@section('subnav')
    {{__('categories.job_categories')}}
@endsection

<!-- Page title -->
@section('pagetitle')
    {{__('categories.job_categories')}}
@endsection

<!-- Content -->
@section('content')
<div class="row">

    @if ($categories)
        {{ render_each('partials.category', $categories, 'category') }}
    @else
        {{__('categories.no_categories')}}
    @endif

</div>
@endsection