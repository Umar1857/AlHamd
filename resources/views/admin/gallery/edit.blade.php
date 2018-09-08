@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                {{--Session Alert Starts--}}
                @if (session('message'))
                    <div class="alert alert-success alert-notification">
                        {{ session('message') }}
                    </div>
                @endif
            {{--Session Alert Ends--}}

            <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit An Image</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="/admin/image/{{$image->id}}" method="post">
                                <div class="box-body">
                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label>Image Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Please Enter Image Title"value="{{ $image->title }}" required autofocus>

                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('caption') ? ' has-error' : '' }}">
                                        <label>Image Caption</label>
                                        <input type="text" name="caption" class="form-control" placeholder="Please Enter Image Caption" value="{{ $image->caption }}" required>

                                        @if ($errors->has('caption'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('caption') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Image</label><br>
                                        <img src="{{url('/images/gallery/media/'.$image->name)}}" width="150px" height="150px">
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-lg btn-primary pull-right">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection