<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
    <html class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
    
<!-- Mirrored from localhost:3000/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2017 09:15:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
                Worditt - create words for anything
        </title>
    <meta name="keywords" content="words, create, worditt">
        <meta name="description" content="Create words for anything">
        <meta name="robots" content="index,follow">
        <meta name="pagename" content="Worditt - create words for anything">
        <meta name="author" content="worditt">
        <meta name="designer" content="worditt">
        <meta name="owner" content="wordit">
        <meta name="url" content="https://www.worditt.com/">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="rating" content="General">
        <meta name="revisit-after" content="7 days">
        <meta name="og:title" content="Worditt - create words for anything"/>
        <meta name="og:url" content="https://www.worditt.com/"/>
        <meta name="og:description" content="Create words for anything"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="application/opensearchdescription+xml" rel="search" href="{{ asset('osd.html')}}"/>

        <link rel='shortcut icon' href="{{ asset('img/global/favicon-1.ico')}}"" type='image/x-icon'>


        <!-- Place favicon.ico in the root directory -->

        <![if !lt IE 9]>
        <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
        <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"> -->
        <![endif]>
        <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
    </head>
<body class=""><script id="__bs_script__">//<![CDATA[
    document.write("<script async src='{{ asset('browser-sync/browser-sync-client8d33.js?v=2.18.8')}}'><\/script>".replace("HOST", location.hostname));
//]]></script>
<script type="text/javascript">
    window.location = "#display";
</script>


<!--[if lt IE 9]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Site content here -->
<!-- First, the site wrapper: contains all the elements on the site -->

                
    <div id="display" class="auth-wrapper pageslidin">
        <div class="pageslidin-header clearfix">
            <a href="{{url()->previous()}}" class="pageslidin-back">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </a>
            @include('layouts.flash')
        @yield('display')
  
    <div data-rep-popover-content="share_popover" class="c-popover small st-popup">
    <ul class="st-popup-list">
        <li><a href="#" data-rep-social="facebook" data-rep-socialUrl="http://www.storytellaa.com" data-rep-socialTitle="Start a story" data-rep-socialSummary="I just started a story, check it out"><i class="fa fa-facebook fbb" aria-hidden="true"></i> Facebook</a></li>
        <li><a href="#" data-rep-social="twitter" data-rep-socialUrl="http://www.storytellaa.com" data-rep-socialTitle="I just started a story, check it out." data-rep-socialHashtags="storytellaa" data-rep-socialHandle="storytellaa"><i class="fa fa-twitter tww" aria-hidden="true"></i> Twitter</a></li>
    </ul>
    </div>

    <!-- Footer -->
    <!--<a href="#" class="scroll-to-top" data-rep-scrollto>Top</a>-->
    <!-- Site footer ends -->


<!-- Scripts
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.2.min.js')}}"><\/script>')</script>
    <script src="{{ asset('js/min/app.min.js')}}"></script>
    
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>-->
    </body>

<!-- Mirrored from localhost:3000/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2017 09:15:16 GMT -->
</html>
