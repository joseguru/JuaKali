@layout('account')

@section('subnav')
    {{__('jobs.create_new')}}
    <span class="pull-right">
        <i class="icon icon-reorder"></i> {{HTML::link_to_route('jobs', __('jobs.listing'))}}
    </span>
@endsection

@section('pagetitle')
    {{__('jobs.create')}}
@endsection

@section('content')
<div class="row">
    <div class="span4">
        <!--user-->
        <article class="row">
            <div class="span2">
                <img class="pull-left avatar" src="/assets/user-3.png" alt="user">
                <strong>Creating by:</strong>
                <p>{{ Str::title(Auth::user()->username) }}</p>
                <span class="label label-success"><small>Administrator</small></span>
                <hr>
            </div>
        </article><!--/user-->
    </div>
    <div class="span4">
    {{Form::open('jobs', 'POST', array('class'=>'form-vertical'))}}
        <div class="control-group">
            <div class="controls">
                {{Form::input('text', 'title', Input::old('title'), array('class'=>'input-xlarge','placeholder'=>__('jobs.title')))}}
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                {{Form::select('category_id', $categories, Input::old('category_id'), $attributes)}}
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                {{Form::select('location_id', $locations, Input::old('location_id'), $attributes)}}
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="control-group">
            <div class="controls">
                {{Form::input('text', 'start_date', Input::old('start_date'), array('class'=>'input-xlarge', 'placeholder'=>__('jobs.start').' (YYYY-MM-DD)'))}}
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                {{Form::input('text', 'end_date', Input::old('end_date'), array('class'=>'input-xlarge','placeholder'=>__('jobs.end').' (YYYY-MM-DD)'))}}
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                {{Form::input('text', 'salary', Input::old('salary'), array('class'=>'input-xlarge','placeholder'=>__('jobs.salary')))}}
            </div>
        </div>
    </div>
    <div class="span8 offset4">
        <div class="control-group">
            <div class="controls">
                {{Form::textarea('details', Input::old('details'), array('rows'=>4,'class'=>'span7','placeholder'=>__('jobs.details')))}}
            </div>
        </div>

        <div class="controls">
            {{Form::submit(__('jobs.create'), array('class'=>'btn btn-small'))}}
        </div>
    </div>
    {{Form::close();}}
    </div>
</div>
@endsection
