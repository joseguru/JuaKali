@layout('account')

@section('subnav')
@parent
{{ HTML::link_to_route('messages', 'Back to Inbox', '', array('class'=>'pull-right'))}}
@endsection

@section('pagetitle')
    {{__('messages.messages')}}: {{ $message->worker->name }}
@endsection

@section('content')
    <div class="row">
        <div class="span10 offset1">
        <legend>{{__('messages.conversation')}}</legend>
        @forelse ($messages as $message)
            @if ($message->inbox)
                <blockquote>
                  <p>{{ $message->message }}</p>
                  <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                </blockquote>
            @else
                <blockquote class='pull-right'>
                  <p>{{ $message->message }}</p>
                  <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                </blockquote>
                <br><br><br><br>
            @endif
        @empty
            {{__('messages.no_messages')}}
        @endforelse
        <br>
            <legend>Reply</legend>
            {{ Form::open('message/'. $message->phone. '/reply', 'post', array('class'=>'form-horizontal')) }}
            <p>
                {{ Form::textarea('message', '' , array('class'=>'span10 offset1','rows'=>5)) }}
            </p>
            <p>
                {{ Form::input('submit', '', __('messages.reply'), array('class'=>'btn')) }}
            </p>
            {{ Form::close() }}
        </div>
    </div>
@endsection