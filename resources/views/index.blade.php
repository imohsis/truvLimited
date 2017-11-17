<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
          ================================================== -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Tru V Limited</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
          ================================================== -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <!-- CSS
          ================================================== -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css"> 
        <link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
        <link href="plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="plugins/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen" /> 
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
        <!-- Color Style -->
        <link href="colors/blue.css" rel="stylesheet" type="text/css">
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
            @include('includes.header') 
            <!-- Start Content -->
            <div class="main" role="main">
                <div id="content" class="content full">
                    <div class="rev-slider-container">
                        <div class="tp-banner-container">
                            <div class="tp-banner" >
                                <ul>
                                    <!-- SLIDE  -->

                                    <li data-masterspeed="600" data-slotamount="7" data-transition="parallaxtotop">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{asset('images/slider/slider2.png')}}" alt="" class="img-responsive">
                                        <!-- LAYER NR. 1 -->
                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption sft tp-resizeme start" id="sliderText" data-endspeed="300" data-easing="Power4.easeInOut" data-start="1800" data-speed="600" data-y="50" data-x="30"> Become a House <br/> Owner with 3k</div>

                                        <div class="tp-caption  sft tp-resizeme start" data-endspeed="300" data-easing="Power4.easeInOut" data-start="2000" data-speed="600" data-y="180" data-x="30"><a href="{{ url('/signup') }}" class="btn btn-success btn-lg" style="background-color: #62BC37;">Register now</a> </div>


                                        <!-- LAYER NR. 3 -->


                                        <!-- LAYER NR. 4 -->
                                    </li>

                             {{--       <li data-masterspeed="600" data-slotamount="7" data-transition="parallaxtotop">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{asset('images/slider/truvslide-02.png')}}" alt="" class="img-responsive">
                                        <!-- LAYER NR. 1 -->
                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption sft tp-resizeme start" id="sliderText" data-endspeed="300" data-easing="Power4.easeInOut" data-start="1800" data-speed="600" data-y="25" data-x="30"> Never go to bed  <br/> Hungry Again!!</div>

                                        <div class="tp-caption  sft tp-resizeme start" data-endspeed="300" data-easing="Power4.easeInOut" data-start="2000" data-speed="600" data-y="150" data-x="30"><a href="{{ url('/signup') }}" class="btn btn-success btn-lg" style="background-color: #62BC37;">Register now</a> </div>


                                        <!-- LAYER NR. 3 -->


                                        <!-- LAYER NR. 4 -->
                                    </li>

                                    <li data-masterspeed="600" data-slotamount="7" data-transition="parallaxtotop">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{asset('images/slider/truvslide-03.png')}}" alt="" class="img-responsive">
                                        <!-- LAYER NR. 1 -->
                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption sft tp-resizeme start" id="sliderText" data-endspeed="300" data-easing="Power4.easeInOut" data-start="1800" data-speed="600" data-y="50" data-x="30"> Own a Keke <br/> With just 3k</div>

                                        <div class="tp-caption  sft tp-resizeme start" data-endspeed="300" data-easing="Power4.easeInOut" data-start="2000" data-speed="600" data-y="180" data-x="30"><a href="{{ url('/signup') }}" class="btn btn-success btn-lg" style="background-color: #62BC37;">Register now</a> </div>


                                        <!-- LAYER NR. 3 -->


                                        <!-- LAYER NR. 4 -->
                                    </li>--}}

