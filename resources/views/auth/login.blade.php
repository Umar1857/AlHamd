@extends('layouts.app')
<!---->
@section('content')
<div class="signin_modal accounts_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="wedding_form modal-content">
            <h3>Login to your account</h3>
            <form id="signInForm" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Your e-mail..." name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Your password..." name="password" required>
                    <a href="/password/reset" class="forgot">Forgot?</a>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="hvr-sweep-to-right"><span>sign in!</span></button>
            </form>
            <div class="social_login text-center">
                <p>Or login via social networks.</p>
                <ul>
                    <li><a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                {{--<p>If you don`t have an account, you can <a href="/register"><strong>create new</strong></a></p>--}}
            </div>
        </div>
    </div>
</div>

@endsection
