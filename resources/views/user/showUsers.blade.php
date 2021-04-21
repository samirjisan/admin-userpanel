<html>
<title>Show Users</title>

@extends('layouts.header')
@section('content')
        <!-- <div class="navbar-wrapper">
<a class="navbar-brand text-black " href="#pablo">Bus List</a>
 </div>-->
@include('message')
<title>SHOW USERS</title>
<body>
<h1>User List</h1>
<a href="{{ route('user.logout') }}">( {{ App\User::find(Auth::id())->username }} )Logout</a>

@if(session('updateSuccess'))
    <p style="color:green;">{{ session('updateSuccess') }}</p>
@endif

@if(session('deleteSuccess'))
    <p style="color:red;">{{ session('deleteSuccess') }}</p>
@endif
<table border="1px">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td><img src="{{ asset('image/'.$user->image) }}" alt="" width="200px"></td>
            <td><a href="{{ route('user.edit',[$user->id]) }}">Edit</a>||<a href="{{ route('user.delete',[$user->id]) }}">Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
@endsection
</html>