@extends('layouts.app')
<!---->
@section('content')
    <div class="main_packages_wrapper">
        <div class="package_intro text-center">
            <h1>Our Services</h1>
            <p>
                Al-Hamd movers and packers provide fast, secure, reliable and much cost effective moving and packing services in UAE region. We also provide a number of other services including office relocation, house relocation, villa relocation, loading and unloading, packing and unpacking, assembling and dismantling, and storage.
            </p>
        </div>
        <div class="packages_wrapper clearfix">
            @foreach($services as $service)
                <div class="col-sm-4 col-xs-12">
                    <div class="package_img">
                        <a href="/service/{{$service->id}}/{{str_slug($service->name)}}">
                            <img src="{{url('images/service/'.$service->image)}}" alt="{{$service->name}}">
                        </a>
                    </div>
                    <div class="package_desc">
                        <h3>{{$service->name}}</h3>
                        <p>{!!str_limit(html_entity_decode($service->description),210)!!}</p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!---->
@endsection
