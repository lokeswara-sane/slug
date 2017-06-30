@extends('base')
@section('title','Login')
@section('content')

<div class="ui pointing menu ui horizontal">
    <div class="ui right menu">
        <div class="ui buttons">
            <button class="ui button black" id="login_btn">
                <i class="sign in button"></i>Login
            </button>
            <div class="or"></div>
            <button class="ui button green">
                <i class="users button"></i>Sign Up
            </button>
        </div>
    </div>
</div> 
<div class="ui fluid container">
    <div class="ui equal width grid">
            <div class="one column center aligned">
                <div class="ui huge header" style="font-size:30em;margin-top: 6%;">Laravel</div>
            </div>
    </div>         
</div>
@include('modals.modal')
@endsection
