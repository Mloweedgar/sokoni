@include('includes.layouts.head')
<body>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                @if($errors->has('loginError'))
                                    <div class="alert alert-warning" id="message-box">
                                        {{$errors->first('loginError')}}
                                        <button class="btn pull-right app-cancel">&times;</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            <fieldset>
                                <legend class="text-center"><strong>Login</strong></legend>
                                {!! csrf_field() !!}
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

                                <div class="form-group">
                                    <div class="col-md-11 col-md-offset-1">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <i class="fa fa-btn fa-sign-in"></i>Login
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center" style="margin-top: 20px;">
                                    <strong >
                                        <a class="text-info" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                    </strong>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.layouts.jslinks')
    <script type="text/javascript">
        $(document).ready(function() {

            $('.app-cancel').off('click').on('click', function() {
                $('#message-box').hide();
            });
        });
    </script>
</body>
</html>
