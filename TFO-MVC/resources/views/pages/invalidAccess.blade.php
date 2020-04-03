@extends('layouts.app')
@section('content')
    <div class="container">
        <div style="margin: 10% 20%;">
            <img src="{{asset('images/Logo.jpg')}}"
                style="height:150px ;width: 150px; border-radius: 100%; margin-left: 40%"><br><br>
            <div class="alert alert-info" style="text-align: center;">
                Welcome to Track Food Online. You have to first <strong><a href="/login"
                        style="text-decoration:none; color:none;">Login</a></strong>
            </div>
        </div>
    </div>
@stop