{{--
                                    <li data-masterspeed="600" data-slotamount="7" data-transition="parallaxtotop">
                                        <!-- MAIN IMAGE -->
                                        <img src="http://placehold.it/1280x859&amp;text=IMAGE+PLACEHOLDER" alt="">
                                        <!-- LAYER NR. 1 -->
                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption sft tp-resizeme start" data-endspeed="300" data-easing="Power4.easeInOut" data-start="1800" data-speed="600" data-y="160" data-x="30" style="font-size: 45px;
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0;line-height: 25px"> Become a keke <br/><br/>owner for free</div>

                                        <div class="tp-caption  sft tp-resizeme start" data-endspeed="300" data-easing="Power4.easeInOut" data-start="2000" data-speed="600" data-y="270" data-x="30"><a href="" class="btn btn-success btn-lg">Register now</a> </div>


                                        <!-- LAYER NR. 3 -->


                                        <!-- LAYER NR. 4 -->
                                    </li>
--}}

                                   {{-- <li data-delay="4000" data-masterspeed="600" data-slotamount="7" data-transition="fade">
                                        <!-- MAIN IMAGE --> 
                                        <img src="{{ asset('images/SLIDERTRUV-02.png') }}" alt="">

                                    </li>--}}
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="padding-tb45 lgray-color text-align-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12" data-appear-animation="fadeIn" data-appear-animation-delay=".2">
                                    <h1 class="no-strong"><span class="accent-color-text">Tru Vision Limited</span>
                                    <p style="font-size: 18px;line-height: 40px;"> A multi-level scheme company, proudly owned by Nigerians, aimed at solving problems associated with various economic crisis by providing basic necessities of life for its participants.</p>
                                    <a href="{{ url('/signup') }}" class="btn btn-lg btn-primary">JOIN US!</a> </div>
                            </div>
                        </div>
                    </div>
                    <hr class="fw margin-0">

                    <br/>

                    <div class="pages" id="pricing">
                        <div class="padding-tb75" style="padding-top: 0px;" id="gap">
                            <div class="container margin-30">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pricing-table three-cols margin-0">
                                            <div class="pricing-column" data-appear-animation="rotateIn" data-appear-animation-delay="300">
                                                <h3 style="padding-left: 2px; font-weight: bold;font-size: 20px; background-color: #62BC37; color: #FFFFFF;">Bike / Keke Ownership Scheme</h3>
                                                <div class="pricing-column-content">
                                                    <h4 style="padding: 0px;"><img src="{{asset('/images/SCHEMES TRUV-03.png')}}"></h4>
                                                    <p style="padding: 20px; color: #FFFFFF;  background-color: #62BC37;">The Scheme will make you a bonfide owner of a KEKE NAPEP or MOTORCYCLE (BIKE_OKADA) with ONE TIME PAYMENT of <strong>N3k</strong>, <strong>N5k</strong></p>
                                                    <ul class="features">
                                                        <li style="background-color: #FFFFFF">Classic = N3k = Reward of Motorcyle</li>
                                                        <li style="background-color: #f8f8f8">Premium = N5k = Reward of Keke Napep</li>

                                                    </ul>
                                                    <a class="btn btn-primary btn-block btn-lg2" style="margin-top: 0px;border-bottom: 3px solid #4e962b;" href="{{url('/kekebikeownershipsignup')}}">Register now</a> </div>
                                            </div>

                                            <div class="pricing-column " data-appear-animation="rotateIn" data-appear-animation-delay="100">
                                                <h3 style="font-weight: bold;font-size: 20px;">House Ownership Scheme</h3>
                                                <div class="pricing-column-content">
                                                    <h4 style="padding: 0px;"><img src="{{asset('/images/SCHEMES TRUV-01.png')}}"></h4>
                                                    <p style="padding: 20px;">The scheme changes your status from Tenant to Landlord with ONE TIME PAYMENT of <strong>N3k, N5k, N10k</strong>.</p>
                                                    <ul class="features">
                                                        <li>Classic = N3k = Reward of Self Contain Apartment / Partly Furnished</li>
                                                        <li>Premium = N5k = Reward of One Bedroom Apartment/Partly Furnished</li>
                                                        <li>Platinum = N10k= Reward of Two Bedroom/FULLY Furnished</li>
                                                    </ul>
                                                    <a class="btn btn-primary btn-block btn-lg2" style="border-bottom: 3px solid #4e962b;" href="{{url('/houseownershipsignup')}}">Register now</a> </div>
                                            </div>
                                            <div class="pricing-column" data-appear-animation="rotateIn" data-appear-animation-delay="200">
                                                <h3 style="font-weight: bold;font-size: 20px; background-color: #62BC37; color: #FFFFFF;">Financial Empowerment Scheme</h3>
                                                <div class="pricing-column-content">
                                                    <h4 style="padding: 0px;"><img src="{{asset('/images/SCHEMES TRUV-02.png')}}"></h4>

                                                    <p style="padding: 20px; color: #ffffff; background-color: #62BC37;">The scheme will empowered you with Capital to Start any business of your choice by ONE TIME PAYMENT of <Stron>N3k</Stron>, <strong>N5k</strong>, <strong>N10k</strong></p>
                                                    <ul class="features">
                                                        <li style="background-color: #FFFFFF;">Classic = N3k = Reward of N200,000</li>
                                                        <li style="background-color: #f8f8f8;">Premium = N5k = Reward of N480,000</li>
                                                        <li style="background-color: #FFFFFF">Platinum=N10k= Reward of N1,000,000</li>
                                                    </ul>

                                                    <a class="btn btn-primary btn-block btn-lg2" style="margin-top: 5px; border-bottom: 3px solid #4e962b;" href="{{url('/financialempowermentsignup')}}">Register now</a> </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="container margin-40 padding-tb20">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="heading-hr margin-60"><span>Loved by over <span class="accent-color-text">30000</span> families</span></h4>
                        </div>
                        <div class="col-md-12 margin-50">
                            <ul class="owl-carousel" data-columns="2" data-autoplay="no" data-pagination="yes" data-arrows="no" data-items-desktop="2" data-items-desktop-small="2" data-items-tablet="1" data-items-mobile="1">
                                <li class="testimonial item">
                                    <div class="img-block"><img src="http://placehold.it/76x76&amp;text=IMAGE+PLACEHOLDER" alt=""></div>
                                    <blockquote>
                                        <p>What the Wealthy Buy on Payday and Brilliant Compensation and I love the confidence I have in talking to people. I have learned to LISTEN more and talk less. </p>
                                        <cite>- Jackson</cite> </blockquote>
                                </li>
                                <li class="testimonial item">
                                    <div class="img-block"><img src="http://placehold.it/76x76&amp;text=IMAGE+PLACEHOLDER" alt=""></div>
                                    <blockquote>
                                        <p>What the Wealthy Buy on Payday and Brilliant Compensation and I love the confidence I have in talking to people. I have learned to LISTEN more and talk less. </p>
                                        <cite>- Jackson</cite> </blockquote>
                                </li>
                                <li class="testimonial item">
                                    <div class="img-block"><img src="http://placehold.it/76x76&amp;text=IMAGE+PLACEHOLDER" alt=""></div>
                                    <blockquote>
                                        <p>What the Wealthy Buy on Payday and Brilliant Compensation and I love the confidence I have in talking to people. I have learned to LISTEN more and talk less. </p>
                                        <cite>- Jackson</cite> </blockquote>
                                </li>
                                <li class="testimonial item">
                                    <div class="img-block"><img src="http://placehold.it/76x76&amp;text=IMAGE+PLACEHOLDER" alt=""></div>
                                    <blockquote>
                                        <p>What the Wealthy Buy on Payday and Brilliant Compensation and I love the confidence I have in talking to people. I have learned to LISTEN more and talk less. </p>
                                        <cite>- Jackson</cite> </blockquote>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.footer')
            <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> </div>
        <!-- End Body Container --> 
        <script src="http://code.jquery.com/jquery-latest.min.js"></script> <!-- Jquery Library Call --> 
        <script>if (typeof jQuery == 'undefined') {
        document.write(unescape("%3Cscript src='js/jquery-2.0.0.min.js' type='text/javascript'%3E%3C/script%3E"));
    }</script> 
        <script src="plugins/prettyphoto/js/prettyphoto.js"></script>
        <script src="plugins/prettyphoto/js/prettyphoto.js"></script>  
        <script src="plugins/owl-carousel/js/owl.carousel.min.js"></script> 
        <script src="plugins/page-scroller/jquery.pagescroller.js"></script> 
        <script src="js/helper-plugins.js"></script> <!-- Plugins --> 
        <script src="js/bootstrap.js"></script> <!-- UI --> 
        <script src="js/init.js"></script> <!-- All Scripts --> 
        <script src="plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> 
        <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
        <script src="js/revolution-slider-init.js"></script> <!-- Revolutions Slider Intialization -->   
        <!-- End Js --> 
    </body>
</html>