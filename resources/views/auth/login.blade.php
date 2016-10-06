@extends('layouts.admin_template')

@section('initialize')
<?php
    $page_title="Login";
    $page_desc="Sign in to your dashboard";
?>
@stop

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-4 col-md-offset-4 col-sm-7 col-sm-offset-2 col-xs-12 ">
            <div class="panel panel-default" style="background-image: url('{{asset('/bower_components/AdminLTE/dist/img/login-bg.jpg')}}'); ">
                    
                <div class="panel-body  ">
                    <div class="box-header"><h2 class="text-center text-gray" style="font-weight:bold; ">SIGN IN</h2></div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1 col-xs-10 col-xs-offset-1">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            <div class="col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1 col-xs-10 col-xs-offset-1">
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block inline">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <a class="btn btn-link text-olive inline pull-right" style="top:-10px;position:relative;" href="{{ url('/password/reset') }}"><h6>Forgot Your Password?</h6></a>
                        </div>
                        <div class="form-group" style="top:-30px;position:relative;">
                            <div class="col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1 col-xs-10 col-xs-offset-1"">
                                <button type="submit" class="btn btn-primary col-md-12 col-sm-12 col-xs-12">
                                    <i class="fa fa-btn fa-sign-in"></i> Sign In
                                </button>
                            </div>
                        </div>

                        <div class="form-group" style="top:-30px;position:relative;">
                            <div class="col-md-10 col-md-offset-1">
                                <a class="btn btn-link text-gray" href="{{ url('/register') }}"><i class="fa fa-fw fa-user-plus"></i>Don't have an account yet? Join us!</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
