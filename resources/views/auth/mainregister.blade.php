@extends('layouts.master')

@section('title')
<title>Register</title>
@stop


@section('content')
    <div class="container">
        <form method="POST" action="">
            <div class="row">
                <div class="form-group">
                    <h1 class="section-title text-center">Register As A</h1>

                    <div class="col-md-6 col-md-offset-3">
                    <a class="text-center" href="/nonprofit/create">Nonprofit</a>
                    <br>
                    <a class ="text-center" href="/employer/create">Employer</a>
                    <br>
                    <a class ="text-center" href="/employee/create">Employee</a>
                    <br>
                    <br>
                    <a href="auth/login" class="btn btn-success">Go To Login</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop