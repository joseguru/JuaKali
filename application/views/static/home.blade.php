@layout('master')

@section('subnav')
    Home
@endsection

@section('pagetitle')
    The Home of GetWork
@endsection
@section('slider')
<header>
    <div class="container">
        <div class="row">
            <div class="span8 offset2">
                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item"><img src="/assets/app-1.png" alt="app"/></div>
                        <div class="item"><img src="/assets/app-2.png" alt="app"/></div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>
                <h1>Not your regular web application</h1>
                <p>The next big thing is arround the corner and you'll be part of it.</p>
            </div>
        </div>
    </div>
</header>

<div class="strip">
    <div class="container">
        <div class="row">
            <p>
                Empowered by more than 40,000 customers around the world. Developers, Y U no signup?
                {{HTML::link_to_route('auth', 'SIGNUP NOW!', '', array('class'=>"btn btn-primary"))}}
            </p>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row feature-blocks">
<div class="span3">
    <h3><i class="icon icon-beaker"></i> Technology</h3>
    <p>And purely one near this hey therefore darn firefly had ducked overpaid wow irrespective some tearful and mandrill yikes considering far above. Physically less snickered much and and while</p>
    <a class="btn" href="#"><i class="icon  icon-info-sign"></i> where more partook</a>
</div>
<div class="span3">
    <h3><i class="icon icon-cloud"></i> Cloud Based</h3>
    <p>Purely one near this hey therefore darn firefly had ducked overpaid wow irrespective some tearful and mandrill yikes considering far above. Physically less</p>
    <a class="btn" href="#"><i class="icon  icon-info-sign"></i> where more partook &raquo;</a>
</div>
<div class="span3">
    <h3><i class="icon icon-random"></i> Cross-Platform</h3>
    <p>One near this hey therefore darn firefly had ducked overpaid wow irrespective some tearful and mandrill yikes considering far above. Physically less snickered much and</p>
    <a class="btn" href="#"><i class="icon  icon-info-sign"></i> where more partook &raquo;</a>
</div>
 <div class="span3">
    <h3><i class="icon icon-github"></i> Integrated</h3>
    <p>Near this hey therefore darn firefly had ducked overpaid wow irrespective some tearful and mandrill yikes considering far above. Physically less snickered much and and while</p>
    <a class="btn" href="#"><i class="icon  icon-info-sign"></i> where more partook &raquo;</a>
</div>
</div>

<h2><span>I've seen the future, it's in my browser</span></h2>

<div class="row">
<div class="span12">
    <h4><i class="icon icon-bullhorn"></i> Get to know what users are saying about us</h4>
</div>
</div>


<div class="row">
<div class="span12">
    <p><img class="pull-left avatar" src="/assets/user-2.png" alt="user"/> <strong>Lucida Sans wrote:</strong><br/>
    "I've ever had downtime since the switch. These guys are friendly and down to earth. I would definitely recommend for anyone looking for a solid host for their sites."</p>
</div>
</div>

<div class="row">
<div class="span12">
    <p><img class="pull-left avatar" src="/assets/user-3.png" alt="user"/> <strong>Calisto MT wrote:</strong><br/>
    "They are great - I wish they IPs were cheaper - but the uptime is awesome and the support is fast - I can always get ahold of them on live chat or phone call."</p>
</div>
</div>

<h2><span>HTML5 works hard and we mean business</span></h2>

<div class="row">
<div class="span12">
    <h4><i class="icon icon-shopping-cart"></i> Affordable pricing</h4>
    <p>FREE SITEBUILDER! Not sure how to build a website? No problem at all! RVSiteBuilder and Parallels SiteBuilder are included on all eleven2 hosting plans. Build a fully featured website in minutes using a fantastic range of tools.
    FREE SOFTWARE INSTALLER! Install over 110 Scripts Instantly with Softaculous (built in with the e2Panel). It's super easy to use, and you can receive email alerts when new script upgrades are available!</p>

    <hr>

    <h4><i class="icon icon-certificate"></i> A company you can rely on!</h4>
    <p>FREE SITE MIGRATIONS! Are you currently hosting your website with another company? Receiving a subpar service? Move to eleven2 and start being treated like a real person! We help you transfer everything over to us, free of charge!
    24X7 PREMIUM TECHNICAL SUPPORT Our doors never close! We can guarantee true 24/7 tech support, weather it be 5am on Christmas Day, or July 4th, we are always here to assist you! Start a live chat or give our tech team a call.</p>

    <hr>

    <h4><i class="icon icon-group"></i> Amazing live support</h4>
    <p>Our live support team are on site 24 hours a day, 7 days a week. Anytime you need us, we're here to answer any of your questions, problems and concerns. We're so confident our hosting rocks, that if you don't like our shared or reseller hosting, you can receive a full refund within 60 days of signing up!</p>
    <a class="btn btn-info" href="contact.html">Holy Cow!</a>
    <a class="btn btn-success" href="contact.html">Holy Cow!</a>
    <a class="btn btn-warning" href="contact.html">Holy Cow!</a>
    <a class="btn btn-danger" href="contact.html">Holy Cow!</a>
    <a class="btn btn-inverse" href="contact.html">Holy Cow!</a>
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
    {{--expr
@endsection