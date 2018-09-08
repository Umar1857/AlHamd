@extends('layouts.app')
<!---->
@section('content')
    <div class="intro home_content">
        <div class="main_banner">
            <div class="hotel_description text-center">
                <h1>Welcome to Al-Hamd</h1>
                <h2>Movers And Packers In Dubai</h2>
                <p>Al-Hamd movers and packers make your move alot easier, simple and stress-free.</p>
            </div>
        </div>
    </div>

    <div class="join_sheets">
        <div class="container">
            <div class="row">
                <h2 class="visible-xs text-center text-uppercase">Welcome To Al-Hamd Movers and Packers</h2>
                <div class="col-sm-6 icon_set">
                    <span><img src="images/icons/1.png" alt="Customer Support"></span>
                    <span><img src="images/icons/2.png" alt="Loaders and Trucks"></span>
                    <span><img src="images/icons/3.png" alt="Assembling and Dismantling"></span>
                    <span><img src="images/icons/4.png" alt="Packing and Unpacking"></span>
                    <span><img src="images/icons/5.png" alt="Packing and Unpacking"></span>
                    <span><img src="images/icons/6.png" alt="Loading and Unloading"></span>
                    <span><img src="images/icons/7.png" alt="Box Listing"></span>
                    <span><img src="images/icons/8.png" alt="Loading and Unloading"></span>
                    <span><img src="images/icons/9.png" alt="Store Warehouse"></span>
                </div>
                <div class="col-sm-6 join_content">
                    <h3 class="hidden-xs text-uppercase">Welcome To <br>Al-Hamd</h3>
                    <p id="quote">"If you are looking for professional, relaible and cost effective moving and packing services in UAE region, then you have come to the right place."</p>
                    <p>We're a team of professionals working 24/7 to fulfill the client requirements and expections and make the <strong>Al-Hamd movers and packers</strong> the best shifting company in UAE region. Al-Hamd movers and packers, provides <strong>fast, secure, reliable and cost effective</strong> moving services to help you relocate without stress. Apart from moving services, we're also providing other incredibly well services including office relocation, house relocation, villa relocation, packing and unpacking services, furniture assembling and dismantling services, storage services.</p><br>
                    <p>Our mission and values are to help people and businesses to relocate without stress throughout Dubai, UAE.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="main_content">
        <h1 class="main_hd text-center text-uppercase"><span>our services</span></h1>
    </div>

    @include('includes/services_slider')

    <div class="packages text-center">
        <h1>Why Choose Us</h1>
        <div class="featured_package container-fluid hidden-xs">
            <div class="choose_us clearfix">
                <div class="col-md-3 col-xs-6">
                    <div class="choose_section">
                        <span><img src="images/icons/mtr.png" alt="Fast and Easy Shifting"></span>
                        <h3>Fast And Easy Steps</h3>
                        <div class="separator"></div>
                        <p>
                            Contact us right now. Request a Quote, Book services and Move, this is as simple as it sounds when you are moving with Al-Hamd movers and packers.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="choose_section">
                        <span><img src="images/icons/safe.png" alt="Safe and Relaible Shifting"></span>
                        <h3>Secure And Reliable</h3>
                        <div class="separator"></div>
                        <p>
                            Our carefully selected team of professionals movers offers you the most reliable service for your relocation plan. We deal your stuff with great care as its our own.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="choose_section">
                        <span><img src="images/icons/dollar.png" alt="Cost Effective Shifting"></span>
                        <h3>Cost Effective</h3>
                        <div class="separator"></div>
                        <p>
                            Our goal is to help people in shifting and make this whole shifting process stress-free for our customers. Al-Hamd movers offers you all this and much more in a very affordable price.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="choose_section">
                        <span><img src="images/icons/on-time.png" alt="On Time Delivery"></span>
                        <h3>On Time Delivery</h3>
                        <div class="separator"></div>
                        <p>
                            We understand that your time is much valuable. Its been our top priority to complete our deliveries on time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main_content">
        @if(!$posts->isEmpty())
            <h1 class="main_hd text-center text-uppercase"><span>Lattest Posts</span></h1>
            @include('includes.posts_slider')
        @endif
    </div>

    <div class="common_gallery text-center">
        <h1 class="text-uppercase">
            <p>Discover more about #Al-Hamd</p>
        </h1>
        <span>from our customers and members</span>
    </div>

    @include('includes/gallery_slider')

    <div class="social_links text-center">
        <ul>
            <li class="hidden-xs">
                <p>Visit our profiles in social media:</p>
            </li>
            <li><a href="https://www.instagram.com/alhamdmovers/" class="instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/AlHamd-Movers-407523639758513/" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
            {{--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
            <li><a href="https://www.linkedin.com/company/14433886/admin/overview/" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=971551040849" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>

@endsection
