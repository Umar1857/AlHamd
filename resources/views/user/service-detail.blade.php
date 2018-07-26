@extends('layouts.app')
<!---->
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 blog_post_head">
                <div class="text-center">
                    <img src="{{url('images/service/'.$service->image)}}">
                </div>
            </div>
            <div class="col-md-12 post_content">
                <h2 class="blog_post_title">{{$service->name}}</h2>
                <p>{{$service->description}}</p>
            </div>
        </div>
    </div>
    <!---->
@endsection
