<html>
@extends('layouts.header')
@section('content')
        <!-- <div class="navbar-wrapper">
<a class="navbar-brand text-black " href="#pablo">Bus List</a>
 </div>-->
@include('message')

@if(session('updateSuccess'))
    <p style="color:green;">{{ session('updateSuccess') }}</p>
@endif

@if(session('deleteSuccess'))
    <p style="color:red;">{{ session('deleteSuccess') }}</p>
@endif

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <span class="pull-center">
            <a href="#" data-toggle="modal" data-target="#exampleModalCenteraddbus"
               data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-plus"></i> Add New Operator</a>
            </span>
                <br>
                <br>
                <div class="card">
                    <div class="card-header card-header-primary" style="z-index: 1 !important;">
                        <a href="{{ route('admin.logout') }}">Logout</a>
                        <h4 class="card-title ">Operators List</h4>
                        <h4 class="card-title pull-right">
                            {{ csrf_field() }}
                            <form class="navbar-form" style="z-index: 0">
                                <div class="input-group no-border" type="get" action="#">
                                    <input name="query" type="search" value="" class="form-control" placeholder="Search">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </form><br>Today is: {{ date('d-m-Y', time()) }}</h4>
                        <p class="card-category"> Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if ( count($operators) > 0 )
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Operator Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ( $operators as $data )
                                        <tr>
                                            <td>{{ $data->operator_id }}</td>
                                            <td><a data-toggle="modal" data-target="
                            {{$data->operator_id}}"data-toggle="tooltip">{{ $data->operator_name }}</a></td>
                                            <td>{{ $data->operator_email }}</td>
                                            <td>{{ $data->operator_phone }}</td>
                                            <!-- <td>{{ $data->operator_address }}</td> -->
                                            <!-- <td>{{ $data->operator_description }}</td> -->
                                            <td>{{ $data->created_at }}</td>
                                            <td>
                                                {{--<form action="{{ '/adminAccess/' . $data->operator_id }}" method="post">--}}
                                                    {{--{{ csrf_field() }}--}}
                                                    {{--{{ method_field('DELETE') }}--}}
                                                    {{--<input type="submit" name="submit" value="Edit" class="btn btn-sm btn-info" />--}}
                                                    {{--<input type="submit" name="submit" value="Delete" class="btn btn-sm btn-danger" />--}}
                                                {{--</form>--}}
                                            <a href="{{ route('adminAccess.edit',[$data->operator_id]) }}">Edit</a> || <a href="{{ route('adminAccess.delete',[$data->operator_id]) }}">Delete</a></td>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('adminAccess.add-operator')
@include('adminAccess.add-operator')
{{--@endsection--}}

{{--@include('adminAccess.edit-operator')--}}
{{--@include('adminAccess.edit-operator')--}}
@endsection

</html>

{{--<html>--}}
{{--<h1>HI</h1>--}}
{{--</html>--}}