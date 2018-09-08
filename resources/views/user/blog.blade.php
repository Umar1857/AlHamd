@extends('layouts.app')
<!---->
@section('content')
    <div class="main_packages_wrapper">
        <div class="package_intro text-center">
            <h1>Our Blog</h1>
        </div>

        <div class="packages_wrapper clearfix">
            @foreach($posts as $post)
                <div class="col-sm-4 col-xs-12">
                    <div class="package_img">
                        <a href="/blog/{{$post->id}}/{{$post->slug}}">
                            <img src="{{url('/images/post/'.$post->image)}}" alt="{{$post->title}}">
                        </a>
                    </div>

                    <div class="package_desc blog_body">
                        <div class="text-uppercase published_date"><span class="published_at"><i class="fa fa-calendar"></i> Published At: </span> ON {{$post->created_at->format('d M Y')}}</div>
                        <h3 class="text-uppercase"><a href="/blog/{{$post->id}}">{{str_limit($post->title, 40)}}</a></h3>
                        {{--<p>{!!str_limit(html_entity_decode($post->body), 200)!!}</p>--}}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="pages">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    <!---->
@endsection
