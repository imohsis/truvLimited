<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
          ================================================== -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Registration </title>
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
                <div id="content" class="content page-content full">
                    <header class="page-header flexible parallax text-align-center parallax-overlay" style="background-image:url({{ url('/images/img4.jpg')}}}})">
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1>Complete Registration</h1>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h2><strong>Registration</strong></h2>
                                <p class="lead"><span style="color: #3498db; font-weight: 300; ">Keke Napep/ Motorcycle Ownership Package.</span> Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo.</p>
                                <hr>
                                <form method="post" action="{{ url('/register') }}" enctype="multipart/form-data">
                                    <input type="hidden" name ="schemeId" value ="1" />
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Select Your Starting Level</label>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select id="level" name="level" class="form-control input-lg">
                                                <option value="1">Bronze | Fee = ₦2,000</option>
                                                <option value="2">Silver | Fee = ₦4,000</option>
                                                <option value="3">Gold | Fee = ₦6,000</option>
                                            </select>
                                        </div>

                                    </div><br/>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" name="name"  class="form-control input-lg" placeholder="Full Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" name="phone"  class="form-control input-lg" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" name="email"  class="form-control input-lg" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" name="referalId"  class="form-control input-lg" placeholder="Referal Id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Date of birth</label>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-xs-4">
                                                <select name="day" class="form-control input-lg">
                                                    <option selected>Day</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                    <option>15</option>
                                                    <option>16</option>
                                                    <option>17</option>
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-xs-4">
                                                <select name="month" class="form-control input-lg">
                                                    <option selected>Month</option>
                                                    <option>Jan</option>
                                                    <option>Feb</option>
                                                    <option>Mar</option>
                                                    <option>Apr</option>
                                                    <option>May</option>
                                                    <option>Jun</option>
                                                    <option>Jul</option>
                                                    <option>Aug</option>
                                                    <option>Sep</option>
                                                    <option>Oct</option>
                                                    <option>Nov</option>
                                                    <option>Dec</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-xs-4">
                                                <select name="year" class="form-control input-lg">
                                                    <option selected>Year</option>
                                                    <option>1980</option>
                                                    <option>1981</option>
                                                    <option>1982</option>
                                                    <option>1983</option>
                                                    <option>1984</option>
                                                    <option>1985</option>
                                                    <option>1986</option>
                                                    <option>1987</option>
                                                    <option>1988</option>
                                                    <option>1989</option>
                                                    <option>1990</option>
                                                    <option>1991</option>
                                                    <option>1992</option>
                                                    <option>1993</option>
                                                    <option>1994</option>
                                                    <option>1995</option>
                                                    <option>1996</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-xs-4">
                                                <input type="radio" name="gender" value="male"/> &nbsp;Male
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-xs-4">
                                                <input type="radio" name="gender" value="female"/> &nbsp;Female
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Location</label>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="level" class="form-control input-lg">
                                                <option>Abia State</option>
                                                <option>Adamawa State</option>
                                                <option>Akwa Ibom State</option>
                                                <option>Anambra State</option>
                                                <option>Bauchi State</option>
                                                <option>Bayelsa State</option>
                                                <option>Benue State</option>
                                                <option>Borno State</option>
                                                <option>Cross River State</option>
                                                <option>Delta State</option>
                                                <option>Ebonyi State</option>
                                                <option>Edo State</option>
                                                <option>Ekiti State</option>
                                                <option>Enugu State</option>
                                                <option>Gombe State</option>
                                                <option>Imo State</option>
                                                <option>Jigawa State</option>
                                                <option>Kaduna State</option>
                                                <option>Kano State</option>
                                                <option>Katsina State</option>
                                                <option>Kebbi State</option>
                                                <option>Kogi State</option>
                                                <option>Kwara State</option>
                                                <option>Lagos State</option>
                                                <option>Nasarawa State</option>
                                                <option>Niger State</option>
                                                <option>Ogun State</option>
                                                <option>Ondo State</option>
                                                <option>Osun State</option>
                                                <option>Oyo State</option>
                                                <option>Plateau State</option>
                                                <option>Rivers State</option>
                                                <option>Sokoto State</option>
                                                <option>Taraba State</option>
                                                <option>Yobe State</option>
                                                <option>Zamfara State</option>
                                                <option>Abuja FCT</option>
                                            </select>
                                        </div>

                                    </div><br/>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label><strong>For Bank Deposit(Enter Teller Id)</strong></label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="tellerId"  class="form-control input-lg" placeholder="Teller Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label><strong>For Bank Transfer(Enter Transaction Id)</strong></label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="transactionId"  class="form-control input-lg" placeholder="Transaction Id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="submit" name="submit" class="btn btn-primary btn-lg " value="Complete Registration">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Start Sidebar -->
                            <aside class="col-md-5 sidebar right-sidebar ">
                                <div class="widget sidebar-widget recent-posts">

                                    <img id="banner" src="{{ asset('/images/pyramid.png') }}" alt=""/>
                                </div>

                            </aside>
                        </div>
                    </div>
                </div>
            </div>

            @include('includes.footer')

            @if(session('success'))
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Successful</h4>
                        </div>
                        <div class="modal-body">
                            <p>You successfully registered for the Keke Bike Ownership Scheme.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            @endif

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
        <!-- End Js --> 
        @if(session('success'))
        <script>
$(document).ready(function () {
    $('#myModal').modal('show');
});
        </script>
        @endif
        <script>
            $('#level').change(function () {
                var selection = this.value;

                if (selection == "1") {
                    $('#banner').attr('src', '/images/keke.png');
                }
                if (selection == "2") {
                    $('#banner').attr('src', '/images/bike.jpg');
                }
                if (selection == "3") {
                    $('#banner').attr('src', '/images/housing.jpg');
                }

            });


        </script>
    </body>
</html>