<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Web App</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        {{ HTML::style('css/bootstrap.css') }}
        <style>
            body { padding-top: 105px; }
        </style>
        {{ HTML::style('css/bootstrap-responsive.css') }}
        {{ HTML::style('css/font-awesome.css') }}
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
        {{ HTML::style('css/base.css') }}
        <!--CSS-->
        {{ HTML::style('css/red.css') }}

        <!--[if lt IE 9]>
            {{ HTML::script('js/html5-3.6-respond-1.1.0.min.js') }}
        <![endif]-->
    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon icon-reorder"></i> {{ __('nav.menu') }}
                    </a>
                    <a class="brand" href="#">{{ Config::get('application.title') }}</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                          @section('nav')
                            <li>{{ HTML::link_to_route('worker', __('nav.people')) }}</li>
                            <li>{{ HTML::link_to_route('jobs', __('nav.jobs')) }}</li>
                            <li>{{ HTML::link_to_route('categories', __('nav.categories')) }}</li>
                            <li>{{ HTML::link_to_route('messages', __('nav.messages')) }}</li>
                            <li>{{ HTML::link_to_route('edit_user', __('nav.settings'), Auth::user()->id) }}</li>
                            <li>{{ HTML::link_to_route('logout', __('nav.logout')) }}</li>
                          @yield_section
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
            <div class="sub-navbar">
              <div class="container">
                <p><i class="icon icon-user"></i>
                @section('subnav')
                  Hello, {{ Auth::user()->username }}
                @yield_section
                 </p>
              </div>
            </div>
        </div>
        <!-- Error Messages -->
        @section('messages')
            {{ render('status') }}
        @yield_section
        <div class="main">
          <div class="container">
            <!-- Page title -->
            <h2><span>
              @section('pagetitle')
                Start using our web app
              @yield_section
            </span></h2>
            <!-- Yield goes here -->
            @yield('content')

          </div><!--/container-->
        </div><!--/main-->

        <footer>
          <div class="container">
            <div class="row">
              <p>
              @section('footer')
                Built by <a href="http://twitter.com/mogetutu">@mogetutu</a>
                <span class='pull-right'>
                    {{HTML::image('img/logoback.png', 'laravel')}}
                </span>
              @yield_section
              </p>
            </div>
          </div>
        </footer>

        {{ HTML::script('js/jquery-1.8.0.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/script.js') }}
    </body>
</html>
