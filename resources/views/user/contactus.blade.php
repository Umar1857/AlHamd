@extends('layouts.app')
<!---->
@section('content')
    <div class="about_txt">
        <h1>Contact Us</h1>
        <p id="quote">
            "We are always there for you, contact us anytime and get your answers"
        </p>
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

                <form method="post" action="{{route('contact.submit')}}">
                    <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="name">Name</label>
                        <input type="text" class="form-control fields" name="username" id="name" placeholder="Name" value="{{ old('username') }}" required>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="number">Number</label>
                        <input type="text" class="form-control fields" name="phone" id="number" placeholder="Number" value="{{ old('phone') }}" required>

                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control fields" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" placeholder="Type your message here..." rows="3" required>{{ old('message') }}</textarea>

                        @if ($errors->has('message'))
                            <span class="help-block">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                        @endif
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="hvr-shutter-out-horizontal submit_button pull-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!---->
@endsection
