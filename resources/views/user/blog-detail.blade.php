@extends('layouts.app')
<!---->
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 blog_post_head">
                <h2 class="blog_post_title">{{$post->title}}</h2>
                <a href="#">
                    <img src="/images/HotelPage_07.jpg">
                </a>
            </div>
            <div class="col-md-12 post_content">
                <div class="hidden-xs text-uppercase published_date"><span class="published_at"><i class="fa fa-calendar"></i> Published At:</span>  On {{$post->created_at->format('d M Y')}}</div>
                <p>{!!html_entity_decode($post->body)!!}</p>
            </div>
        </div>
    </div>
    <!---->
@endsection
