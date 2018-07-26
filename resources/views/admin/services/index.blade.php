@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div>
                    <a href="/admin/service/create" class="btn btn-md btn-primary addNewService">Add New Service</a>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Services Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="services" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td></td>
                                <td>{{$service->name}}</td>
                                <td>{{str_limit($service->description, 70)}}</td>
                                <td class="text-center">
                                    <span><a class="btn btn-sm btn-default deleteForm" href="/admin/service/{{$service->id}}">View</a></span>
                                    <span><a class="btn btn-sm btn-primary deleteForm" href="/admin/service/{{$service->id}}/edit">Edit</a></span>
                                    <div class="deleteForm">
                                        {{ Form::open(array('url' => '/admin/service/'.$service->id, 'id' => 'deleteForm')) }}
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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection