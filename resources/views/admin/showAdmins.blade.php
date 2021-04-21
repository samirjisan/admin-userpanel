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

<title>Show All Admin</title>
@extends('layouts.header')
@section('content')
        <!-- <div class="navbar-wrapper">
<a class="navbar-brand text-black " href="#pablo">Bus List</a>
 </div>-->
@include('message')
<body>
{{--@extends('layouts.master')--}}
{{--@section('learn')--}}
    {{--<div class="container">--}}
        <h1>Admin Information</h1>

<a href="{{ route('admin.logout') }}">Logout</a>



        {{--@if(session('updateSuccess'))--}}
            {{--<p style="color: greenyellow">{{session('updateSuccess')}}</p>--}}
        {{--@endif--}}

        {{--@if(session('deleteSuccess'))--}}
            {{--<p style="color: red">{{session('deleteSuccess')}}</p>--}}
        {{--@endif--}}

        <table border="1px">
            <tr>

                <th>ID</th>
                <th>Email</th>

            </tr>
            @foreach($admins as $admin)
                <tr>

                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->email }}</td>
                </tr>
            @endforeach
        </table>
    {{--</div>--}}
@endsection
</body>
</html>