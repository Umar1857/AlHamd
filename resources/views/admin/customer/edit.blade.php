@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8 col-md-offset-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Customer</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    {{--Session Alert Starts--}}
                    @if (session('message'))
                        <div class="alert alert-success alert-notification">
                            {{ session('message') }}
                        </div>
                    @endif
                    {{--Session Alert Ends--}}

                    <form role="form" action="/admin/customers/{{$customer->id}}" method="POST">
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('fname') ? ' has-error' : '' }}">
                                <label>First Name</label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter First Name" value="{{ $customer->fname }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('lname') ? ' has-error' : '' }}">
                                <label>User Name</label>
                                <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" value="{{ $customer->lname }}" required>

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{ $customer->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label>Contact No</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter Contact Number" value="{{ $customer->phone }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{ $customer->address }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label>City</label>
                                <input type="text" name="city" class="form-control" placeholder="Enter City" value="{{ $customer->city }}" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="put">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection