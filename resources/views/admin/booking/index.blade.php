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
                        <h3 class="box-title">{{$status}} Bookings</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="booking" class="table table-striped table-bordered" style="width:100%">
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
                            @foreach($bookings as $booking)
                                <tr>
                                    <td>{{$booking->fname.' '.$booking->lname}}</td>
                                    <td>{{$booking->email}}</td>
                                    <td>{{$booking->number}}</td>
                                    <td>{{$booking->from->name}}</td>
                                    <td>{{$booking->to->name}}</td>
                                    <td>{{str_limit($booking->description, 70)}}</td>
                                    <td class="text-center">
                                        <span><a class="btn btn-sm btn-default" href="/admin/booking/{{$booking->id}}"> View </a></span>
                                        {{--<span><a class="btn btn-sm btn-primary" href="/admin/contact/reply/{{$booking->id}}"> Reply </a></span>--}}
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