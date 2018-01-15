<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sheetz | Hotel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/mansory.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
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
    <header>
        <div class="top_header hidden-xs">
            <div class="container-fluid">
                <div class="main_row">
                    <div class="top_nav clearfix">
                        <ul>
                            <li>
                                <a href="/gifts">Vouchers</a>
                            </li>
                            <li>
                                <a href="/aboutus">About us</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                        <div class="lang_list pull-right">
                            <ul>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/flag.png"> <span>English</span> <img src="images/icon9.png"></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#"><img src="images/flag.png"> <span>US</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/flag.png"> <span>US</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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
                        <a class="navbar-brand hidden-xs" href="/"><img src="images/logo.png"></a>
                        <a class="navbar-brand visible-xs" href="/"><img src="images/logo_mobile.png"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main_custom_nav">

                            <li><a href="/hotel" class="hvr-overline-from-center">HOTELS</a></li>
                            <li><a href="/packages" class="hvr-overline-from-center">PACKAGES</a></li>
                            <li><a href="/meetings" class="hvr-overline-from-center">MEETINGS</a></li>
                            <li><a href="#" class="hvr-overline-from-center">EVENTS</a></li>
                            <li><a href="/wellness" class="hvr-overline-from-center">WELLNESS</a></li>
                            <li><a href="/weddings" class="hvr-overline-from-center">WEDDINGS</a></li>

                        </ul>


                    </div>
                    <ul class="nav navbar-nav navbar-right myreservations">
                        <li>
                            <a href="#" class="hvr-sweep-to-right"><img src="images/user.png"><span> My RESERVATIONS</span></a>
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
                    <a href="#" class="footer_logo"><img src="images/footer_logo.png"></a>
                    <p class="footer_desc">In 2015, Hotels by Sheetz founded as a joint commercial, sales and marketing area. </p>
                    <ul class="footer_social hidden-xs">
                        <li><a href="#" class="hvr-grow"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="hvr-grow"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#" class="hvr-grow"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" class="hvr-grow"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>Hotels</h4>
                    <ul class="footer_links">
                        <li><a href="#">Bad Boekelox</a></li>
                        <li><a href="#">Venti Hotel Luxury</a></li>
                        <li><a href="#">Hotel Oosterhout</a></li>
                        <li><a href="#">Grand Hotel Ter Duin</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>PACKAGES</h4>
                    <ul class="footer_links">
                        <li><a href="#">Business packagex</a></li>
                        <li><a href="#">VIP package</a></li>
                        <li><a href="#">Premium package</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>Start planning</h4>
                    <ul class="footer_links">
                        <li><a href="#">Eventsx</a></li>
                        <li><a href="#">Weddings</a></li>
                        <li><a href="#">Conferences</a></li>
                        <li><a href="#">Meetings</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>EXPLORE</h4>
                    <ul class="footer_links">
                        <li><a href="#">Featured Destinations</a></li>
                        <li><a href="#">All Inclusive Services</a></li>
                        <li><a href="#">Travel Packages</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>INFORMAtION</h4>
                    <ul class="footer_links">
                        <li><a href="#">About usx</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy and cookies</a></li>
                        <li><a href="#">Vacancies</a></li>
                    </ul>
                </div>
            </div>
            <div class="main_row">
                <div class="copyrights text-center">
                    <span>2017© Sheetz hotels. All rights reserved.</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/freewall.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/custom.js"></script>
    @yield('scripts')
    <!--  this @yeild scripts is to render scripts for different pages  -->



</body>

</html>
