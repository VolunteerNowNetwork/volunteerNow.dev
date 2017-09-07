@extends('layouts.master')

@section('title')
<title>Update Your Account</title>
@stop



@section('content')
<div class="container">
    <section id="login">
        <div class="row">
            <h1 class="section-title">Update Your Profile Here</h1>
            <div class="col-md-6 col-md-offset-3">

                <form method="POST" action="{{ action('EmployeeController@update', $user->id) }}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                    Name   <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $user->name }}"
                        data-required>
                    </div>
                   <div class="form-group">
                    Employer Id   <input type="text" class="form-control" id="employer_id" name="employer_id" placeholder="employer id"
                       data-required>
                   </div>
                   <div class="form-group">
                    Email <input type="emil" class="form-control" id="email" name="email" >
                   </div>
                    <div class="form-group">
                    Contact Number  <input type="contactNumber" class="form-control" id="contact_number" name="contact_number">
                    </div>
                    <div class="form-group">
                    Bio About Yourself - Special Skills  <textarea type="text" class="form-control" id="" name="bio">  </textarea>
                    </div>
                    <div class="form-group">
                    Available Hours  <input type="text" class="form-control" id="available_hours" name="available_hours" >
                    </div>
                    <div class="form-group">
                        <label for="image"> Upload Image </label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary"> Update </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
