<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body style="margin-top: 100px; background-color: #9561e2"><center>
    <h1>Update Credential</h1>
    <form action="{{ route('user.cred.update',[$cred->id]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Title" value="{{ $cred->title }}"></br>
        <input type="text" name="url" placeholder="URL" value="{{ $cred->url }}"></br>
        <input type="text" name="user" placeholder="Username" value="{{ $cred->user }}"></br>
        <input type="email" name="email" placeholder="Email" value="{{ $cred->email }}"></br>
        <input type="password" name="password" placeholder="Password" value="{{ $cred->password }}"></br>
        <input type="submit" name="submit" value="Update">
    </form></center>
</body>
</html>
