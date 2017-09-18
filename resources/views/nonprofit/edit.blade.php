@extends('layouts.master')

@section('title')
<title>Edit Your Account Info</title>
@stop

@section('content')

<!DOCTYPE html>
    <div class="container">
        <form method="POST" action="{{ action('NonprofitController@update', $user->id) }}">
            {!! csrf_field() !!}
            <div class="row">

            <h1 class="section-title text-center">Update Your Account</h1>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                Name of Nonprofit: <input type="text" class="form-control" id="organization_name" name="organization_name" value="{{ $user->organization_name }}" placeholder="" data-required>
            </div>
            <div class="form-group">
                Admin Name: <input type="text" class="form-control" id="admin" name="admin" value="{{ $user->admin }}" placeholder="" data-required>
            </div>
            <div class="form-group">
                Username: <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" placeholder="" data-required>
            </div>
            <div class="form-group">
                Bio About Your Nonprofit: <textarea name="bio" rows="3" cols="64">{{ $user->bio }}</textarea>
            </div>
            {{ method_field('PUT') }}
            <button>Update</button>
        </form>
    </div>
@stop

