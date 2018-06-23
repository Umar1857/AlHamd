@extends('layouts.app')
<!---->
@section('content')
<!---->
<div class="intro wellness wellness_package">
    <div class="main_banner">
        <div class="hotel_description text-center">
            <h1>WELLNESS PACKAGE</h1>
            <p>Relax with a pampering <span class="white_txt">wellness package</span></p>

        </div>
    </div>
</div>
@include('includes/availability')
<div class="common_gallery container-fluid text-center">
    <h1 class="text-uppercase">
        <p>wellness at <span class="gold">#Sheetz</span></p>
    </h1>
    <span>from our customers and members</span>

    <div id="freewall" class="free-wall hidden-xs"></div>
</div>
<!--    -->
<div class="visible-xs">
    @include('includes/gallery_slider')
</div>
<!--    -->
<div class="our_hotels_content text-center">
    <h1><span>choose a hotel</span></h1>
    @include('includes.services_slider')
</div>
<!---->
@endsection
