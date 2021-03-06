<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
          ================================================== -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Login | Tru V Limited</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
          ================================================== -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <!-- CSS
          ================================================== -->
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/owl-carousel/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/owl-carousel/css/owl.theme.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/rs-plugin/css/settings.css')}}" media="screen" />
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="{{asset('css/ie8.css')}}" media="screen" /><![endif]-->
        <!-- Color Style -->
        <link href="{{asset('colors/blue.css')}}" rel="stylesheet" type="text/css">
        <!-- SCRIPTS
          ================================================== -->
        <script src="js/modernizr.js"></script><!-- Modernizr -->
    </head>
    <body>
        <!--[if lt IE 7]>
                <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]--> 
        <!-- Preloader -->
        <div id="preloader">
            <div id="status"></div>
        </div>
        <!-- Start Body Container -->
        <div class="body footer-style2"> 
            <!-- Start Header -->

            @include('includes.header')
            <!-- End Header --> 
            <!-- Start Content -->
            <div class="main" role="main">
                <div id="content" class="content page-content full">
                    <header class="page-header flexible parallax text-align-center parallax-overlay" style="background-color: rgba(52,152,219,.7)">
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1>Access Account</h1>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <h2><strong>Login</strong></h2>
                                <p class="lead">Tru V Limited.. changing life, living and standard</p>
                                <hr>

                                @if ($errors)
                                @foreach ($errors->all() as $error)
                                <p class="alert alert-danger"> {{ $error }}</p>
                                @endforeach
                                @endif

                                @if (Session::has('error'))
                                    <div class="alert alert-error">{{ Session::get("error") }}</div>
                                @endif
                                <form method="post" action="/login">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="email" name="email"  class="form-control input-lg" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="password" name="password"  class="form-control input-lg" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-xs-3">
                                                <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Login">
                                            </div>
                                            <div class="col-xs-6 visible-xs" style="padding-top: 4%;">
                                                <a href="/password/reset" >forgot password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-2 hidden-xs">
                                                <a href="/password/reset" >forgot password?</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="/signup" >Don't have an account? Register now!</a>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>

                            <!-- Start Sidebar -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Footer -->

            @include('includes.footer')
            <!-- End footer --> 
            <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> </div>
        <!-- End Body Container --> 
        <script src="http://code.jquery.com/jquery-latest.min.js"></script> <!-- Jquery Library Call --> 
        <script>if (typeof jQuery == 'undefined') {
    document.write(unescape("%3Cscript src='js/jquery-2.0.0.min.js' type='text/javascript'%3E%3C/script%3E"));
}</script> 
        <script src="{{asset('plugins/prettyphoto/js/prettyphoto.js')}}"></script>
        <script src="{{asset('plugins/prettyphoto/js/prettyphoto.js')}}"></script>
        <script src="{{asset('plugins/owl-carousel/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('plugins/page-scroller/jquery.pagescroller.js')}}"></script>
        <script src="{{asset('js/helper-plugins.js')}}"></script> <!-- Plugins -->
        <script src="{{asset('js/bootstrap.js')}}"></script> <!-- UI -->
        <script src="{{asset('js/init.js')}}"></script> <!-- All Scripts -->
        <!-- End Js --> 
    </body>
</html>