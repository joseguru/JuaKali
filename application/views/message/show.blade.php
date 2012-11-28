@layout('account')

@section('subnav')
@parent
{{ HTML::link_to_route('messages', 'Back to Inbox', '', array('class'=>'pull-right'))}}

@endsection

@section('pagetitle')
    {{ __('messages.message') }}: {{ $worker }}
@endsection

@section('content')
    <div class="row">
        <div class="span10 offset1">
        <legend>{{ __('messages.message') }}</legend>
        <blockquote>
            <p>{{ $message->message }}</p>
            <small>{{date('F d, Y', strtotime($message->created_at))}}
                <cite title="Source Title"> @ {{date('H:i:s a', strtotime($message->created_at))}}</cite>
            </small>
        </blockquote>
        <br>
        <legend>{{ __('messages.reply') }}</legend>
        {{ Form::open('message/'. $message->id. '/reply', 'post', array('class'=>'form-horizontal')) }}
        <p>
            {{ Form::textarea('message', '' , array('class'=>'span10 offset1','rows'=>5)) }}
        </p>
        <p>
            {{ Form::input('submit', '', __('messages.reply'), array('class'=>'btn')) }}
            {{ HTML::link_to_route('conversation_message', __('messages.view_conversation'), $message->id, array('class' => 'pull-right btn')) }}
        </p>
        {{ Form::close() }}
        </div>
    </div>
@endsection