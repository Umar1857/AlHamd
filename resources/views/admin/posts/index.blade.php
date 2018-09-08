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
                    <a href="/admin/post/create" class="btn btn-md btn-primary addNewService">Add New Post</a>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Posts Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="posts" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td><img src="{{url('/images/post/'.$post->image)}}" alt="{{$post->title}}" width="40px" height="40px"></td>
                                <td>{{$post->title}}</td>
                                <td class="text-center">
                                    <span><a class="btn btn-sm btn-primary deleteForm" href="/admin/post/{{$post->id}}/edit">Edit</a></span>
                                    <div class="deleteForm">
                                        {{ Form::open(array('url' => '/admin/post/'.$post->id , 'id' => 'deleteForm')) }}
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