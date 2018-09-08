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

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Service Items Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="services" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Service Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->service->name}}</td>
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
                                <th>Item Name</th>
                                <th>Service Name</th>
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