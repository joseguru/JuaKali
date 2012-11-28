@layout('master')

@section('subnav')
    Hello, Guest. <a class="btn btn-login" href="./auth">Login here &raquo;</a>
@endsection

@section('pagetitle')
    Our official weblog
@endsection

@section('content')
<div class="row">
<div class="span9">
    <!--first article-->
    <article class="row">
        <!--author meta-->
        <div class="span2">
            <img class="pull-left avatar" src="assets/user-2.png" alt="user"/>
            <strong>Written by:</strong>
            <p>Lucida Sans</p>
            <span class="label label-success"><small>Editor in Chief</small></span>
            <hr>
            <p>September 12, 2019</p>
            <ul class="tags">
                <li>Social Media</li>
                <li>Trending Tech</li>
                <li>Branding</li>
                <li>iOS Apps</li>
            </ul>
        </div>
        <!--post-->
        <div class="span7">
            <h3>Win a Free Copy of PhotoSweeper</h3>
            <img class="post-image" src="assets/post-image-1.png" alt="blog post">
            <p>That’s what’s exciting about PhotoSweeper. It’s a nicely designed app that takes the pain out of sorting and removing your duplicate pictures. It uses 5 methods to find duplicate photos, even ones that have been edited or saved in other apps. Then, you can preview photos together to decide which one to keep. It’ll make organizing your photos easier than ever. Earlier this our team gave PhotoSweeper a 9 out of 10 in our review, and found it to be a great way to reduce the space pictures are taking up on your hard drive. That’s why we’re excited to have 25 copies of it to giveaway to our readers!...</p>
            <a href="#">Continue reading &raquo;</a>
        </div><!--end post-->
    </article><!--/row-->

    <hr>

    <!--second article-->
    <article class="row">
        <!--author meta-->
        <div class="span2">
            <img class="pull-left avatar" src="assets/user-1.png" alt="user"/>
            <strong>Written by:</strong>
            <p>Cooper Black</p>
            <span class="label label-success"><small>Tech Writer</small></span>
            <hr>
            <p>September 12, 2019</p>
            <ul class="tags">
                <li>Photoshop</li>
                <li>Image processing</li>
                <li>Software</li>
                <li>Adobe</li>
            </ul>
        </div>
        <!--post-->
        <div class="span7">
            <h3>Try Organizing Your Images with Pixa Beta</h3>
            <img class="post-image" src="assets/post-image-2.png" alt="blog post">
            <p>Photographers and digital artists alike always try to keep their images organized neatly. If you’re a designer, this is typically vital to doing your job as well. There are a bunch of different ways to organize these files on your Mac, from Adobe’s Bridge (included with Photoshop and other software) to iPhoto, Apple’s default solution for OS X. I’ve never been a keen user of either of these because the former is too complex in areas and the latter can often dawdle here and there...</p>
            <a href="#">Continue reading &raquo;</a>
        </div><!--end post-->
    </article><!--/row-->

    <hr>

    <!--third article-->
    <article class="row">
        <!--author meta-->
        <div class="span2">
            <img class="pull-left avatar" src="assets/user-3.png" alt="user"/>
            <strong>Written by:</strong>
            <p>Calisto MT</p>
            <span class="label label-success"><small>Advisor</small></span>
            <hr>
            <p>September 12, 2019</p>
            <ul class="tags">
                <li>Social Media</li>
                <li>Trending Tech</li>
                <li>Branding</li>
                <li>iOS Apps</li>
            </ul>
        </div>
        <!--post-->
        <div class="span7">
            <h3>Hacking your brain to think like a user</h3>
            <img class="post-image" src="assets/post-image-3.png" alt="blog post">
            <p>When I first started designing interactive products, it was a struggle. Small projects were fine. But when the interactions got more complex, I noticed that tools, team communication, and even my own thinking started breaking down. I see many startups facing these same problems today. So I wanted to share...</p>
            <a href="#">Continue reading &raquo;</a>
        </div><!--end post-->
    </article><!--/row-->
    <hr>
</div><!--/span9-->

<!--sidebar-->
<aside class="span3">
    <div class="well">
        <h4>Blog Categories:</h4>
        <hr>
            <ul class="categories">
                <li><a href="#"><i class="icon icon-circle-arrow-right"></i> Networking</a></li>
                <li><a href="#"><i class="icon icon-circle-arrow-right"></i> Web applications</a></li>
                <li><a href="#"><i class="icon icon-circle-arrow-right"></i> iOS development</a></li>
                <li><a href="#"><i class="icon icon-circle-arrow-right"></i> Latest news</a></li>
                <li><a href="#"><i class="icon icon-circle-arrow-right"></i> New releases</a></li>
                <li><a href="#"><i class="icon icon-circle-arrow-right"></i> Most downloaded</a></li>
            </ul>
        <hr>
        <p>Don't miss the chance to visit our headquarter from monday through friday from 9am to 5pm. Best regards from the whole Venture Team.</p>
    </div><!--/well-->

    <div class="well">
        <h4>Newsletter Signup:</h4>
        <hr>
        <form class="centered">
            <input class="" type="text" placeholder="Email">
            <br/>
            <br/>
            <button type="submit" class="btn">Ok, sign me up!</button>
        </form>
    </div><!--/well-->

    <div class="well adspace">
        <h4>Sponsors:</h4>
        <hr>
        <a href="#"><img src="assets/ad-1.png" alt="ad"/></a>
        <a href="#"><small>Learn Photoshop</small></a>
        <a href="#"><img src="assets/ad-2.png" alt="ad"/></a>
        <a href="#"><small>Learn Elements</small></a>
        <a href="#"><img src="assets/ad-3.png" alt="ad"/></a>
        <a href="#"><small>Learn Lightroom</small></a>

    </div><!--/well-->

</aside><!--/span3-->

</div><!--/.row-->
@endsection

@section('terms')

@endsection

@section('privacy')

@endsection