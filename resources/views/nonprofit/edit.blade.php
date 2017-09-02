@extends('layouts.master')

@section('title')
<title>Edit Account</title>
@stop


@section('content')
    <main class="container">
<!--    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
        {!! $errors->first('url', '<span class="help-block">:message</span>') !!}
        {!! $errors->first('content', '<span class="help-block">:message</span>') !!} -->

        <form method="POST" action="">
<!--        "{{ action('NonprofitController@update', $nonprofit->id)" -->
            {!! csrf_field() !!}
            <h1>Edit Your account</h1>
            Name of Nonprofit: <input type="text" name="nonprofitname">
            <br>
            Admin Name: <input type="text" name="nonprofitadmin">
            <br>
            Username: <input type="text" name="nonprofitusername">
            <br>
            Bio About Your Nonprofit?
            <br>
            <textarea name="nonprofitbio" rows="5" cols="40"></textarea>
            <br>
        <!-- File Photo Input -->
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image">
            </div>
<!--             {{ method_field('PUT') }} -->
            <button>Update</button>
        </form>
    </main>
@stop