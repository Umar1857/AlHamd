<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AlHamd | Movers And Packers</title>

    <!-- Main.css is the file that contain all Merged & Minified css -->

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/hover.css" rel="stylesheet">
    <link href="/css/jquery.fancybox.css" rel="stylesheet">
    <link href="/css/mansory.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">
    <link href="/css/slick-theme.css" rel="stylesheet">
    <link href="/css/rateit.css" rel="stylesheet">
    <link href="/css/slick-theme.css" rel="stylesheet">
    <link href="/css/slick-theme.css" rel="stylesheet">
    <link href="/css/chosen.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">

    {{--<link href="/css/main.css" rel="stylesheet">--}}
    <!--    -->
    @yield('styles')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet">
    <!--  this @yeild styles is to render styles for different pages  -->



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header class="head">
        <div class="top_header hidden-xs hidden-sm">
            <div class="container-fluid">
                <div class="main_row">
                    <div class="top_nav clearfix">
                        <div class="social-icons pull-left">
                            <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                            <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                            <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                            <span><a href="#"><i class="fa fa-linkedin-square"></i></a></span>
                            <span><a href="#"><i class="fa fa-whatsapp"></i></a></span>
                            <span><a href="#"><i class="fa fa-pinterest-square"></i></a></span>
                        </div>
                        <ul>
                            <li>
                                <a href="/gifts">Testimonials</a>
                            </li>
                            <li>
                                <a href="/about">About Us</a>
                            </li>
                            <li>
                                <a href="/contact">Contact Us</a>
                            </li>
                        </ul>
                        <div class="lang_list pull-right">
                            <span class="emailID"><i class="fa fa-envelope-square"></i> <a href="mailto:abc@gmail.com">abc@gmail.com </a></span>
                            <span class="phoneNo"><i class="fa fa-phone-square"></i><a href="tel:0522049342"> 0522049342</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="main_nav">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        {{--<a class="navbar-brand hidden-xs" href="/"><img src="/images/logo.png"></a>
                        <a class="navbar-brand visible-xs" href="/"><img src="/images/logo_mobile.png"></a>--}}

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main_custom_nav">

                            <li><a href="/" class="hvr-overline-from-center">HOME</a></li>
                            <li><a href="/services" class="hvr-overline-from-center">SERVICES</a></li>
                            <li><a href="/meetings" class="hvr-overline-from-center">GALLERY</a></li>
                            <li><a href="/projects" class="hvr-overline-from-center">PROJECTS</a></li>
                            <li><a href="/booking" class="hvr-overline-from-center">BOOKING</a></li>
                            <li><a href="/blog" class="hvr-overline-from-center">BLOG</a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav navbar-right myreservations">
                        <li>

                            @if (Auth::guest())
                                <a href="/quote" class="hvr-sweep-to-right"><img src="/images/user.png"><span>GET A FREE QUOTE</span></a>
                            @else
                                <a href="/account#orders" class="reservations_btn hvr-sweep-to-right"><img src="/images/user.png"><span> My RESERVATIONS</span></a>
                            @endif

                        </li>

                    </ul>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

        </div>
    </header>
    <div class="main_wrapper">
        <!--    @yeild is the section for general content of the whole site... whenever there is a change in any 
page it will render here dynamically... -->
        @yield('content')

        <!--    @yeilds ends here -->
    </div>

    <footer>
        <div class="clearfix container-fluid">
            <div class="row">
                <div class="col-sm-2 col-xs-12">
                    {{--<a href="#" class="footer_logo"><img src="/images/footer_logo.png"></a>--}}
                    <p class="footer_desc">AlHamd movers is a group of Professionals who makes relocation alot easier and Cheaper.</p>
                    <ul class="footer_social hidden-xs">
                        <li><a href="#" class="hvr-grow"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="hvr-grow"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#" class="hvr-grow"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" class="hvr-grow"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="hvr-grow"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="hvr-grow"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>Quicklinks</h4>
                    <ul class="footer_links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="/quote">Get A Quote</a></li>
                        <li><a href="/sitemap">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>Services</h4>
                    <ul class="footer_links">
                        <li><a href="/services">OFFICE RELOCATION</a></li>
                        <li><a href="/services">HOUSE RELOCATION</a></li>
                        <li><a href="/services">VILLA RELOCATION</a></li>
                        <li><a href="/services">STORAGE</a></li>
                        <li><a href="/services">PACKING & UNPACKING</a></li>
                        <li><a href="/services">FURNITURE ASSEMBLING / DISMANTLING​</a></li>
                        <li><a href="/services">LOADING & UNLOADING​</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>Office Address</h4>
                    <ul class="footer_links">
                        <p><i class="fa fa-map-marker"></i> 512-A Habibi Road, Dubai</p>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>Contact</h4>
                    <ul class="footer_links">
                        <li><a href="mailto:abc@gmail.com"><i class="fa fa-envelope-square"></i>  abc@gmail.com </a></li>
                        <li><a href="mailto:abc@gmail.com"><i class="fa fa-envelope-square"></i> abc@gmail.com </a></li>
                        <li><a href="tel:971522049342"><i class="fa fa-phone-square"></i> +97152 2049342</a></li>
                        <li><a href="tel:971551040849"><i class="fa fa-phone-square"></i> +97155 1040849</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>Working Hours</h4>
                    <p class="text-center"><img src="/images/24hrs.png" width="99px" height="99px"></p>
                    {{--<ul class="footer_links">
                        <li class="text-center"><b>Saturday-Thursday</b></li>
                        <li class="text-center">8am to 10pm</li><br>
                        <li class="text-center"><b>Friday</b></li>
                        <li class="text-center">2pm to 10pm</li>
                    </ul>--}}
                </div>
            </div>
            <div class="main_row">
                <div class="copyrights text-center">
                    <span>2018© AlHamd Movers . All rights reserved.</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Main.js is the file that contain all Merged & Minified Js -->
    <script src="/js/main.js"></script>
    <script src="/js/moment.js"></script>
    <script src="/js/bootstrap-datetimepicker.min.js"></script>
    <!--    -->
    @yield('scripts')

    {{--Success Message For Password Recovery Email Starts--}}
        <script>
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });

            @if (session('status'))
            $ (function () {
                $('.password_recovery').modal('show');
            });
            @endif

            $(document).ready(function () {
                activeOrdersTab();

                $('.reservations_btn').click(function () {
                    location.reload();
                });
            });

            function activeOrdersTab() {
                // Javascript to enable link to tab
                var url = document.location.toString();

                if (url.match('#')) {
                    $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
                }

                // Change hash for page-reload
                $('.nav-tabs a').on('shown.bs.tab', function (e) {
                    window.location.hash = e.target.hash;
                });
            }

        </script>
    {{--Success Message For Password Recovery Email Ends--}}

    <!--  this @yeild scripts is to render scripts for different pages  -->

</body>

</html>
