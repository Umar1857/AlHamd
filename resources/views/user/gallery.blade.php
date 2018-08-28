@extends('layouts.app')
<!---->
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="main_content">
                <h3 class="main_hd text-center text-uppercase"><span>Images Gallery</span></h3>
            </div>
        </div>

        <div class="row">
            <div class="home">
                <div class="demo-gallery">
                    <ul id="lightgallery" class="list-unstyled row">
                        @if(!$images->isEmpty())
                            @foreach($images as $image)
                                <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{url('/images/gallery/media/'.$image->name)}}" data-sub-html="<h4>{{$image->title}}</h4><p>{{$image->caption}}.</p>">
                                    <a href="">
                                        <img class="img-responsive" src="{{url('/images/gallery/media/'.$image->name)}}">
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <p class="text-center">No Images Till Now.</p>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!---->
@endsection