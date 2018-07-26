@extends('layouts.app')
<!---->
@section('content')
    <div class="main_content">
        <h3 class="main_hd text-center text-uppercase"><span>our blog posts</span></h3>
    </div>

    <div class="blog">
        <div class="container">
            @foreach($posts as $post)
                <div class="row">
                    <div class="col-md-3 col-sm-6 blog_image">
                        <a href="/blog/{{$post->id}}">
                            <img src="/images/HotelPage_07.jpg">
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-6 blog_content">
                        <div class="text-uppercase published_date"><span class="published_at"><i class="fa fa-calendar"></i> Published At: </span> ON {{$post->created_at->format('d M Y')}}</div>
                        <h2 class="hidden-xs text-uppercase"><a href="/blog/{{$post->id}}">{{str_limit($post->title, 40)}}</a></h2>
                        <p>{!!str_limit(html_entity_decode($post->body), 200)!!}</p>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="float-right">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
    <!---->
@endsection
