<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login | Tentered - Responsive HTML5 template</title>
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
  <!-- Start Header -->
  
  @include('includes.header')
  <!-- End Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content page-content full">
      <header class="page-header flexible parallax text-align-center parallax-overlay" style="background-image:url(http://placehold.it/1280x800&amp;text=IMAGE+PLACEHOLDER)">
        <section>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>Login</h1>
              </div>
            </div>
          </div>
        </section>
      </header>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h2><strong>Login</strong></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo.</p>
            <hr>
            
            @if ($errors)
            @foreach ($errors->all() as $error)
            <span class="help-block" style="color: red;"> {{ $error }}</span>
            @endforeach
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
                  <div class="col-md-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Login">
                  </div>
                </div>
              </div>
            </form>
          </div>
            
          <!-- Start Sidebar -->
          <aside class="col-md-3 sidebar right-sidebar">
            <div class="widget sidebar-widget recent-posts">
              <h4>Latest Flickr Images</h4>
              <ul class="flickr-widget clearfix" data-flickr-userid="52617155@N08" data-images-count="6">
              </ul>
            </div>
            <section class="widget sidebar-widget" id="text-widget1">
              <h4>About Tentered</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in euismod nisi.</p>
              <p>Cras at ultrices erat, sed vulputate eros. Nunc at augue gravida est fermentum vulputate.</p>
              </ul>
            </section>
          </aside>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Start Footer -->
  <footer class="site-footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <section class="footer-widget" id="newsletter">
            <h4>Newsletter</h4>
            <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
            <form>
              <div class="input-group input-group-lg">
                <input type="text" class="form-control input-lg">
                <span class="input-group-btn input">
                <button class="btn btn-primary" type="button">Go!</button>
                </span> </div>
              <!-- /input-group -->
            </form>
          </section>
        </div>
        <div class="col-md-3 col-sm-6">
          <section class="footer-widget" id="twitter">
            <h4>Latest Tweet</h4>
            <div class="twitter-widget"></div>
          </section>
        </div>
        <div class="col-md-3 col-sm-6">
          <section class="footer-widget" id="contact">
            <h4>Contact Us</h4>
            <address class="ico">
            <p><i class="fa fa-map-marker"></i> <span><strong>Address:</strong> 1234 Street Name,<br>
              City Name, United States</span></p>
            <p><i class="fa fa-phone"></i> <span><strong>Phone:</strong> (123) 456-7890</span></p>
            <p><i class="fa fa-envelope"></i> <span><strong>Email:</strong> mail@example.com</span></p>
            </address>
          </section>
        </div>
        <div class="col-md-3 col-sm-6">
          <section class="footer-widget" id="text-widget">
            <h4>About Tentered</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in euismod nisi.</p>
            <p>Cras at ultrices erat, sed vulputate eros. Nunc at augue gravida est fermentum vulputate.</p>
            </ul>
          </section>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
 @include('includes.footer')
  <!-- End footer --> 
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> </div>
<!-- End Body Container --> 
<script src="http://code.jquery.com/jquery-latest.min.js"></script> <!-- Jquery Library Call --> 
<script>if (typeof jQuery == 'undefined') {document.write(unescape("%3Cscript src='js/jquery-2.0.0.min.js' type='text/javascript'%3E%3C/script%3E"));}</script> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script>
<script src="plugins/prettyphoto/js/prettyphoto.js"></script>  
<script src="plugins/owl-carousel/js/owl.carousel.min.js"></script> 
<script src="plugins/page-scroller/jquery.pagescroller.js"></script> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/init.js"></script> <!-- All Scripts -->   
<!-- End Js --> 
</body>
</html>