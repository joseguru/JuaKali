@layout('account')

@section('subnav')
    Hello, {{ Auth::user()->username }}
@endsection

@section('pagetitle')
    {{__('users.profile')}}
@endsection

@section('content')
    <div class="row">
        <div class="span4">
            {{ HTML::image($user->avatar_url(), '', array('class'=>'pull-left avatar', 'alt'=>'user')) }}
            <strong>{{__('users.username')}}:</strong>
            <p>{{ Str::title($user->username) }}</p>
            <span class="label label-success"><small>Administrator</small></span>
            <hr>
            <p>{{date('F d, Y', strtotime($user->created_at))}}</p>
        </div>
        <div class="span7">
        <legend>{{__('users.update_profile')}}</legend>
        {{ Form::open_for_files('/users/update', 'POST') }}
            <p>{{ Form::text('username', $user->username, array('class'=>'input-xlarge')) }}</p>
            <p>{{ Form::text('email', $user->email, array('class'=>'input-xlarge')) }}</p>
            <p>{{ Form::file('avatar') }}</p>
            <p>{{ Form::submit(__('users.update_profile'), array('class'=>'btn btn-small')) }}</p>
        {{ Form::close() }}
        </div>
    </div>
@endsection