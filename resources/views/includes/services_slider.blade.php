<div class="main_slider">
    <div class="responsive">
        @foreach($services as $service)
            <div class="slider_wrapper">
                <div class="slider_inner">
                    <div class="slider_img">
                        <a href="/service/{{$service->id}}/{{str_slug($service->name)}}">
                            <img src="{{url('images/service/'.$service->image)}}">
                        </a>
                    </div>
                    <div class="slider_txt">
                        <h3>{{$service->name}}</h3>
                        <p>{!!html_entity_decode(str_limit($service->description,170))!!}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a href="/services" class="hvr-shutter-out-horizontal view_all">view all services</a>
</div>
