@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <div>
                    <a href="/admin/service" class="btn btn-md btn-success addNewService"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">View Image</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Image Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $image->title }}">
                                </div>

                                <div class="form-group">
                                    <label>Image Caption</label>
                                    <input type="text" name="caption" class="form-control" value="{{ $image->caption }}">
                                </div>

                                <div class="form-group">
                                    <label>Image</label><br>
                                    <img src="{{url('/images/gallery/media/'.$image->name)}}" width="150px" height="150px">
                                </div>
                            </div>
                            <!-- /.box-body -->
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