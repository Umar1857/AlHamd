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

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Quote Reply</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$quote->name}}" readonly>
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" value="{{$quote->email}}" readonly>
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" class="form-control" value="{{$quote->contact_no}}" readonly>
                        </div>

                        <div class="form-group">
                            <label>Moving From</label>
                            <input type="text" name="phone" class="form-control" value="{{$quote->from->name}}" readonly>
                        </div>

                        <div class="form-group">
                            <label>Moving To</label>
                            <input type="text" name="phone" class="form-control" value="{{$quote->to->name}}" readonly>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="4" name="message" readonly>{{$quote->message}}</textarea>
                        </div>
                        <hr>
                        <h3 class="text-center">Admin Reply</h3>

                        <form role="form" action="{{route('quote.reply')}}" method="POST">
                            <div class="form-group" {{ $errors->has('subject') ? ' has-error' : '' }}>
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Write Subject For Email" value={{old('subject')}}>

                                @if ($errors->has('reply'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('reply') ? ' has-error' : '' }}">
                                <label>Write Your Reply</label>
                                <textarea class="form-control" name="reply" placeholder="Write Your Reply" rows="5">{{ old('reply') }}</textarea>

                                @if ($errors->has('reply'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('reply') }}</strong>
                                        </span>
                                @endif
                            </div>

                            <input type="hidden" name="quoteID" value="{{$quote->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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