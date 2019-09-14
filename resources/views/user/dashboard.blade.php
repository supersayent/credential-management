@extends('layouts.master-user')

@section('content')
    <div class="main">
        <p>Welcome <b>{{Auth::user()->role}}, {{Auth::user()->name}}</b> to your dashboard.</p>
        <div class="side">
            <nav class="dr-menu">
                <div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label">Account</a></div>
                <ul>
                    {{--<li><a class="dr-icon dr-icon-camera" href="#">Videos</a></li>
                    <li><a class="dr-icon dr-icon-heart" href="#">Favorites</a></li>--}}

                @if(Auth::user()->role == 'Admin')
                    <li><a class="dr-icon dr-icon-user" href="{{route('user.dashboard')}}">{{ Auth::user()->name }}</a></li>
                    <li><a class="dr-icon dr-icon-bullhorn" href="{{route('admin.show')}}">View User</a></li>
                    <li><a class="dr-icon dr-icon-download" href="{{route('user.addcredentials')}}">Add Credential</a></li>
                    <li><a class="dr-icon dr-icon-bullhorn" href="{{route('user.showcredentials')}}">Show Credentials</a></li>
                    <li><a class="dr-icon dr-icon-settings" href="{{route('user.account')}}">Edit Account</a></li>
                    <li><a class="dr-icon dr-icon-switch" href="{{route('user.logout')}}">Logout</a></li>
                @else
                    <li><a class="dr-icon dr-icon-user" href="{{route('user.dashboard')}}">{{ Auth::user()->name }}</a></li>
                    <li><a class="dr-icon dr-icon-download" href="{{route('user.addcredentials')}}">Add Credential</a></li>
                    <li><a class="dr-icon dr-icon-bullhorn" href="{{route('user.showcredentials')}}">Show Credentials</a></li>
                    <li><a class="dr-icon dr-icon-settings" href="{{route('user.account')}}">Edit Account</a></li>
                    <li><a class="dr-icon dr-icon-switch" href="{{route('user.logout')}}">Logout</a></li>
                @endif
                </ul>
            </nav>
        </div>
    </div>

    <script src="js/ytmenu.js"></script>
@endsection
