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
                        <h3 class="box-title">Booking Table</h3>
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