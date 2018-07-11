@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Projects Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="projects" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>City</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{$project->title}}</td>
                                <td class="text-center">
                                    <div><strong>From: </strong> {{$project->movedFrom->name}} </div>
                                    <div><strong>To: </strong> {{$project->movedTo->name}} </div>
                                </td>
                                <td>{{str_limit($project->description, 60)}}</td>
                                <td>{{$project->created_at->format('d-m-Y')}}</td>
                                <td class="text-center">
                                    <span><a class="btn btn-sm btn-primary deleteForm" href="/admin/project/{{$project->id}}/edit">Edit</a></span>
                                    <div class="deleteForm">
                                        {{ Form::open(array('url' => '/admin/project/'.$project->id, 'id' => 'deleteForm')) }}
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
                                <th>Title</th>
                                <th>City</th>
                                <th>Created At</th>
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