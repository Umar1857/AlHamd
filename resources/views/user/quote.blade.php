@extends('layouts.app')
<!---->
@section('content')
    {{--<div class="intro about_content">
        <div class="main_banner">
            <div class="hotel_description text-center">
                <h1>GET FREE QUOTE</h1>

                <p>We take pride in service with great<span class="white_txt">attention</span>to detail</p>
            </div>
        </div>
    </div>--}}
    <div class="about_txt">
        <h1>GET A FREE QUOTE</h1>
        <p>
            "Professional house furniture movers in
            @foreach($cities as $city)
            {{$city->name}},
            @endforeach
            "
        </p>
    </div>
    <div class="contact-form">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                {{--Session Alert Starts--}}
                @if (session('message'))
                    <div class="alert alert-success alert-notification">
                        {{ session('message') }}
                    </div>
                @endif
                {{--Session Alert Ends--}}

                <form method="post" action="{{route('quote.submit')}}">
                    <div class="form-group col-md-12 {{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="name">Name</label>
                        <input type="text" class="form-control fields" name="username" id="name" placeholder="Name" value="{{ old('username') }}" required>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
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
                    <div class="form-group col-md-12 {{ $errors->has('from') ? ' has-error' : '' }}">
                        <label for="message">Moving From</label>
                        <select class="form-control fields" name="from" value="{{ old('from') }}" required>
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
                    <div class="form-group col-md-12 {{ $errors->has('to') ? ' has-error' : '' }}">
                        <label for="message">Moving To</label>
                        <select class="form-control fields" name="to" value="{{ old('to') }}" required>
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
                    <div class="form-group col-md-12 {{ $errors->has('message') ? ' has-error' : '' }}">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" placeholder="Type your message here..." rows="3" required>{{old('message') }}</textarea>

                        @if ($errors->has('message'))
                            <span class="help-block">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                        @endif

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="hvr-shutter-out-horizontal submit_button pull-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---->
@endsection
