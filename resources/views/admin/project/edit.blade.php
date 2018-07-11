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
                        <h3 class="box-title">Edit Project</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="/admin/project/{{$project->id}}" method="post">
                                <div class="box-body">
                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label>Project Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Project Title Here" value="{{$project->title}}" required>

                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label>Project Description</label>
                                        <textarea name="description" rows="12" cols="12" class="form-control" placeholder="Enter Project Description Here">{{ $project->description }}</textarea>

                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('moved_from') ? ' has-error' : '' }}">
                                        <label>Moved From</label>
                                        <select class="form-control" name="moved_from">
                                            <option value="">Select A City</option>
                                            @foreach($cities as $city)
                                                <option value="{{$city->id}}" {{ $project->from == $city->id ? "selected":""}}>{{ $city->name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('moved_from'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('moved_from') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('moved_to') ? ' has-error' : '' }}">
                                        <label>Moved To</label>
                                        <select class="form-control" name="moved_to">
                                            <option value="">Select A City</option>
                                            @foreach($cities as $city)
                                                <option value="{{$city->id}}" {{ $project->to == $city->id ? "selected":""}}>{{ $city->name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('moved_to'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('moved_to') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">

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