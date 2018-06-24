@extends('layouts.app')
<!---->
@section('content')
<div class="intro home_content">
    <div class="main_banner">
        <div class="hotel_description text-center">
            <h1>Welcome to AlHamd</h1>
            <h2>Packers And Movers In Dubai</h2>
            <p>We Move you Safely and Peacefully without any stress. </p>

        </div>
    </div>
</div>

<div class="join_sheets">
    <div class="container">
        <div class="row">
            <h2 class="visible-xs text-center text-uppercase">Welcome To AlHamd Packers and Movers</h2>
            <div class="col-sm-6 icon_set">
                <span><img src="images/MainPage_72.png"></span>
                <span><img src="images/MainPage_67.png"></span>
                <span><img src="images/MainPage_69.png"></span>
                <span><img src="images/MainPage_77.png"></span>
                <span><img src="images/MainPage_78.png"></span>
                <span><img src="images/MainPage_79.png"></span>
                <span><img src="images/MainPage_83.png"></span>
                <span><img src="images/MainPage_84.png"></span>
                <span><img src="images/MainPage_86.png"></span>
            </div>
            <div class="col-sm-6 join_content">
                <h3 class="hidden-xs text-uppercase">Welcome To AlHamd</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>
</div>

<div class="main_content">
    <h1 class="main_hd text-center text-uppercase"><span>our services</span></h1>
</div>

@include('includes/services_slider')

<div class="packages text-center">
    <p class="view_popular">
        view our <span>popular</span>
    </p>
    <h1>Packages</h1>
    <div class="featured_package container hidden-xs">
        <div class="main_row">
            <div class="col-sm-6">
                <img src="images/MainPage_16.jpg">
            </div>
            <div class="col-sm-6 package_desc text-left">
                <h3>SHEETZ ALL-IN-ONE PACKAGE</h3>
                <span>3 Hotels</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                <p class="from">From <span>€149.00 </span></p>
                <span>per stay with two persons </span>
                <a href="#" class="readmore">read more</a>
            </div>
        </div>
    </div>
    @include('includes/packages_slider')
</div>
<div class="events_at_sheetz">
    <h1 class="text-uppercase"><span>Events at Sheetz</span></h1>
    <div class="responsive1 hidden-xs">
        <div class="events_wrapper clearfix">
            <div class="package_img"><img src="images/MainPage_30.jpg"></div>
            <div class="package_desc text-left">
                <h3>EVENTS AT SHEETZ</h3>
                <p>Everything is possible: A multi-day conference at a party with live music, a great BBQ or a team building on the beach or in the woods. Our team ensures that everything goes smoothly.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#" class="readmore">read more</a>
            </div>
        </div>
        <div class="events_wrapper clearfix">
            <div class="package_img"><img src="images/MainPage_34.jpg"></div>
            <div class="package_desc text-left">
                <h3>MEETINGS AT SHEETZ</h3>
                <p>Everything is possible: A multi-day conference at a party with live music, a great BBQ or a team building on the beach or in the woods. Our team ensures that everything goes smoothly.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#" class="readmore">read more</a>
            </div>
        </div>
        <div class="events_wrapper clearfix">
            <div class="package_img"><img src="images/MainPage_37.jpg"></div>
            <div class="package_desc text-left">
                <h3>WEDDINGS AT SHEETZ</h3>
                <p>Everything is possible: A multi-day conference at a party with live music, a great BBQ or a team building on the beach or in the woods. Our team ensures that everything goes smoothly.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#" class="readmore">read more</a>
            </div>
        </div>
    </div>
    <div class="event_slider visible-xs">
        <div class="events_wrapper clearfix">
            <div class="package_img"><img src="images/MainPage_30.jpg"></div>
            <div class="package_desc text-left">
                <h3>EVENTS AT SHEETZ</h3>
                <p>Everything is possible: A multi-day conference at a party with live music, a great BBQ or a team building on the beach or in the woods. Our team ensures that everything goes smoothly.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#" class="readmore">read more</a>
            </div>
        </div>
        <div class="events_wrapper clearfix">
            <div class="package_img"><img src="images/MainPage_34.jpg"></div>
            <div class="package_desc text-left">
                <h3>MEETINGS AT SHEETZ</h3>
                <p>Everything is possible: A multi-day conference at a party with live music, a great BBQ or a team building on the beach or in the woods. Our team ensures that everything goes smoothly.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#" class="readmore">read more</a>
            </div>
        </div>
        <div class="events_wrapper clearfix">
            <div class="package_img"><img src="images/MainPage_37.jpg"></div>
            <div class="package_desc text-left">
                <h3>WEDDINGS AT SHEETZ</h3>
                <p>Everything is possible: A multi-day conference at a party with live music, a great BBQ or a team building on the beach or in the woods. Our team ensures that everything goes smoothly.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#" class="readmore">read more</a>
            </div>
        </div>
    </div>
</div>
<div class="common_gallery text-center">
    <h1 class="text-uppercase">
        <p>Discover more about <span class="gold">#Sheetz</span></p>
    </h1>
    <span>from our customers and members</span>
    <div class="container-fluid">
        <div id="freewall" class="free-wall hidden-xs"></div>
    </div>
</div>
@include('includes/gallery_slider')
<div class="social_links text-center">
    <ul>
        <li class="hidden-xs">
            <p>Visit our profiles in social media:</p>
        </li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    </ul>
</div>
@endsection
