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
                    <a href="/admin/faqs/create" class="btn btn-md btn-primary addNewService">Add An FAQ</a>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">FAQ'S Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="projects" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>FAQ</th>
                                <th>Answer</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($faqs as $faq)
                            <tr>
                                <td>{{str_limit($faq->question, 30)}}</td>
                                <td>{{str_limit($faq->answer, 80)}}</td>
                                <td class="text-center">
                                    <span><a class="btn btn-sm btn-default deleteForm" href="/admin/faqs/{{$faq->id}}">Show</a></span>
                                    <span><a class="btn btn-sm btn-primary deleteForm" href="/admin/faqs/{{$faq->id}}/edit">Edit</a></span>
                                    <div class="deleteForm">
                                        {{ Form::open(array('url' => '/admin/faqs/'.$faq->id, 'id' => 'deleteForm')) }}
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
                                <th>FAQ</th>
                                <th>Answer</th>
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