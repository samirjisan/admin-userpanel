<html>

@include('message')
<title>EDIT USERS</title>
<body>

@extends('layouts.header')
@section('content')

<h1>User</h1>
<a href="{{ route('user.logout') }}">( {{ App\User::find(Auth::id())->username }} )Logout</a>


<form action="{{route('user.update',[$user->id])}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    <p>Name</p><input type="text" name="username" placeholder="User Name" value="{{ $user->username }}"></br>
    <p>Email</p><input type="email" name="email" placeholder="Email" value="{{ $user->email }}"></br>
    <input type="file" name="image" accept="image/jpeg"><br>
    <input type="submit" name="submit" value="Update">

</form>

</body>
@endsection
</html>