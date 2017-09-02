@extends('layouts.master')

@section('title')
<title>Register</title>
@stop


@section('content')
    <main class="container">
<!--         {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
        {!! $errors->first('url', '<span class="help-block">:message</span>') !!}
        {!! $errors->first('content', '<span class="help-block">:message</span>') !!} -->

        <form method="POST" action="{{ action('PostsController@store') }}">
            {!! csrf_field() !!}
            <h1>Register Your Nonprofit</h1>
            Name of Nonprofit: <input type="text" name="nonprofitname" value="{{ old('nonprofitname') }}">
            <br>
            Admin Name: <input type="text" name="nonprofitadmin" value="{{ old('nonprofitadmin') }}">
            <br>
            Username: <input type="text" name="nonprofitusername" value="{{ old('nonprofitusername') }}">
            <br>
            Bio About Your Nonprofit?
            <br>
            <textarea name="nonprofitbio" rows="5" cols="40">{{ old('nonprofitbio') }}</textarea>
            <br>
            How will you benefit from this service?
            <br>
            <textarea name="nonprofitbenefit" rows="5" cols="40">{{ old('nonprofitbenefit') }}</textarea>
            <br>
        <!-- File Photo Input -->
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image">
            </div>
            <button>Register</button>
        </form>
    </main>
@stop