<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/css/admin/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/admin/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/css/admin/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/admin/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/css/admin/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        {{--<a href="/admin/dashboard"><b>Admin</b>LTE</a>--}}
        <a href="/admin/dashboard"><img src="{{URL::to('images/logo.png')}}"></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password"  placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        Login
                    </button>
                </div>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
        </form>

        <a href="/admin/register" class="text-center">Register a new membership</a>
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/js/admin/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/js/admin/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/js/admin/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>