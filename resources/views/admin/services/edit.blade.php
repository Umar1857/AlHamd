@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->

                <!-- /.box-header -->
                <!-- form start -->

                {{--Session Alert Starts--}}
                @if (session('message'))
                    <div class="alert alert-success alert-notification">
                        {{ session('message') }}
                    </div>
                @endif
                {{--Session Alert Ends--}}
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Service</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="/admin/service/{{$service->id}}" method="post">
                                <div class="box-body">
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label>Service Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Service Title Here" value="{{$service->name}}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label>Previously Selected Image</label>
                                        <img src="" class="service_image">
                                    </div>
                                    <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label>Service Image</label>
                                        <input type="file" name="image" value="{{$service->image}}">

                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label>Service Description</label>
                                        <textarea name="description" rows="15" class="form-control" placeholder="Enter Service Description Here" required>{{$service->description}}</textarea>

                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
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