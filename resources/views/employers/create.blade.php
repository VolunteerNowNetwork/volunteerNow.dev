@extends('layouts.master')

@section('title')
<title>Register Your Company</title>
@stop


@section('content')
    <div class="container">
        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}
            <div class="row">
            <input type="hidden" name="user_group" value="employer">

            <h1 class="section-title text-center">Register Your Company Here</h1>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                Name of Company: <input type="text" class="form-control" id="companyName" name="companyName" placeholder="" data-required>
            </div>
            <div class="form-group">
                Admin: <input type="text" class="form-control" id="admin" name="admin" placeholder="" data-required>
            </div>
            <div class="form-group">
                Username: <input type="text" class="form-control" id="username" name="username" placeholder="" data-required>
            </div>
            <div class="form-group">
                Password: <input type="password" class="form-control" id="password" name="password" placeholder="" data-required>
            </div>
            <div class="form-group">
                Email: <input type="email" class="form-control" id="email" name="email" placeholder="" data-required>
            </div>
            <div class="form-group">
                Contact Number: <input type="double" class="form-control" id="contactNumber" name="contactNumber" placeholder="" data-required>
            </div>
            <div class="form-group">
                Company Website Link: <textarea name="websiteLink" rows="3" cols="64">{{ old('websiteLink') }}</textarea>
            </div>
            <div class="form-group">
                Company Tax I.D.: <textarea name="taxId" rows="3" cols="64">{{ old('TaxId') }}</textarea>
            </div>
            <div class="form-group">
                Bio About Your Nonprofit: <textarea name="bio" rows="3" cols="64">{{ old('bio') }}</textarea>
            </div>
            <div class="form-group">
                Are you currently a corporate sponsor? <textarea name="corporateSponsor" rows="3" cols="64">{{ old('corporateSponsor') }}</textarea>
            </div>
            <div class="form-group">
                With who? <textarea name="withWho" rows="3" cols="64">{{ old('withWho') }}</textarea>
            </div>
            <div class="form-group">
                Place Photo Here: <input type="image" class="form-control" id="image" name="image" placeholder="Add Photo Here" data-required>
            </div>
            
        <!-- File Photo Input -->






