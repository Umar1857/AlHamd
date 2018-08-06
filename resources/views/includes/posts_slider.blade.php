<div class="packages_wrapper clearfix">
    <div class="responsive3">
        @foreach($posts as $post)
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="package_img">
                    <a href="/blog/{{$post->id}}/{{$post->slug}}">
                        <img src="{{url('/images/post/'.$post->image)}}">
                    </a>
                    <div class="post_date text-center">
                        <div class="date">{{$post->created_at->format('d')}}</div>
                        <div class="month">{{$post->created_at->format('F')}}</div>
                        <div class="year">{{$post->created_at->format('Y')}}</div>
                    </div>
                </div>
                <div class="package_desc">
                    <h3>{{str_limit($post->title, 30)}}</h3>
                    {{--<div>
                        {!!html_entity_decode(str_limit($post->body,80))!!}
                    </div>
                    <div class="clearfix package_desc_inline">
                        <div class="col-lg-5 col-xs-12 pull-right">
                            <a href="/blog/{{$post->id}}" class="hvr-sweep-to-right readmore">read more</a>
                        </div>
                    </div>--}}
                </div>
            </div>
        @endforeach
    </div>
</div>
