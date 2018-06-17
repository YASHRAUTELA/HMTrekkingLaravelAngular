@extends('layouts.myApp')

@section('myApp_style')

@endsection

@section('myApp_content')

@include('header3')
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary" style="border-color: #372e1d;">
                <div class="panel-heading" style="background-color: #372e1d; border-color: #372e1d; font-size: 20px;">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <select id="country" class="form-control input-sm country" style="height: ">
                                    <option>Select Country</option>
                                </select>
                                <input type="text" name="country_name" id="country_name">

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-2">
                                <input id="dial_code" type="text" class="form-control" name="dial_code" readonly="true">
                                
                            </div>
                            <div class="col-md-4">
                                <input id="phone" type="text" class="form-control" name="phone" maxlength="13" required readonly="true">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Captcha</label>

                            <div class="col-md-6 pull-center">
                                <div class="g-recaptcha" data-sitekey="6Lc-R18UAAAAAI3_lVT8sbLOMIeJz7iXFPDs0CHk"></div>
                                {!! app('captcha')->display() !!}


                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('myApp_script')
<script type="text/javascript">
    function myFunction(){
        $.ajax({
            type:'GET',
            url:'/getCountry',
            success:function(data){
                console.log(data);

                $("#country").empty();
                $("#country").append("<option value=''>Select Country</option>");
                $.each(data,function(key,value){
                    $("#country").append("<option value='"+value.dial_code+"' data-country='"+value.name+"'>"+value.name+"</option>");
                    $("#phone").removeAttr("readonly");
                    
                });
            }
        });
    }

    $(document).ready(function(){
        $("select.country").change(function(){
            document.getElementById("dial_code").value= $(".country option:selected").val();
            document.getElementById("country_name").value=$(".country option:selected").attr("data-country");
        });
    });

    
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection