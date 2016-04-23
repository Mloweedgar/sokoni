@include('includes.layouts.head')
<body>
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success" id="message-box">
                                {{ session('status') }}
                                <button class="btn pull-right app-cancel">&times;</button>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                            <fieldset>
                                <legend><strong>Reset Password</strong></legend>
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

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-envelope"></i>Send Password Reset Link
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
