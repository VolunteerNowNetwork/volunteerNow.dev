@extends('layouts.master')

@section('title')
<title></title>
@stop
@section('content')
<style>
    body {
      padding: 0px;
      font-family: 'Lato',  sans-serif;
      font-size: 16px;
    }

    h1 {
        font-size: 30px;
        margin-top: 30px;
        margin-bottom: 30px;
        text-align: center;
    }
    .text-center {
        font-size: 20px;
        text-align: center;
    }
    p {
        font-size: 16px;
        text-align: left;
        margin-bottom: 20px;
        margin-top: 15px;
    }

    .photo{
      width: 75%;
      height: 75%;
      margin-left: 80px;
      margin-top: 40px;
      opacity: 40%;
    }

</style>
<div class="container">
    <section id="login">
        <div class="row">
            <h1 class="section-title text text-center"> Please Log In </h1>
            <br>
            <div class="col-md-6 col-md-offset-3">
                <div class='text-center'>The power of community connection!</div>
                <br>
                <p>Login with your Email and Password</p>
                <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
                    {!! csrf_field() !!}

                     {!! $errors->first('email', '<div class="alert alert-danger">:message</div>') !!}
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
                    </div>
                     {!! $errors->first('password', '<div class="alert alert-danger">:message</div>') !!}
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                    </div>
                  <div>
                        <input type="checkbox" name="remember" >   Remember Me
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary"> Login </button>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="/register" class="btn btn-success"> Register </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@stop
