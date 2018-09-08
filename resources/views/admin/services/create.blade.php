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
                        <h3 class="box-title">Create New Service</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" name="createService" enctype="multipart/form-data" action="/admin/service" method="POST">
                                <div class="box-body">
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label>Service Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Service Name Here" value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label>Service Image</label>
                                        <input type="file" name="image" value="{{ old('image') }}">

                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label>Service Description</label>
                                        <textarea name="description" rows="15" class="form-control" id="ServiceBody" placeholder="Enter Service Description Here">{{ old('description') }}</textarea>

                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('description') }}</strong>
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