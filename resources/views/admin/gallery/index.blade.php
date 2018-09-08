@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->

                {{--Session Alert Starts--}}
                @if (session('message'))
                    <div class="alert alert-success alert-notification">
                        {{ session('message') }}
                    </div>
                @endif
                {{--Session Alert Ends--}}

                <div>
                    <a href="/admin/image/create" class="btn btn-md btn-primary addNewService">Add New Image</a>
                    <a href="/admin/gallery" class="btn btn-md btn-default addNewService">Gallery View</a>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Gallery Images Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="images" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $image)
                            <tr>
                                <td class="text-center middle"><img src="{{url('/images/gallery/media/'.$image->name)}}" width="70px" height="70px" alt="{{$image->title}}"></td>
                                <td class="middle">{{str_limit($image->title, 40)}}</td>
                                <td class="middle">{{str_limit($image->caption, 60)}}</td>
                                <td class="text-center middle">
                                    <span><a class="btn btn-sm btn-default deleteForm" href="/admin/image/{{$image->id}}">Show</a></span>
                                    <span><a class="btn btn-sm btn-primary deleteForm" href="/admin/image/{{$image->id}}/edit">Edit</a></span>
                                    <div class="deleteForm">
                                        {{ Form::open(array('url' => '/admin/image/'.$image->id, 'id' => 'deleteForm')) }}
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
                                <th>Title</th>
                                <th>Caption</th>
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