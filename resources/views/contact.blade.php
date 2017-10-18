<!DOCTYPE HTML>
<html class="no-js">
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Contact | Tentered - Responsive HTML5 template</title>
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
    <style type="text/css">
        .map-responsive{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
        ul.location > li{
            display: block;
            margin-bottom: 10px;
        }
    </style>
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
    <!-- Start Content -->
    <div class="main" role="main">
        <div id="content" class="content page-content full">
            <header class="page-header text-align-center short parallax" style="background-color: rgba(52,152,219,.7)">
                <section>
                    <h1>Contact Us</h1>
                </section>
            </header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <h3>Head Office</h3>
                        <ul class="location">
                            <li><strong><i class="fa fa-map-marker"></i> Address</strong> 57, Opebi Road, Ikeja, Lagos</li>
                            <li><strong><i class="fa fa-phone"></i> Phone 1</strong> 07065384042, 08052268556
                            </li>
                            <li><strong><i class="fa fa-phone"></i> Phone 2 </strong>  09065569956, 08107209998</li>
                            <li><strong><i class="fa fa-envelope"></i> Email</strong> <a href="mailto:visionintegrated@gmail.com">visionintegrated@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h3>Lagos Office</h3>
                        <ul class="location">
                            <li><strong><i class="fa fa-map-marker"></i> Address</strong> 14, Oshinade Nasirudeen, Opposite Uncle Bayus School, Igbe Road, Elepe, Ikorodu, Lagos.</li>
                            <li><strong><i class="fa fa-phone"></i> Phone</strong> 08177145092</li>
                            <li><strong><i class="fa fa-envelope"></i> Email</strong> <a href="mailto:visionintegrated@gmail.com">visionintegrated@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-6">

                        <h3>Port Harcourt Office</h3>
                        <ul class="location">
                            <li><strong><i class="fa fa-map-marker"></i> Address</strong> 13, By Stellian Road, (First Floor - Office one)Elelenwon, Port Harcourt, Rivers State.</li>
                            <li><strong><i class="fa fa-phone"></i> Phone</strong> 08083076170, 08066342810</li>
                            <li><strong><i class="fa fa-envelope"></i> Email</strong> <a href="mailto:visionintegrated@gmail.com">visionintegrated@gmail.com</a></li>
                        </ul>
                    </div>


                </div>
                <br/>
                <div class="row">
                    <div class="col-md-7">
                        <h2>Get in touch <strong>with us</strong></h2>
                        <form method="post" id="contactform" name="contactform" class="contact-form" action="mail/contact.php">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Name*">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" id="subject" name="subject" class="form-control input-lg" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea cols="8" rows="6" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg" value="Submit form">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <div id="message"></div>
                    </div>
                    <div class="col-md-5 sidebar right-sidebar">

                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.454268042387!2d3.3587230143455318!3d6.590321295233952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b924045735fbf%3A0xdd43a17f025bbbc7!2s57+Opebi+Rd%2C+Opebi%2C+Ikeja!5e0!3m2!1sen!2sng!4v1507981534044" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <h3 class="push-top">Follow us</h3>
                        <ul class="social-icons-list">
                            <li><a href="#"><i class="fa fa-facebook-square fa-3x"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square fa-3x"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square fa-3x"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square fa-3x"></i></a></li>
                        </ul>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Start Footer -->
    @include('includes.footer')

    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> </div>
<!-- End Body Container -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script> <!-- Jquery Library Call -->
<script>if (typeof jQuery == 'undefined') {document.write(unescape("%3Cscript src='js/jquery-2.0.0.min.js' type='text/javascript'%3E%3C/script%3E"));}</script>
<script src="plugins/prettyphoto/js/prettyphoto.js"></script>
<script src="plugins/prettyphoto/js/prettyphoto.js"></script>
<script src="js/bootstrap.js"></script> <!-- UI -->
<script src="plugins/owl-carousel/js/owl.carousel.min.js"></script>
<script src="plugins/page-scroller/jquery.pagescroller.js"></script>
<script src="js/helper-plugins.js"></script> <!-- Plugins -->
<script src="js/init.js"></script> <!-- All Scripts -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script> <!-- Google Map -->
<script src="js/jquery.gmap.js"></script> <!-- jQuery Map -->
<script>
    jQuery(document).ready(function(){
        jQuery('.w-map-h').gMap({
            controls: {
                panControl: false,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            },
            address: "1600 Amphitheatre Parkway, Mountain View, CA 94043, United States",
            zoom: 13,
            markers:[
                {
                    address: "1600 Amphitheatre Parkway, Mountain View, CA 94043, United States",
                    html: "Tentered",
                    icon: {
                        image: "images/map-pin.png",
                        iconsize: [34, 50],
                        iconanchor: [12, 46]
                    },
                    popup: false
                }
            ]
        });
    });
</script>
<!-- End Js -->
</body>
</html>