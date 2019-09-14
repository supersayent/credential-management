<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Password Manager</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .stage{
            height: 350px;
            width: 250px;
            margin-left: auto;
            margin-right: auto;
        }
        .p{
            font-size: 35px;
            text-align: center;
            margin-top: 0;
            cursor: pointer;
            width: 100%;
            background: #78FED6;
            border-radius: 10px;
            font-family: Century Gothic;
            letter-spacing: 5px;
        }
        .div{
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
            width: 200px;
            height: 40px;
            margin-top: 4%;
            transition-duration: 0.2s;

        }
        .p:hover{
            background: white;
            color: black;
        }
        .div:nth-child(odd){
            transform: perspective(300px) rotateY(45deg);
            box-shadow: -2px 2px 7px gray;
        }
        .div:nth-child(even){
            transform: perspective(300px) rotateY(-45deg);
            box-shadow: 2px 2px 7px gray;
        }
        .div:hover{
            transform: rotateY(0);
            background: white;
            color: black;
            box-shadow: 0px 0px 0px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/signup-login.css">
</head>

<body>
    <!-- Navigation -->
    {{--@include('layouts.partial.header')--}}

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.partial.footer')

</body>
</html>
