<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body style="margin-top: 100px; background-color: #9561e2"><center>
    <h1>Update User Information</h1>
    <form action="{{ route('user.update',[$user->id]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" placeholder="Enter Name" name="name" value="{{ $user->name }}"></br></br>
        <input type="text" placeholder="Enter Email" name="email" value="{{ $user->email }}"></br></br>
        <input type="password" placeholder="Enter Password" name="password" required value="{{ $user->password }}"></br></br>
        <input type="password" placeholder="Confirm Password" name="password_confirmation" required value="{{ $user->password_confirmation }}"></br></br>
        <input type="text" placeholder="Enter Phone" name="phone" value="{{ $user->phone }}"></br></br>
        <input type="text" placeholder="Enter Role" name="role" value="{{ $user->role }}"></br></br>
        <input type="text" placeholder="Enter Status" name="status" value="{{ $user->status }}"></br></br>
        <input type="submit" name="submit" value="Update">
    </form></center>
</body>
</html>
