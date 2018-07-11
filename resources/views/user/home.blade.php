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
                <span><img src="images/icons/1.png"></span>
                <span><img src="images/icons/2.png"></span>
                <span><img src="images/icons/3.png"></span>
                <span><img src="images/icons/4.png"></span>
                <span><img src="images/icons/5.png"></span>
                <span><img src="images/icons/8.png"></span>
                <span><img src="images/icons/9.png"></span>
                <span><img src="images/icons/10.png"></span>
                <span><img src="images/icons/2.png"></span>
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
    {{--<p class="view_popular">
        view our <span>popular</span>
    </p>--}}
    <h1>Why Choose Us</h1>
    <div class="featured_package container-fluid hidden-xs">
        <div class="choose_us">
            <div class="col-md-3">
                <div class="choose_section">
                    {{--<span><i class="fa fa-clock-o fa-5x"></i></span>--}}
                    <span><img src="images/icons/1.png"></span>
                    <h3>Fast And Easy Steps</h3>
                    <div class="separator"></div>
                    <p>
                        “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="choose_section">
                    {{--<span><i class="fa fa-clock-o fa-5x"></i></span>--}}
                    <span><img src="images/icons/1.png"></span>
                    <h3>Secure And Reliable</h3>
                    <div class="separator"></div>
                    <p>
                        “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="choose_section">
                    {{--<span><i class="fa fa-clock-o fa-5x"></i></span>--}}
                    <span><img src="images/icons/1.png"></span>
                    <h3>Cost Effective</h3>
                    <div class="separator"></div>
                    <p>
                        “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="choose_section">
                    {{--<span><i class="fa fa-clock-o fa-5x"></i></span>--}}
                    <span><img src="images/icons/1.png"></span>
                    <h3>On Time Delivery</h3>
                    <div class="separator"></div>
                    <p>
                        “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main_content">
    <h1 class="main_hd text-center text-uppercase"><span>Lattest Posts</span></h1>
    @include('includes.posts_slider')
</div>

<div class="common_gallery text-center">
    <h1 class="text-uppercase">
        <p>Discover more about <span class="gold">#AlHamd</span></p>
    </h1>
    <span>from our customers and members</span>
    {{--<div class="container-fluid">
        <div id="freewall" class="free-wall hidden-xs"></div>
    </div>--}}
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
