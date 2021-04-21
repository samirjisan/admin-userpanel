<!DOCTYPE html>
<html>
{{--<head>--}}
    {{--<title>Search functionality</title>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<link rel="stylesheet"--}}
          {{--href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
    {{--<form action="/dashboard" method="POST" role="search">--}}
        {{--{{ csrf_field() }}--}}
        {{--<div class="input-group">--}}
            {{--<input type="text" class="form-control" name="q"--}}
                   {{--placeholder="Search users"> <span class="input-group-btn">--}}
					{{--<button type="submit" class="btn btn-default">--}}
                        {{--<span class="glyphicon glyphicon-search"></span>--}}
                    {{--</button>--}}
				{{--</span>--}}
        {{--</div>--}}
    {{--</form>--}}
    <div class="container">
        @if(isset($users))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2>Sample User details</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @elseif(isset($message))
            <p>{{ $message }}</p>
        @endif
    </div>

</body>
</html>