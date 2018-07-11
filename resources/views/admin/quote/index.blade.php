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
                        <h3 class="box-title">Quotes Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="quotes" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>City From</th>
                                <th>City To</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($quotes as $quote)
                                <tr>
                                    <td>{{$quote->name}}</td>
                                    <td>{{$quote->email}}</td>
                                    <td>{{$quote->contact_no}}</td>
                                    <td>{{$quote->from->name}}</td>
                                    <td>{{$quote->to->name}}</td>
                                    <td>{{str_limit($quote->message, 70)}}</td>
                                    <td class="text-center">
                                        <span><a class="btn btn-sm btn-default" href="/admin/quote/{{$quote->id}}"> View </a></span>
                                        {{--<span><a class="btn btn-sm btn-primary" href="/admin/quote/reply/{{$quote->id}}"> Reply </a></span>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>City From</th>
                                <th>City To</th>
                                <th>Message</th>
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