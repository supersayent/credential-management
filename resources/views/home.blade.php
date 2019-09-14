@extends('layouts.master')

@section('content')
    <section class="stage" style="margin-top: 200px">
        <div id="register" class="div">
            <p id="homep" class="p" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                Register
            </p>
        </div>

        <div id="login" class="div">
            <p class="p" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">
                Login
            </p>
        </div>

        <div id="contact" class="div">
            <p class="p">Contact</p>
        </div>

        <div id="owner" class="div">
            <p class="p">Owner</p>
        </div>
    </section>

    @include('user.register')
    @include('user.login')
@endsection

