<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show Credential</title>
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
    <h2 align="center">Your Credential Dashboard</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Title</th>
            <th>URL</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($information as $cred)
            <tr>
                <td> {{ $cred->title }} </td>
                <td> {{ $cred->url }} </td>
                <td> {{ $cred->user }} </td>
                <td> {{ $cred->email }} </td>
                <td> {{ $cred->password }} </td>
                <td>
                    <button type="button" class="btn btn-outline-info btn-sm">
                        <a href="{{ route('user.cred.edit',[$cred->id]) }}"><b>Edit</b></a>
                    </button>
                    <button type="button" class="btn btn-outline-danger btn-sm">
                        <a href="{{ route('user.cred.delete',[$cred->id]) }}" style="color: darkred"><b>Delete</b></a>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $information->links() }}
</div>

</body>
</html>
