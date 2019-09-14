<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body style="margin-top: 50px">
<div class="container">
    <table width="100%">
        @if(Auth::user()->role == 'Admin')
            <tr>
                <td align="center">
                    <button type="button" class="btn btn-success">
                        <a href="{{route('user.dashboard')}}" style="color: whitesmoke"><strong>Dashboard</strong></a>
                    </button>
                </td>
                <td align="center">
                    <button type="button" class="btn btn-primary">
                        <a href="{{route('admin.show')}}" style="color: whitesmoke"><strong>Show User</strong></a>
                    </button>
                </td>
                <td align="center">
                    <button type="button" class="btn btn-warning">
                        <a href="{{route('user.addcredentials')}}" style="color: black"><strong>Add Credential</strong></a>
                    </button>
                </td>
                <td align="center">
                    <button type="button" class="btn btn-info">
                        <a href="{{route('user.showcredentials')}}" style="color: whitesmoke"><strong>Show Credentials</strong></a>
                    </button>
                </td>
                <td align="center">
                    <button type="button" class="btn btn-dark">
                        <a href="{{route('user.account')}}" style="color: whitesmoke"><strong>View Account</strong></a>
                    </button>
                </td>
                <td align="center">
                    <button type="button" class="btn btn-danger">
                        <a href="{{route('user.logout')}}" style="color: whitesmoke"><strong>Logout</strong></a>
                    </button>
                </td>
            </tr>
        @else
            <tr>
                <td align="center">
                    <button type="button" class="btn btn-success">
                        <a href="{{route('user.dashboard')}}" style="color: whitesmoke"><strong>Dashboard</strong></a>
                    </button>
                </td>
                <td align="center">
                    <button type="button" class="btn btn-warning">
                        <a href="{{route('user.addcredentials')}}" style="color: black"><strong>Add Credential</strong></a>
                    </button>
                </td>
                <td align="center">
                    <button type="button" class="btn btn-info">
                        <a href="{{route('user.showcredentials')}}" style="color: whitesmoke"><strong>Show Credentials</strong></a>
                    </button>
                </td>
                <td align="center">
                    <button type="button" class="btn btn-dark">
                        <a href="{{route('user.account')}}" style="color: whitesmoke"><strong>View Account</strong></a>
                    </button>
                </td>
                <td align="center">
                    <button type="button" class="btn btn-danger">
                        <a href="{{route('user.logout')}}" style="color: whitesmoke"><strong>Logout</strong></a>
                    </button>
                </td>
            </tr>
        @endif
    </table>

    <hr>
    <h2 align="center">User Account</h2>
    <table class="table table-hover" width="50%">
        <tbody><th>ID</th>
        <th> {{Auth::user()->id}} </th></tbody>

        <tbody><th>Name</th>
        <th> {{Auth::user()->name}} </th></tbody>

        <tbody><th>Email</th>
        <th> {{Auth::user()->email}} </th></tbody>

        <tbody><th>Phone number</th>
        <th> {{Auth::user()->phone}} </th></tbody>

        <tbody><th>Role</th>
        <th> {{Auth::user()->role}} </th></tbody>

        <tbody><th>Status</th>
        <th> {{Auth::user()->status}} </th></tbody>

        <tbody><th>Action</th>
        <th><button type="button" class="btn btn-outline-info btn-sm">
                    <a href="{{ route('user.editaccount',[Auth::user()->id]) }}"><b>Edit</b></a>
        </button></th></tbody>
    </table>
    <hr>
        <center>
            copyright © 2019, <a href="https://www.samiu.me" target="_blank" style="color: darkslateblue;"><b>Sammy</b></a>. All right reserved.
        </center>
</div>


</body>
</html>
