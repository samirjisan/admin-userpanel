<html xmlns:http="http://www.w3.org/1999/xhtml">
<title>User Login</title>

@extends('layouts.header')
@section('content')
        <!-- <div class="navbar-wrapper">
<a class="navbar-brand text-black " href="#pablo">Bus List</a>
 </div>-->
@include('message')
<body>

<h2>Login As User</h2>

<form action="{{ route('user.login') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" name="submit" value="Login">
</form>

</body>

@endsection

</html>