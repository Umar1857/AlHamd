@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div>
                    <a href="/admin/item/create" class="btn btn-md btn-primary addNewService">Add New Item</a>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$service-> name}} Service</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="row">
                        <div class="col-md-12">
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Service Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$service->name}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Service Image</label>
                                        <input type="file" name="image" value="{{$service->image}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Service Description</label>
                                        <textarea name="description" rows="15" class="form-control" placeholder="Enter Service Description Here" readonly>{{$service->description}}</textarea>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Service Items</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="services" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($service->items as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td class="text-center">
                                                <span><a class="btn btn-sm btn-primary deleteForm" href="/admin/item/{{$item->id}}/edit">Edit</a></span>
                                                <div class="deleteForm">
                                                    {{ Form::open(array('url' => '/admin/item/'.$item->id, 'id' => 'deleteForm')) }}
                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    <button class="btn btn-sm btn-danger formDeleteButton">Delete</button>
                                                    {{ Form::close() }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </section>
    <!-- /.content -->
@endsection