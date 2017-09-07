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
                Name of Company: <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="" data-required>
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
                Password: <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your Password">
            </div>
            <div class="form-group">
                Email: <input type="text" class="form-control" id="email" name="email" placeholder="" data-required>
            </div>
            <div class="form-group">
                Contact Number: <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="" data-required>
            </div>
            <div class="form-group">
                Company Website Link: <input type="text" class="form-control" id="website_link" name="website_link" placeholder="">
            </div>
            <div class="form-group">
                Company Tax I.D.: <textarea name="tax_id" rows="3" cols="64">{{ old('tax_id') }}</textarea>
            </div>
            <div class="form-group">
                Bio About Your Nonprofit: <textarea name="bio" rows="3" cols="64">{{ old('bio') }}</textarea>
            </div>
            <div class="form-group">
                Are you currently a corporate sponsor? <textarea name="corporate_sponsor" rows="3" cols="64">{{ old('corporate_sponsor') }}</textarea>
            </div>
            <div class="form-group">
                With who? <textarea name="with_who" rows="3" cols="64">{{ old('with_who') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@stop





