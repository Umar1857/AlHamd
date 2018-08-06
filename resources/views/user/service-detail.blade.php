@extends('layouts.app')
<!---->
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 blog_post_head">
                <div class="text-center serviceImage">
                    <img src="{{url('images/service/'.$service->image)}}">
                </div>
            </div>
            <div class="col-md-6 post_content">
                <h2 class="blog_post_title">{{$service->name}}</h2>
                <p>{!!html_entity_decode($service->description) !!}</p>
            </div>
        </div>
    </div>
    <!---->
@endsection
