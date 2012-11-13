@layout('account')

@section('pagetitle')
    {{ __('messages.messages')}}: {{ __('messages.inbox')}}
@endsection

@section('content')
    <div class="row">
        <div class="span8">
            <legend>{{ __('messages.inbox')}}</legend>
            <table class='table'>
                <thead>
                    <tr>
                        <th>{{__('messages.messages')}}</th>
                        <th>{{__('messages.sender')}}</th>
                        <th>{{__('messages.action')}}</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($messages as $message)
                    <tr>
                        <td>{{ Str::limit_exact($message->message,70) }}</td>
                        <td>{{ $message->worker->name }}</td>
                        <td>
                            {{ HTML::link_to_route('message', __('messages.view'), $message->id, array('class'=>'btn btn-small'))}}
                            {{ HTML::link_to_route('reply_message', __('messages.reply'), $message->id, array('class'=>'btn btn-small'))}}</td>
                    </tr>
                @empty
                    <tr><td colspan=3>{{__('messages.no_messages')}}</td></tr>
                @endforelse
                </tbody>
            </table>

        </div>
        {{ render('message.filter') }}
    </div>
@endsection