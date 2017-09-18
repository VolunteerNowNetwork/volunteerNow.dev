<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">   
@extends('layouts.master')
<!DOCTYPE html>
<html>
    <head>
        <title>This page does not exist</title>
@section('content')
        <style>
            html, body {
                height: 100%;
    			font-family: 'Work Sans', sans-serif;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                font-weight: 100;
            }

            .container {
                text-align: center;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                	<br>
                	<img class="topicon" src="/img/android-icon-96x96.png"/>
                	<h1>This page does not exist. </h1>
                	<h1 class="text-center">To see our volunteer opportunities click on the OPPORTUNITIES tab above!</h1>
                </div>
            </div>
        </div>
    </body>
</html>
@stop
