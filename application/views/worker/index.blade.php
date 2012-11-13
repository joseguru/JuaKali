@layout('account')
<!-- SubNav -->
@section('subnav')
    List of Workers
    <span class="pull-right">
        {{ HTML::link_to_route('search_worker', 'Search') }}
    </span>
@endsection

<!-- Page Title -->
@section('pagetitle')
    Workers
@endsection

<!-- Content -->
@section('content')
<div class="row">
    <div class="span9">
    <table class='table'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Location</th>
                <th>Speciality</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($workers as $worker)
            <tr>
                <td>{{$worker->name}}</td>
                <td>{{$worker->phone}}</td>
                <td>{{$worker->location->location_name}}</td>
                <td>{{$worker->category->category_name}}</td>
                <td>{{HTML::link_to_route('reply_message', 'Send Message', $worker->phone, array('class'=>'btn btn-small'))}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No Workers</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    </div>
</div>
@endsection