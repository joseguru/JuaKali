@layout('master')

@section('subnav')
    Getting logged in
@endsection

@section('messages')
    {{ render('status') }}
@endsection

<!-- Sign In and Sign Up -->
@section('content')
    <div class="row">
        {{ render('auth.sign_in') }}
        {{ render('auth.sign_up') }}
    </div><!--/row-->
@endsection