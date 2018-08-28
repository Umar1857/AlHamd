@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- general form elements -->

                {{--Session Alert Starts--}}
                @if (session('message'))
                    <div class="alert alert-success alert-notification">
                        {{ session('message') }}
                    </div>
                @endif
                {{--Session Alert Ends--}}

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Contact Reply</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                        <div class="box-body">
                            <h3 class="text-center">Customer Query</h3>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$contact->name}}" readonly>
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" value="{{$contact->email}}" readonly>
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control" value="{{$contact->contact_no}}" readonly>
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" rows="4" name="message" readonly>{{$contact->message}}</textarea>
                            </div>
                            <hr>
                            <h3 class="text-center">Admin Reply</h3>

                            <form role="form" action="{{route('contact.reply')}}" method="POST">

                                <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject of this Email" value="{{old('subject')}}">
                                    @if ($errors->has('subject'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('reply') ? ' has-error' : '' }}">
                                    <label>Write Your Reply</label>
                                    <textarea class="form-control" name="reply" rows="5" placeholder="Write Your Reply">{{ old('reply') }}</textarea>

                                    @if ($errors->has('reply'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('reply') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="contactID" value="{{$contact->id}}">
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </form>
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