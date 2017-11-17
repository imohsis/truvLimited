<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>{{ session('firstName') }} {{ session('lastName') }} | Tru V Limited</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset('/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{ asset('/plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}"
          rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/css/style_dash.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('/css/colors/default.css')}}" id="theme" rel="stylesheet">

    <link href="{{ asset('/css/custom.css')}}" rel="stylesheet"/>
    <link href="{{ asset('/css/datatables.css')}}" rel="stylesheet"/>
    <link href="{{ asset('/css/dataTables.bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{ asset('/css/buttons.bootstrap.css')}}" rel="stylesheet"/>
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="{{ url('/member') }}">
                    <!-- Logo icon image, you can use font-icon also -->
                        <!--This is dark logo icon--><img src="/images/truvdashboard-01.png" alt="home"
                                                          class="dark-logo"/><!--This is light logo icon--><img
                                src="/images/truvdashboard-01.png" alt="home" class="light-logo"/>
                     </a>
            </div>
            <ul class="nav navbar-top-links navbar-left">
                <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="fa fa-bars"></i></a></li>
                

            </ul>
            <!-- /Logo -->
            <ul class="nav navbar-top-links navbar-right pull-right">
                @if(auth()->user()->role_id == 3)
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10" method="get" action="{{url('/admin/search')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <input type="text" placeholder="Search..." class="form-control" name="query">
                            <a href=""><i class="fa fa-search"></i></a></form>
                    </li>
                @endif
                <li>
                    <a class="profile-pic" href="#"> <b class="hidden-xs">{{ session('firstName') }}</b></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span>
                </h3>
            </div>
            <ul class="nav" id="side-menu">
                
                <li style="padding: 70px 0 0;" >
                    <a href="{{ url('/member#hello') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                </li>
                
                <li>
                    <a href="{{ url('/member/portfolio#hello') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                                                                      aria-hidden="true"></i>Portfolio</a>
                </li>
                <li>
                    <a href="{{ url('/member/network#hello') }}" class="waves-effect"><i class="fa fa-cloud fa-fw"
                                                                      aria-hidden="true"></i>Network</a>
                </li>
                <li>
                    <a href="{{ url('/changepassword#hello') }}" class="waves-effect"><i class="fa fa-key fa-fw"
                                                                      aria-hidden="true"></i>Change Password</a>
                </li>
               
                <li >
                    <a href="{{ url('/logout') }}" class="waves-effect "><i class="fa fa-power-off fa-fw"
                                                                     aria-hidden="true"></i>Logout</a>
                </li>

            </ul>

        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Client Dashboard</h4></div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    <ol class="breadcrumb hidden-xs">
                        <li><a href="#">Client Dashboard</a></li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- Different data widgets -->
            <!-- ============================================================== -->
            <!-- .row -->
            
            <!--/.row -->
            <!--row -->
            <!-- /.row -->

            <!-- ============================================================== -->
            <!-- table -->
            <!-- ============================================================== -->
            @yield('main-content')
            <!-- ============================================================== -->
            <!-- chat-listing & recent comments -->
            <!-- ============================================================== -->

        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; ITransferfx. Lovely Designed By <a href="#">Thinkshifts UK</a></footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ url('/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ url('/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ url('/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<!--slimscroll JavaScript -->
<script src="{{ url('/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ url('/js/waves.js') }}"></script>
<!--Counter js -->
<script src="{{ url('/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ url('/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
<!-- chartist chart -->
<script src="{{ url('/plugins/bower_components/chartist-js/dist/chartist.min.js') }}"></script>
<script src="{{ url('/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{ url('/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!-- DATATABLES -->
<script src="{{ url('/js/datatables.min.js') }}"></script>
<script src="{{ url('/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ url('/js/jszip.min.js') }}"></script>
<script src="{{ url('/js/pdfmake.min.js') }}"></script>
<script src="{{ url('/js/vfs_fonts.js') }}"></script>
<script src="{{ url('/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ url('/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('/js/buttons.print.min.js') }}"></script>
<script src="{{ url('/js/buttons.flash.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#networkTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'pdf', 'print'
            ]
        } );
    });
</script>
<!-- Custom Theme JavaScript -->
<script src="{{ url('/js/custom.min.js') }}"></script>
<script src="{{ url('/js/dashboard1.js') }}"></script>
<script src="{{ url('/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
<script src="{{ url('/js/jquery.validate.js') }}"></script>
<script src="{{ url('/js/slick.js') }}"></script>
<script type="text/javascript">
    $("#house").validate({
        rules:{
            name:{
                required: true
            },
            day:{
                required:true
            },
            email:{
                required: true,
                email:true
            },
            phone:{
                required: true,
                digits:true
            },
            month:{
                required: true
            },
            year:{
                required:true
            },
            bankpaidinto:{
                required:true
            }

        },
        submitHandler:  function (form) {
            swal({
                    title: "The Happy people project",
                    text: '<p class="alert alert-success">Thank you so much for choosing to partner with us!<br/>  We will be in touch shortly.</p><hr/> <h4>Do you wish to make an instant financial donation?</h4> <br/><p style="text-align: center;"><button class="btn btn-primary">Donate now</button></p>',
                    type: "success",
                    html: true,
                    showCancelButton: true,
                    cancelButtonText: "No, Thanks!",
                    closeOnConfirm: false,
                    showConfirmButton:false
                },
                function(){
                    swal("Calm down!", "Coming soon.", "success");
                });

        }
    });
</script>

@yield('script')
</body>

</html>
