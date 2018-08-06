@extends('layouts.app')
<!---->
@section('content')
    <div class="main_content">
        <h3 class="main_hd text-center text-uppercase"><span>our blog posts</span></h3>
    </div>

    <div class="blog">
        <div class="container-fluid">
            @foreach($posts as $post)
                <div class="row blog_container">
                    <div class="col-md-3 col-xs-6 blog_image">
                        <a href="/blog/{{$post->id}}/{{$post->slug}}">
                            <img src="{{url('/images/post/'.$post->image)}}">
                        </a>

                        <div class="blog_content">
                            <div class="text-uppercase published_date"><span class="published_at"><i class="fa fa-calendar"></i> Published At: </span> ON {{$post->created_at->format('d M Y')}}</div>
                            <h3 class="text-uppercase"><a href="/blog/{{$post->id}}">{{str_limit($post->title, 40)}}</a></h3>
                            {{--<p>{!!str_limit(html_entity_decode($post->body), 200)!!}</p>--}}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="pages">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
    <!---->
@endsection
