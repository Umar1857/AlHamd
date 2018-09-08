@extends('layouts.app')
<!---->
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 blog_post_head">
                <a href="#">
                    <img src="{{url('/images/post/'.$post->image)}}" alt="{{$post->title}}">
                </a>
            </div>
            <div class="col-md-6 post_content">
                <h2 class="blog_post_title">{{$post->title}}</h2>
                <div class="hidden-xs text-uppercase published_date"><span class="published_at"><i class="fa fa-calendar"></i> Published At:</span>  On {{$post->created_at->format('d M Y')}}</div>
                <div class="post_body">
                    <p>{!!html_entity_decode($post->body)!!}</p>
                </div>
            </div>
        </div>
    </div>
    <!---->
@endsection
