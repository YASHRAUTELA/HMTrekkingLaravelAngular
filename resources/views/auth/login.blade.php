@extends('layouts.myApp')

@section('myApp_content')

@include('header3')

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary" style="border-color: #372e1d;">
                <div class="panel-heading" style="background-color: #372e1d; border-color: #372e1d; font-size: 20px;">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12">
                            <b style="color: #372e1d;">Login with:</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ url('/auth/facebook') }}" class="btn btn-primary btn-block">
                                <i class="fa fa-facebook"></i>    Facebook
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="{{ url('/auth/twitter') }}" class="btn btn-info btn-block">
                                <i class="fa fa-twitter"></i>    Twitter
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="{{ url('/auth/google') }}" class="btn btn-danger btn-block">
                                <i class="fa fa-google"></i>    Google
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="{{ url('/auth/github') }}" class="btn btn-default btn-block">
                                 <i class="fa fa-github"></i>   Github
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('myApp_script')
<script type="text/javascript">
    function myFunction(){
        
    }
</script>
@endsection