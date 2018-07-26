@extends('layouts.app')
<!---->
@section('content')
    <div class="intro package_main">
        {{--<div class="main_banner">
            <div class="hotel_description text-center">
                <h1>SHEETZ PACKAGES</h1>
                <p>Enjoy nature, culture or shopping with these <span class="white_txt">attractive packages</span></p>

            </div>
        </div>--}}
    </div>
    <div class="main_packages_wrapper">
        <div class="package_intro text-center">
            <h1>Our Services</h1>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>
        <div class="packages_wrapper clearfix">
            @foreach($services as $service)
                <div class="col-sm-4 col-xs-6">
                    <div class="package_img">
                        <a href="/service/{{$service->id}}/{{str_slug($service->name)}}">
                            <img src="{{url('images/service/'.$service->image)}}">
                        </a>
                    </div>
                    <div class="package_desc">
                        <h3>{{$service->name}}</h3>
                        <p>{{str_limit($service->description,200)}}</p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!---->
@endsection
