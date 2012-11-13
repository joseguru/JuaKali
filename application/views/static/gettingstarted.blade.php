@layout('master')

@section('subnav')
    Hello, Guest. <a class="btn btn-login" href="./auth">Login here &raquo;</a>
@endsection

@section('pagetitle')
    HTML5 is the ubiquitous platform for the web
@endsection

@section('content')
<div class="row">
<!--stack 1-->
<div class="span4">
    <ul class="thumbnails">
        <li class="span4">
            <div class="thumbnail">
                <a href="#"><img src="assets/thumb-1.jpg" alt=""></a>
                <h4>Easy Interface</h4>
                <p>Provide the Swiss Army knife of all restaurant websites. Our highly optimized websites will help you grow your business. happytables works for any country. <a href="#">Read on &raquo;</a></p>
            </div>
        </li>

        <li class="span4">
            <div class="thumbnail">
                <a href="#"><img src="assets/thumb-2.jpg" alt=""></a>
                <h4>Mobile Optimized</h4>
                <p>Restaurants, cafe's, pubs and bars with powerful and easy to build websites. Your business will be up and running, mobile and search engine optimized in minutes. <a href="#">Read on &raquo;</a></p>
            </div>
        </li>

        <li class="span4">
            <div class="thumbnail">
                <a href="#"><img src="assets/thumb-3.jpg" alt=""></a>
                <h4>The Real Deal</h4>
                <p>Our hands-on teams work with portfolio companies full-time on design, recruiting, marketing, and engineering. <a href="#">Read on &raquo;</a></p>
            </div>
        </li>
    </ul>
</div>

<!--stack 2-->
<div class="span4">
    <ul class="thumbnails">
        <li class="span4">
            <div class="thumbnail">
                <a href="#"><img src="assets/thumb-2.jpg" alt=""></a>
                <h4>Customization</h4>
                <p>Swiss Army knife of all restaurant websites. Our highly optimized websites will help you grow your business. happytables works for any country. We look for entrepreneurs with a healthy disregard for the impossible. Our team is diverse and so is our appetite for investing. <a href="#">Read on &raquo;</a></p>
            </div>
        </li>

        <li class="span4">
            <div class="thumbnail">
                <a href="#"><img src="assets/thumb-3.jpg" alt=""></a>
                <h4>You're in control</h4>
                <p>Choose exactly which cards you see. You control whether you get personalized results from your calendars, locations and searches after opting in. <a href="#">Read on &raquo;</a></p>
            </div>
        </li>

        <li class="span4">
            <div class="thumbnail">
                <a href="#"><img src="assets/thumb-1.jpg" alt=""></a>
                <h4>Our Advantage</h4>
                <p>We're dedicated to helping your revenue grow by focusing on issues that matter. Our websites are conitually analyzed to maxmimize your potential to convert an online user. We provide a lot of basic features such as food menu and event management, but have also completely automated mobile and search engine optimization. <a href="#">Read on &raquo;</a></p>
            </div>
        </li>
    </ul>
</div>

<!--stack 3-->
<div class="span4">
    <ul class="thumbnails">
        <li class="span4">
            <div class="thumbnail">
                <a href="#"><img src="assets/thumb-3.jpg" alt=""></a>
                <h4>Event Management</h4>
                <p>The Swiss Army knife of all restaurant websites. Our highly optimized websites will help you grow your business. happytables works for any country. <a href="#">Read on &raquo;</a></p>
            </div>
        </li>

        <li class="span4">
            <div class="thumbnail">
                <a href="#"><img src="assets/thumb-1.jpg" alt=""></a>
                <h4>Documentation</h4>
                <p>Our highly optimized websites will help you grow your business. happytables works for any country.<a href="#">Read on &raquo;</a></p>
            </div>
        </li>

        <li class="span4">
            <div class="thumbnail">
                <a href="#"><img src="assets/thumb-2.jpg" alt=""></a>
                <h4>Color Branding</h4>
                <p>There's no limit to the amount of pages you can have, or how you structure them (using them as drop-downs for example). <a href="#">Read on &raquo;</a></p>
            </div>
        </li>
    </ul>
</div>
</div>
<br/>
<br/>
<div class="row">
<div class="span12">
    <div class="well centered">
        Woah woah my crispy beloved developers, Y U no signup?
        {{HTML::link_to_route('auth', 'SIGNUP NOW!', '', array('class'=>"btn btn-primary"))}}
         <i class="icon icon-circle-arrow-right"></i>
    </div>
</div>
</div>
@endsection

@section('terms')

@endsection

@section('privacy')

@endsection