@extends('layouts.login')
@section('content')
<!--Body-->
<body>
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white">
            <div class="logobox">
                <img src="/assets/img/wc-logo.png" alt="Worldcrunch" class="img-responsive" />
            </div>
            <div class="loginbox-title">SIGN IN</div>
            <div class="loginbox-or">
                <div class="or-line"></div>
            </div>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                {!! csrf_field() !!}

                <div  class="form-group{{ $errors->has('email') ? ' has-error' : ''}} loginbox-textbox">
                  <label class="col-md-4 control-label">E-Mail Address</label>
                  <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" />
                  @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} loginbox-textbox">
                <label class="col-md-4 control-label">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" />
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>
            <div class="loginbox-forgot">
                <a href="{{ url('/admin/password/reset') }}">Forgot Password?</a>
            </div>
            <div class="loginbox-submit">
                <input type="button" class="btn btn-primary btn-block" value="Login">
            </div>
            <div class="loginbox-signup">
                <a href="register.html">Sign Up With Email</a>
            </div>
        </form>
    </div>

</div>
@endsection