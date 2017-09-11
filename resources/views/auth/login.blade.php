@extends('layouts.master')

@section('title')
<title></title>
@stop


@section('content')
<div class="container">

    <section id="login">

        <div class="row">

            <h1 class="section-title text text-center">Please Log In</h1>


            <div class="col-md-6 col-md-offset-3">

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
                        <input type="checkbox" name="remember"> Remember Me
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
