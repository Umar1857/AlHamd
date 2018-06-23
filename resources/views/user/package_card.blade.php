@extends('layouts.app')
<!---->
@section('content')
<div class="intro package_content">
    <div class="main_banner">
        <div class="hotel_description text-center">
            <h1>SHEETZ SPECIAL</h1>
            <p>Stay for 1, 2 or 3 nights, including breakfast and a culinary three-course dinner in one of our 17 hotels <span class="white_txt">in the Netherlands.</span></p>

        </div>
    </div>
</div>

@include('includes/availability')
<div class="our_hotels_content text-center">
    <h1><span>choose a hotel</span></h1>
    @include('includes.services_slider')
</div>
<!---->
@endsection
