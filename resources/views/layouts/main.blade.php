<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>{{$settings->title}}</title>
    <meta name="description" content="{!! str_limit(strip_tags($settings->description), 100, '...')!!}">
    <meta name="author" content="Martin Karadzinov">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="/assets/fonts/fontello/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/assets/plugins/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="/assets/css/animations.css" rel="stylesheet">
    <link href="/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="/assets/plugins/hover/hover-min.css" rel="stylesheet">
    <link href="/assets/plugins/morphext/morphext.css" rel="stylesheet">


    <!-- The Project core CSS file -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="/assets/css/skins/lightblue.css" rel="stylesheet">


    <!-- Custom css -->
    <link href="/assets/css/custom.css" rel="stylesheet">
</head>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class="no-trans front-page   page-loader-5">

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">

   @yield('menu')

    @yield('slider')

    <div id="page-start"></div>

@yield('content')

    <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
    <!-- ================ -->
    <footer id="footer" class="clearfix dark">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-content">
                                <div class="logo-footer"><img id="logo-footer"
                                                              src="/assets/img/logo/thumbnails/{{ $settings->logo }}"
                                                              alt=""></div>
                                <p>{!!$settings->description!!}</p>
                                <ul class="list-inline mb-20">
                                    <li><i class="text-default fa fa-map-marker pr-5"></i> {{ $settings->address }}</li>
                                    <li><i class="text-default fa fa-phone pl-10 pr-5"></i> {{ $settings->phone }}</li>
                                    <li><a href="mailto:{{$settings->email}}" class="link-dark"><i
                                                    class="text-default fa fa-envelope-o pl-10 pr-5"></i>
                                            {{$settings->email}}</a></li>
                                </ul>
                                <div class="separator-2"></div>
                                <ul class="social-links circle margin-clear animated-effect-1">
                                    @if($settings->twitter)
                                        <li class="twitter"><a target="_blank" href="{{ $settings->twitter }}"><i
                                                        class="fa fa-twitter"></i></a></li>
                                    @endif
                                    @if($settings->skype)
                                        <li class="skype"><a target="_blank" href="{{ $settings->skype }}"><i
                                                        class="fa fa-skype"></i></a></li>
                                    @endif
                                    @if($settings->linkedin)
                                        <li class="linkedin"><a target="_blank" href="{{ $settings->linkedin }}"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                    @endif
                                    @if($settings->gplus)
                                        <li class="googleplus"><a target="_blank" href="{{$settings->gplus}}"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                    @endif
                                    @if($settings->youtube)
                                        <li class="youtube"><a target="_blank" href="{{$settings->youtube}}"><i
                                                        class="fa fa-youtube-play"></i></a></li>
                                    @endif
                                    @if($settings->flickr)
                                        <li class="flickr"><a target="_blank" href="{{ $settings->flickr }}"><i
                                                        class="fa fa-flickr"></i></a></li>
                                    @endif
                                    @if($settings->facebook)
                                        <li class="facebook"><a target="_blank" href="{{ $settings->facebook }}"><i
                                                        class="fa fa-facebook"></i></a></li>
                                    @endif
                                    @if($settings->pinterest)
                                        <li class="pinterest"><a target="_blank" href="{{$settings->pinterest}}"><i
                                                        class="fa fa-pinterest"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-content">
                                <h2 class="title">Контактирајте не</h2>
                                <div class="alert alert-success hidden" id="MessageSent2">
                                    We have received your message, we will contact you very soon.
                                </div>
                                <div class="alert alert-danger hidden" id="MessageNotSent2">
                                    Oops! Something went wrong please refresh the page and try again.
                                </div>
                                <form role="form" id="footer-form" class="margin-clear">
                                    <div class="form-group has-feedback mb-10">
                                        <label class="sr-only" for="name2">Име</label>
                                        <input type="text" class="form-control" id="name2" placeholder="Име"
                                               name="name2">
                                        <i class="fa fa-user form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback mb-10">
                                        <label class="sr-only" for="email2">Email address</label>
                                        <input type="email" class="form-control" id="email2" placeholder="Внесете email"
                                               name="email2">
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback mb-10">
                                        <label class="sr-only" for="message2">Порака</label>
                                        <textarea class="form-control" rows="4" id="message2" placeholder="Порака"
                                                  name="message2"></textarea>
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                    <input type="submit" value="Испрати"
                                           class="margin-clear submit-button btn btn-default">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .footer end -->

        <!-- .subfooter start -->
        <!-- ================ -->
        <div class="subfooter">
            <div class="container">
                <div class="subfooter-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">Copyright © 2020 <a target="_blank"
                                                                       href="{{$settings->mainurl}}">{{$settings->title}}</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .subfooter end -->

    </footer>
    <!-- footer end -->


</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="/assets/plugins/jquery.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="/assets/plugins/modernizr.js"></script>
<!-- jQuery Revolution Slider  -->
<script type="text/javascript" src="/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Isotope javascript -->
<script type="text/javascript" src="/assets/plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="/assets/plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script src="/assets/plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script src="/assets/plugins/jquery.validate.js"></script>
<!-- Morphext -->
<script type="text/javascript" src="/assets/plugins/morphext/morphext.min.js"></script>
<!-- Google Maps javascript -->
<!-- Google Maps -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAsNNbnqvbIiRo2hBpr3-lvmYxm3ISPtWI"></script>


<!-- Background Video -->
<script src="/assets/plugins/vide/jquery.vide.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="/assets/plugins/owl-carousel/owl.carousel.js"></script>
<!-- Pace javascript -->
<script type="text/javascript" src="/assets/plugins/pace/pace.min.js"></script>
<!-- SmoothScroll javascript -->
<script type="text/javascript" src="/assets/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="/assets/plugins/SmoothScroll.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="/assets/js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="/assets/js/custom.js"></script>
@yield('scripts')
</body>
</html>
