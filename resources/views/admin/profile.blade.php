@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                {{--Session Alert Starts--}}
                @if (session('message'))
                    <div class="alert alert-success alert-notification">
                        {{ session('message') }}
                    </div>
                @endif
                {{--Session Alert Ends--}}

                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Set your Profile</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form role="form" action="/admin/profile" method="POST">
                                <div class="box-body">
                                    <div class="form-group {{ $errors->has('email1') ? ' has-error' : '' }}">
                                        <label>Email ID 1</label>
                                        <input type="text" name="email1" class="form-control" placeholder="Enter First Email Address" value="{{ old('email1') }}"  autofocus>

                                        @if ($errors->has('email1'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email1') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('email2') ? ' has-error' : '' }}">
                                        <label>Email ID 2</label>
                                        <input type="text" name="email2" class="form-control" placeholder="Enter Second Email Address" value="{{ old('email2') }}" >

                                        @if ($errors->has('email2'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email2') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('email3') ? ' has-error' : '' }}">
                                        <label>Email ID 3</label>
                                        <input type="text" name="email3" class="form-control" placeholder="Enter Third Email Address" value="{{ old('email3') }}" >

                                        @if ($errors->has('email3'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email3') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('phone1') ? ' has-error' : '' }}">
                                        <label>Phone No 1</label>
                                        <input type="text" name="phone1" class="form-control" placeholder="Enter Phone Number" value="{{ old('phone1') }}" >

                                        @if ($errors->has('phone1'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('phone1') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('phone2') ? ' has-error' : '' }}">
                                        <label>Phone No 2</label>
                                        <input type="text" name="phone2" class="form-control" placeholder="Enter Phone Number" value="{{ old('phone2') }}" >

                                        @if ($errors->has('phone2'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('phone2') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('phone3') ? ' has-error' : '' }}">
                                        <label>Phone No 3</label>
                                        <input type="text" name="phone3" class="form-control" placeholder="Enter Phone Number" value="{{ old('phone3') }}" >

                                        @if ($errors->has('phone3'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('phone3') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Enter Your Address" value="{{ old('address') }}">

                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('regularhour') ? ' has-error' : '' }}">
                                        <label>Regular Hours</label>
                                        <input type="text" name="regularhour" class="form-control" placeholder="Enter Regular Hours" value="{{ old('regularhour') }}">

                                        @if ($errors->has('regularhour'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('regularhour') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('weekendhour') ? ' has-error' : '' }}">
                                        <label>Weekend Hours</label>
                                        <input type="text" name="weekendhour" class="form-control" placeholder="Enter Weekend Hours" value="{{ old('weekendhour') }}">

                                        @if ($errors->has('weekendhour'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('weekendhour') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook" class="form-control" placeholder="Enter Facebook Page Address" >

                                        @if ($errors->has('facebook'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('instagram') ? ' has-error' : '' }}">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" class="form-control" placeholder="Enter Instagram Page Address" >

                                        @if ($errors->has('instagram'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('instagram') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" class="form-control" placeholder="Enter Twitter Page Address" >

                                        @if ($errors->has('twitter'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}">
                                        <label>LinkedIn</label>
                                        <input type="text" name="linkedin" class="form-control" placeholder="Enter LinkedIn Page Address" >

                                        @if ($errors->has('linkedin'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('linkedin') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-lg btn-primary pull-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection