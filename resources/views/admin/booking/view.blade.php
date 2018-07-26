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
                        <h3 class="box-title">Booking</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">
                        <div class="col-md-12">
                            <form method="post" action="{{route('booking.update')}}">
                                <div class="form-group col-md-12 {{ $errors->has('status') ? ' has-error' : '' }}">
                                    <label for="status">Update Booking Status</label>
                                    <select class="form-control fields" name="status" value="{{ old('status') }}" required>
                                        <option value="Pending" {{$booking->status =='Pending'? 'selected' :''}}>Pending</option>
                                        <option value="Confirmed" {{$booking->status =='Confirmed' ? 'selected': ''}}>Confirmed</option>
                                        <option value="Completed" {{$booking->status =='Completed' ? 'selected': ''}}>Completed</option>
                                    </select>

                                    @if ($errors->has('status'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="oldStatus" value="{{$booking->status}}">
                                        <input type="hidden" name="id" value="{{$booking->id}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <h3>Personal Details</h3>
                            <div class="form-group col-md-6">
                                <label>First Name</label>
                                <input type="text" name="fname" class="form-control" value="{{$booking->fname}}" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Last Name</label>
                                <input type="text" name="lname" class="form-control" value="{{$booking->lname}}" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" value="{{$booking->email}}" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control" value="{{$booking->number}}" readonly>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h3>Delivery Details</h3>
                            <div class="form-group col-md-6">
                                <label>Moving From</label>
                                <input type="text" name="from" class="form-control" value="{{$booking->from->name}}" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Moving From Address</label>
                                <input type="text" name="from_address" class="form-control" value="{{$booking->moving_from_address}}" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Moving To</label>
                                <input type="text" name="to" class="form-control" value="{{$booking->to->name}}" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Moving To Address</label>
                                <input type="text" name="to_address" class="form-control" value="{{$booking->moving_to_address}}" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Moving Date</label>
                                <input type="text" name="date" class="form-control" value="{{$booking->moving_date}}" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Moving Time</label>
                                <input type="text" name="time" class="form-control" value="{{$booking->moving_time}}" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control" value="{{$booking->status}}" readonly>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Additional Details</label>
                                <textarea class="form-control" rows="4" name="message" readonly>{{$booking->description}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h3>Service Details</h3>
                            <div class="form-group col-md-6">
                                <label>Service</label>
                                <input type="text" name="service" class="form-control" value="{{$booking->service->name}}" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Item</label>
                                <input type="text" name="item" class="form-control" value="{{$booking->item->name}}" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
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

                                <input type="hidden" name="quoteID" value="{{$booking->id}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </form>
                        </div>
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