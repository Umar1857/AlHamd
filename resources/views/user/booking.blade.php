@extends('layouts.app')
<!---->
@section('content')
    <div class="intro about_content">
        {{--<div class="main_banner">
            <div class="hotel_description text-center">
                <h1>BOOK NOW!</h1>

                <p>We take pride in serving our clients with great<span class="white_txt">passion</span>to detail</p>
            </div>
        </div>--}}
    </div>
    <div class="about_txt">
        <h1>BOOK NOW!</h1>
    </div>
    <div class="contact-form">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                {{--Session Alert Starts--}}
                @if (session('message'))
                    <div class="alert alert-success alert-notification">
                        {{ session('message') }}
                    </div>
                @endif
                {{--Session Alert Ends--}}

                <form method="post" action="{{route('booking.submit')}}">
                    <div class="form-group col-md-12 {{ $errors->has('services') ? ' has-error' : '' }}">
                        <label for="services">What Services You Are Looking For!!</label>
                        {{--<input type="text" class="form-control fields" name="username" id="name" placeholder="Name" value="{{ old('username') }}" >--}}
                        <select class="form-control fields" onchange="selectedService()" id="services" name="services" >
                            <option value="">Select A Service</option>
                            @foreach($services as $service)
                                <option value="{{$service->id}}">{{ $service->name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('services'))
                            <span class="help-block">
                                <strong>{{ $errors->first('services') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div id="itemsDiv" class="form-group col-md-12 {{ $errors->has('item') ? ' has-error' : '' }}">

                    </div>
                    @if ($errors->has('services'))
                        <span class="help-block">
                                <strong>{{ $errors->first('services') }}</strong>
                            </span>
                    @endif
                    <div class="booking_form_heading">DELIVERY INFORMATION</div>
                    <div class="form-group col-md-6 {{ $errors->has('from') ? ' has-error' : '' }}">
                        <label for="message">Moving From</label>
                        <select class="form-control fields" name="from" value="{{ old('from') }}" >
                            <option value="">Select A City</option>
                            @foreach($cities as $city)
                                <option value="{{$city->id}}" {{ old("from") == $city->id ? "selected":""}}>{{ $city->name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('from'))
                            <span class="help-block">
                                <strong>{{ $errors->first('from') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 {{ $errors->has('from_address') ? ' has-error' : '' }}">
                        <label for="message">Moving From Address</label>
                        <input type="text" name="from_address" class="form-control fields" value="{{ old('from_address') }}" required>

                        @if ($errors->has('from_address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('from_address') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 {{ $errors->has('to') ? ' has-error' : '' }}">
                        <label for="message">Moving To</label>
                        <select class="form-control fields" name="to" value="{{ old('to') }}" >
                            <option value="">Select A City</option>
                            @foreach($cities as $city)
                                <option value="{{$city->id}}" {{ old("from") == $city->id ? "selected":""}}>{{ $city->name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('to'))
                            <span class="help-block">
                                <strong>{{ $errors->first('to') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 {{ $errors->has('to_address') ? ' has-error' : '' }}">
                        <label for="message">Moving To Address</label>
                        <input type="text" name="to_address" class="form-control fields" value="{{ old('to_address') }}"  required>

                        @if ($errors->has('to_address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('to_address') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class='col-sm-12'>
                        <div class="form-group  {{ $errors->has('moving_datetime') ? ' has-error' : '' }}">
                            <label for="message">Moving Date And Time</label>
                            <div class='input-group date' id='datetimepicker1'>
                                <input type="text" name="moving_datetime" id="moving_datetime" class="form-control fields" value="{{ old('moving_datetime') }}"  required>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>

                            @if ($errors->has('moving_datetime'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('moving_datetime') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            var dateToday  = new Date();
                            $('#datetimepicker1').datetimepicker({
                                minDate: dateToday,
                            });
                        });
                    </script>

                    {{--<div class="form-group col-md-6 {{ $errors->has('moving_time') ? ' has-error' : '' }}">
                        <label for="message">Moving Time</label>
                        <input type="text" name="moving_time" id="moving_time" class="form-control fields" value="{{ old('moving_time') }}">

                        @if ($errors->has('moving_time'))
                            <span class="help-block">
                                <strong>{{ $errors->first('moving_time') }}</strong>
                            </span>
                        @endif
                    </div>--}}

                    {{--<div class='col-sm-6'>
                        <div class="form-group {{ $errors->has('moving_time') ? ' has-error' : '' }}">
                            <label for="message">Moving Time</label>
                            <div class='input-group date' id='datetime'>
                                <input type="text" name="moving_time" id="moving_time" class="form-control fields" value="{{ old('moving_time') }}">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>

                            @if ($errors->has('moving_time'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('moving_time') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetime').datetimepicker({
                                format: 'LT'
                            });
                        });
                    </script>--}}

                    <div class="form-group col-md-12 {{ $errors->has('message') ? ' has-error' : '' }}">
                        <label for="message">Additional Detail</label>
                        <textarea class="form-control" name="message" placeholder="Type your message here..." rows="3" required>{{old('message') }}</textarea>

                        @if ($errors->has('message'))
                            <span class="help-block">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="booking_form_heading">PERSONAL INFORMATION</div>
                    <div class="form-group col-md-6 {{ $errors->has('fname') ? ' has-error' : '' }}">
                        <label for="name">First Name</label>
                        <input type="text" class="form-control fields" name="fname" id="name" placeholder="Name" value="{{ old('fname') }}" required>

                        @if ($errors->has('fname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fname') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('lname') ? ' has-error' : '' }}">
                        <label for="name">Last Name</label>
                        <input type="text" class="form-control fields" name="lname" id="name" placeholder="Name" value="{{ old('lname') }}" required>

                        @if ($errors->has('lname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lname') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control fields" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="number">Number</label>
                        <input type="text" class="form-control fields" name="phone" id="number" placeholder="Number" value="{{ old('phone') }}" required>

                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="hvr-shutter-out-horizontal submit_button pull-right">Book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---->
@endsection
