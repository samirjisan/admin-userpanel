<html>
<title>Show Users</title>

@extends('layouts.header')
@section('content')
        <!-- <div class="navbar-wrapper">
<a class="navbar-brand text-black " href="#pablo">Bus List</a>
 </div>-->
@include('message')
<title>User Register</title>

<body>
<h3>User Register Form</h3>
@include('errors.error')
<form action="{{ route('user.register') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <input type="text" name="username" placeholder="UserName"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password"><br>
    <input type="file" name="image" accept="image/jpeg"><br>
    <input type="submit" name="submit" value="Register">
</form>
</body>
@endsection
</html>