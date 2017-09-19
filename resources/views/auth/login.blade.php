<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet"> 
@extends('layouts.master')

@section('title')
<title>Login</title>
@stop
@section('content')
<style>
    body {
      padding: 0px;
      font-family: 'Work Sans', sans-serif;
      font-size: 16px;
    }

    h1 {
        font-size: 30px;
        color: white;
        margin-top: 30px;
        margin-bottom: 30px;
        text-align: center;
    }
    p {
        font-size: 16px;
        color: black;
        text-align: center;
        margin-bottom: 20px;
        margin-top: 15px;
    }
    img.photo{
      width: 100%;
      opacity: 40%;
      margin-left: 0px;
    }
    div.description{
      position:absolute;
      bottom: 210px;
      left:0px;
      width:100%;
      color:white;
      opacity: 60%;
      filter:alpha(opacity=90);
    }
    p.description_content{
      padding:0px;
      margin:0px;
      font-size: 40px;
    }
    .login{
      background-color:#ff0000;
    }
    .register{
      background-color:#10D0AB;
      color:white;
    }

</style>

<div class='wrapper'>

  <img class="photo" src="/img/volunteer2.jpg" />
    <div class='description'>
    <h1>Login with your Email and Password</h1>
    <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
      {!! csrf_field() !!}
      <div class="container">
          <section id="login">
              <div class="row">
                  <br>
                  <div class="col-md-6 col-md-offset-3">
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
                                  <button type="submit" class="btn login"> Login </button>
                              </div>
                              <div class="col-sm-6 text-right">
                                  <a href="/register" class="btn register"> Register </a>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
        </div>
    </section>
    </div>
@stop
