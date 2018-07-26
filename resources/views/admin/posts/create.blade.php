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
                        <h3 class="box-title">Create New Post</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="row">
                        <div class="col-md-12">
                            <form enctype="multipart/form-data" role="form" action="/admin/post" method="POST">
                                <div class="box-body">
                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label>Post Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Post Title Here" value="{{ old('title') }}" required autofocus>

                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label>Post Image</label>
                                        <input type="file" name="image" value="{{ old('image') }}">

                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
                                        <label>Post Body</label>
                                        <textarea name="body" rows="20" class="form-control" id="PostBody" placeholder="Post Body" required>{{ old('title') }}
                                        </textarea>

                                        @if ($errors->has('body'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('body') }}</strong>
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