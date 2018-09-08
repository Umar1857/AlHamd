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
                        <h3 class="box-title">Add New Image</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" enctype="multipart/form-data" action="/admin/image" method="POST">
                                <div class="box-body">
                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label>Image Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Please Enter Image Title" value="{{ old('title') }}" required autofocus>

                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('caption') ? ' has-error' : '' }}">
                                        <label>Image Caption</label>
                                        <input type="text" name="caption" class="form-control" placeholder="Please Enter Image Caption" value="{{ old('caption') }}" required>

                                        @if ($errors->has('caption'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('caption') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label>Upload Image</label>
                                        <input type="file" name="image" value="{{ old('image') }}" required>

                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-lg btn-primary pull-right">Submit</button>
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