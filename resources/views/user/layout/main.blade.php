<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/color4.css') }}" id="color4">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

    <!-- Animation headline Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/headline.css') }}">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
    <link href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet" />

    <!-- Favicon and to\
        u\ch\\ ic\\
        ons  -->
    <link href={{ asset("images/logo.png") }} rel="icon" sizes="48x48">
    <link href={{ asset("images/logo.png") }}  rel="icon">
    <link href={{ asset("images/logo.png") }}  rel="icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>
<body class="header_sticky">
     <!-- Preloader -->
     <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    <!-- Boxed -->
    <div class="boxed">

    <div class="top padding-none style5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-6">
                    <p class="info-text margin-top9">Welcome to Sage Advisory</p>
                </div><!-- /.col-md-7 -->
                <div class="col-lg-5 col-sm-6">
                    <div class="wrap-top clearfix">
                        <aside  class="widget reponsive-none float-right margin-left32">
                            <div class="btn-click style2 color-white">
                                <a href="#" class="flat-button style2">Contact us</a>
                            </div>
                        </aside>
                        <ul class="social-links float-right margin-left25 margin-top9 flat-top">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.top -->

    <div class="flat-header-wrap">
        <!-- Header -->
        <div class="header widget-header widget-header-style2 clearfix">
            <div class="container">
                <div class="header-wrap clearfix">
                    <div class="row">
                        <div class="col-lg-3">
                            <div id="logo" class="logo">
                                <a href="/" rel="home">
                                    <img src={{ asset("images/logo.png") }}  alt="image" class="herologo">
                                </a>
                            </div><!-- /.logo -->

                        </div>
                        <div class="col-lg-9">
                            <div class="wrap-widget-header clearfix">
                                <aside class="widget widget-info color35d">
                                    <div class="textwidget clearfix">
                                        <div class="info-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="info-text">
                                            <h6>8:00 AM - 6:00 PM</h6>
                                            <p>Monday to Saturday</p>
                                        </div>
                                    </div>
                                </aside>
                                <aside class="widget widget-info color35d">
                                    <div class="textwidget clearfix">
                                        <div class="info-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="info-text">
                                            <h6>10 Street, Mumbai</h6>
                                            <p>Maharashtra, India</p>
                                        </div>
                                    </div>
                                </aside>
                                <aside class="widget widget-info color35d">
                                    <div class="textwidget clearfix">
                                        <div class="info-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="info-text">
                                            <h6>+91-9840345495</h6>
                                            <p>info@sageadvisory.in</p>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.header-wrap -->

            </div>
        </div><!-- /.header -->
        <header id="header" class="header header-style1 header-classic">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-wrap-header">
                            <div class="nav-wrap clearfix">
                                <nav id="mainnav" class="mainnav color-white">
                                    <ul class="menu">
                                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="{{ Request::is('services*') ? 'active' : '' }}"><a href="/services">Services</a></li>
                                        <li class="{{ Request::is('solutions*') ? 'active' : '' }}"><a href="/solutions">Solutions</a></li>
                                        <li class="{{ Request::is('tools*') ? 'active' : '' }}">
                                            <a href="#">Tools</a>
                                            <ul class="submenu">
                                                <li><a href="#">Tool 1</a>
                                                </li>
                                                <li><a href="#">Tool 12</a>
                                                </li>

                                            </ul><!-- /.submenu -->
                                        </li>
                                        <li class="{{ Request::is('about-us*') ? 'active' : '' }}"><a href="/about-us">About us</a>
                                        </li>
                                        <li class="{{ Request::is('contact-us*') ? 'active' : '' }}"><a href="/contact-us">Contact us</a>
                                        </li>
                                    </ul><!-- /.menu -->
                                </nav><!-- /.mainnav -->
                                <div class="btn-menu">
                                    <span></span>
                                </div><!-- //mobile menu button -->
                            </div><!-- /.nav-wrap -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

@yield('content')


    <!-- Footer -->
    <footer class="footer widget-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 reponsive-mb30">
                    <div class="widget-logo">
                        <div id="logo-footer" class="logo">
                            <a href="index.html" rel="home">
                                <img src='{{ asset("images/logo.png") }}' class="herologo" alt="image">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-lg-4 col-sm-12 reponsive-mb30">
                    <div class="widget widget-out-link clearfix">
                        <h5 class="widget-title">Our Links</h5>
                        <ul class="one-half">
                            <li><a href="/">Home</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/solutions">Solutions</a></li>
                        </ul>
                        <ul class="one-half">
                            <li><a href="/tools">Tools</a></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-lg-4 col-sm-12 reponsive-mb30">
                    <div class="widget">
                        <h5 class="widget-title">Address</h5>
                        <ul class="flat-information">
                            <li><i class="fa fa-map-marker"></i><a href="#">Mumbai, Maharashtra, India</a></li>
                            <li><i class="fa fa-phone"></i><a href="#">+91-9840345495</a></li>
                            <li><i class="fa fa-envelope"></i><a href="#">info@sageadvisory.in</a></li>
                        </ul>
                    </div>
                </div><!-- /.col-md-3 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer>

    <!-- Bottom -->
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="copyright">
                        <p>Handcrafted by <a href="https://www.weswitched.studio">We Switched Studio</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="social-links style2 text-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- bottom -->

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>

    </div>
    <!-- Javascript -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-countTo.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/js/headline.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Revolution Slider -->
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/slider.js') }}"></script>
    <script src="{{ asset('assets/plugins/feather-icons/feather.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script>
        feather.replace()
      </script>
</body>
</html>
