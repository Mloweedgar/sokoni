@include('includes.layouts.head')
<body >
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            <fieldset>
                                {!! csrf_field() !!}
                                <legend class="text-center"><strong>Sign Up</strong></legend>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                        </div>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-key"></i>
                                            </div>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <label class="control-label">Confirm Password</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-key"></i>
                                            </div>
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>
                                        
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <i class="fa fa-btn fa-user"></i>Register
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <!--Sign up with social-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">OR</div>
                            </div>

                            <div class="col-md-12">
                                <a href="{{url('/facebookLogin')}}" class="btn app-fb-btn btn-block">
                                    <i class="fa fa-facebook-official"></i>
                                    Sign up with Facebook
                                </a>
                            </div>

                            <div class="col-md-12">
                                <a href="#" class="btn app-google-btn btn-block">
                                    <i class="fa fa-google-plus-square"></i>
                                    Sign up with Google+
                                </a>
                            </div>
                        </div>
                        <!--message to login if user has account-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center" style="margin-top: 20px;">
                                    <strong >
                                        Already have an Account?&nbsp;
                                        <a href="{{url('/login')}}" class="text-primary">Login here</a>
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
