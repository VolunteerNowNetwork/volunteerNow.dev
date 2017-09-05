@extends('layouts.master')

@section('title')
<title>Register Your Nonprofit</title>
@stop


@section('content')
    <div class="container">
        <form method="POST" action="">
            {!! csrf_field() !!}
            <div class="row">

            <h1 class="section-title text-center">Register As A Nonprofit</h1>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                Name of Nonprofit: <input type="text" class="form-control" id="nonprofitname" name="nonprofitname" placeholder="" data-required>
            </div>
            <div class="form-group">
                Admin Name: <input type="text" class="form-control" id="nonprofitadmin" name="nonprofitadmin" placeholder="" data-required>
            </div>
            <div class="form-group">
                Username: <input type="text" class="form-control" id="nonprofitusername" name="nonprofitusername" placeholder="" data-required>
            </div>
            <div class="form-group">
                Password: <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                Bio About Your Nonprofit: <textarea name="nonprofitbio" rows="3" cols="64">{{ old('nonprofitbio') }}</textarea>
            </div>
            <div class="form-group">
                How will you benefit from this service? <textarea name="nonprofitbenefit" rows="3" cols="64">{{ old('nonprofitbenefit') }}</textarea>
            </div>
        <!-- File Photo Input -->
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image">
            </div>
            <button>Register</button>
        </form>
    </div>
@stop


