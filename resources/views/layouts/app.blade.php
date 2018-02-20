<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sheetz | Hotel</title>

    <!-- Main.css is the file that contain all Merged & Minified css -->

    <link href="/css/main.css" rel="stylesheet">
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
    <header>
        <div class="top_header hidden-xs hidden-sm">
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="/images/user.png"> <span></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="/login" class=""><span>sign in</span></a>
                                        </li>
                                        <li>
                                            <a href="/register" class=""><span>sign up</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="/images/flag.png"> <span>English</span> <img src="/images/icon9.png"></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#"><img src="/images/flag.png"> <span>US</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/images/flag.png"> <span>US</span></a>
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
                        <a class="navbar-brand hidden-xs" href="/"><img src="/images/logo.png"></a>
                        <a class="navbar-brand visible-xs" href="/"><img src="/images/logo_mobile.png"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main_custom_nav">

                            <li><a href="/hotel" class="hvr-overline-from-center">HOTELS</a></li>
                            <li><a href="/packages" class="hvr-overline-from-center">PACKAGES</a></li>
                            <li><a href="/meetings" class="hvr-overline-from-center">MEETINGS</a></li>
                            <li><a href="/events" class="hvr-overline-from-center">EVENTS</a></li>
                            <li><a href="/wellness" class="hvr-overline-from-center">WELLNESS</a></li>
                            <li><a href="/weddings" class="hvr-overline-from-center">WEDDINGS</a></li>

                        </ul>


                    </div>
                    <ul class="nav navbar-nav navbar-right myreservations">
                        <li>
                            <a href="{{ route('logout') }}" class="hidden hvr-sweep-to-right" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"><img src="/images/user.png"><span> My RESERVATIONS</span></a>

                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: block;">
                                {{ csrf_field() }}
                            </form>

                            <a href="" data-toggle="modal" data-target=".signin_modal" class="hvr-sweep-to-right"><img src="/images/user.png"><span>sign in</span></a>

                            <a href="" class="hidden reservations_btn hvr-sweep-to-right"><img src="/images/user.png"><span>sign in</span></a>

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
                    <a href="#" class="footer_logo"><img src="/images/footer_logo.png"></a>
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
                        <li><a href="#">Bad Boekelos</a></li>
                        <li><a href="#">Venti Hotel Luxury</a></li>
                        <li><a href="#">Hotel Oosterhout</a></li>
                        <li><a href="#">Grand Hotel Ter Duin</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>PACKAGES</h4>
                    <ul class="footer_links">
                        <li><a href="/packages">Business packages</a></li>
                        <li><a href="/packages">VIP package</a></li>
                        <li><a href="/packages">Premium package</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>Start planning</h4>
                    <ul class="footer_links">
                        <li><a href="/events">Events</a></li>
                        <li><a href="/weddings">Weddings</a></li>
                        <li><a href="/conference">Conferences</a></li>
                        <li><a href="/meetings">Meetings</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>EXPLORE</h4>
                    <ul class="footer_links">
                        <li><a href="/our_hotels">Featured Destinations</a></li>
                        <li><a href="#">All Inclusive Services</a></li>
                        <li><a href="/packages">Travel Packages</a></li>
                        <li><a href="/gifts">Gift Cards</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 hidden-xs">
                    <h4>INFORMAtION</h4>
                    <ul class="footer_links">
                        <li><a href="/aboutus">About us</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy and cookies</a></li>
                        <li><a href="/vacancies">Vacancies</a></li>
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

    <!-- Main.js is the file that contain all Merged & Minified Js -->
    <script src="/js/main.js"></script>
    <!--    -->
    @yield('scripts')
    <!--  this @yeild scripts is to render scripts for different pages  -->



</body>

</html>
