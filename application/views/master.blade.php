<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Web App</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        {{ Asset::styles() }}

        <!--[if lt IE 9]>
            {{ HTML::script('js/html5-3.6-respond-1.1.0.min.js') }}
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon icon-reorder"></i> Menu
                    </a>
                    <a class="brand" href="#">{{Config::get('application.title')}}</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                          @section('nav')
                            <li>{{ HTML::link_to_route('home', 'Home') }}</li>
                            <li>{{ HTML::link_to_route('getting-started', 'Getting Started') }}</li>
                            <li>{{ HTML::link_to_route('blog', 'Blog') }}</li>
                            <li>{{ HTML::link_to_route('about', 'About') }}</li>
                            <li>{{ HTML::link_to_route('contact', 'Contact') }}</li>
                          @yield_section
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
            <div class="sub-navbar">
              <div class="container">
                <p><i class="icon icon-user"></i>
                @section('subnav')
                  Hello, Guest. Thanks for logging in.
                @yield_section
                 </p>
              </div>
            </div>
        </div>
        <!-- Error Messages -->
        @section('messages')

        @yield_section

        <!-- Slider -->
        @section('slider')

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

            @section('terms')
            <div class="row">
              <div class="span12">

                  <strong>Terms and conditions:</strong>
                  <p>This Agreement sets out the legally binding terms between you and GetWork. This Agreement applies to all Users of the Service, including users who listen to or share audio content and or its associated metadata, information, and other materials or services on the Site. This Agreement applies to all Users regardless of if they are using the Service anonymously or as a registered user. If you choose to use the Service, you will be agreeing to abide by all of the terms and conditions of this Terms and Conditions of Use Agreement (the "Agreement"). GetWork may, in its sole discretion, change, add or remove portions of this Agreement at any time, and by continuing to use the Service you agree to be bound by such revisions or modifications. If GetWork does so, such changes will be posted on the Service, or sent to you via e-mail.</p>

              </div>
          </div>
          @yield_section


          @section('privacy')
          <div class="row">
              <div class="span12">
                  <div class="alert alert-block">

                      <strong>Privacy policy:</strong> For clarification purposes, you retain all of your ownership rights in your User Content. However, unless GetWork indicates otherwise, by submitting User Content to the Service you grant GetWork and its affiliates a nonexclusive, royalty-free, perpetual, irrevocable, and fully sublicensable right to use, display, perform, reproduce, publish, and distribute such User Content throughout the world via the Service. You also grant each user of the Service a non-exclusive license to access your User Content through the Service, and to use, reproduce, distribute, display and perform such User Content as permitted through the functionality of the Service and under this Agreement. You grant GetWork and it affiliates the right to use the name that you submit in connection with such User Content.

                  </div>
              </div>
          </div>
          @yield_section

          </div><!--/container-->
        </div><!--/main-->

        <footer>
          <div class="container">
            <div class="row">
              <p>
              @section('footer')
                Built by <a href="http://twitter.com/mogetutu">@mogetutu</a>
              @yield_section
              </p>
            </div>
          </div>
        </footer>

        {{ Asset::scripts() }}
    </body>
</html>
