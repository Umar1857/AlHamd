@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <h3>Image Gallery</h3>
                <div class="row">
                    <div class="home">
                        <div class="demo-gallery">
                            <ul id="lightgallery" class="list-unstyled row">
                                @foreach($images as $image)
                                    <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{url('/images/gallery/media/'.$image->name)}}" data-sub-html="<h4>{{$image->title}}</h4><p>{{$image->caption}}.</p>">
                                        <a href="">
                                            <img class="img-responsive" src="{{url('/images/gallery/media/'.$image->name)}}" alt="{{$image->title}}">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection