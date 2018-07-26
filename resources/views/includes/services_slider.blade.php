<div class="main_slider">
    <div class="responsive">
        @foreach($services as $service)
            <div class="slider_wrapper">
                <div class="slider_inner">
                    <div class="slider_img">
                        <a href="#">
                            <img src="{{url('images/service/'.$service->image)}}">
                        </a>
                    </div>
                    <div class="slider_txt">
                        <h3>{{$service->name}}</h3>
                        <p>{{str_limit($service->description,150)}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a href="/services" class="hvr-shutter-out-horizontal view_all hidden-xs">view all services</a>
</div>
