@extends('layouts.master')

@section('title')
<title>Register Your Company</title>
@stop


@section('content')
    <div class="container">
        <form method="POST" action="">
            {!! csrf_field() !!}
            <div class="row">

            <h1 class="section-title text-center">Register Your Company Here</h1>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                Name of Company: <input type="text" class="form-control" id="nameOfCompany" name="nameOfCompany" placeholder="" data-required>
            </div>
            <div class="form-group">
                Admin Name: <input type="text" class="form-control" id="nonprofitadmin" name="nonprofitadmin" placeholder="" data-required>
            </div>
            <div class="form-group">
                Username: <input type="text" class="form-control" id="nonprofitusername" name="nonprofitusername" placeholder="" data-required>
            </div>
            <div class="form-group">
                Company Website Link: <textarea name="companyWebsiteLink" rows="3" cols="64">{{ old('companyWebsiteLink') }}</textarea>
            </div>
            <div class="form-group">
                Company Tax I.D.: <textarea name="companyTaxId" rows="3" cols="64">{{ old('companyTaxId') }}</textarea>
            </div>
            <div class="form-group">
                Bio About Your Nonprofit: <textarea name="nonprofitbio" rows="3" cols="64">{{ old('nonprofitbio') }}</textarea>
            </div>
            <div class="form-group">
                Are you currently a corporate sponsor? <textarea name="currentlyCorporateSpnsor" rows="3" cols="64">{{ old('currentlyCorporateSponsor') }}</textarea>
            </div>
            <div class="form-group">
                If so, please list who: <textarea name="corporateSponsorWho" rows="3" cols="64">{{ old('corporateSponsorWho') }}</textarea>
            </div>
        <!-- File Photo Input -->






