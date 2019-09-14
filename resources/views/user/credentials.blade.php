@extends('layouts.master-cred')

@section('content')
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

    <form action="{{route('user.addcredentials')}}" style="max-width:500px;margin:auto" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h2 align="center"><strong>Add Credential</strong></h2>
        <hr>
        <div class="input-container">
            <i class="fa fa-address-card-o icon"></i>
            <input class="input-field" type="text" placeholder="Title" name="title" required>
        </div>

        <div class="input-container">
            <i class="fa fa-link icon"></i>
            <input class="input-field" type="url" placeholder="http://www.yoururl.com" name="url" required>
        </div>

        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Username" name="user" required>
        </div>

        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="email" placeholder="Email" name="email" required>
        </div>

        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="password" required>
        </div>

        <button type="submit" class="btn btn-success"><b>Add</b></button>
    </form>
    <br><hr>

@endsection
