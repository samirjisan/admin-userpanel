<html>
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<title>Laravel Project</title>--}}
    {{--<link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">--}}
    {{--<script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>--}}
{{--</head>--}}

<title>Login Admin</title>
@extends('layouts.header')
@section('content')
        <!-- <div class="navbar-wrapper">
<a class="navbar-brand text-black " href="#pablo">Bus List</a>
 </div>-->
@include('message')
<body>

<h2>Login As Admin</h2>

{{--@extends('layouts.master')--}}
{{--@include('layouts.home.logbody')--}}
{{--@include('errors.error')--}}

{{--@section('learn')--}}

    {{--<H2 style="text-align: center; color: green">Please Login as Admin</H2>--}}

    @if(session('loginRequest'))
        <p style="color: blue">{{session('loginRequest')}}</p>
    @endif


    <form action="{{ route('admin.login') }}" method="post">
        {{ csrf_field() }}

        {{--<div class="container">--}}
            {{--<label for="email"><b>Email</b></label>--}}
            {{--<input type="text" placeholder="Enter Email" name="email" required><br>--}}

            {{--<label for="password"><b>Password</b></label>--}}
            {{--<input type="password" placeholder="Enter Password" name="password" required><br>--}}

            {{--<button type="submit">Login</button>--}}
            {{--<label>--}}
                {{--<input type="checkbox" checked="checked" name="remember"> Remember me--}}
            {{--</label>--}}
        {{--</div>--}}

        {{--<div class="container" style="background-color:#f1f1f1">--}}
            {{--<button type="button" class="cancelbtn">Cancel</button>--}}
            {{--<span class="password">Forgot <a href="#">password?</a></span>--}}
        {{--</div>--}}

        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="Login">

        @endsection

    </form>

</body>
</html>