<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
</head>

<body>
    <h2>Reset Password</h2>
    @if ($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="/reset-password" method="POST"> @csrf <label>Email</label><br> <input type="email"
            name="email"><br><br> <label>New Password</label><br> <input type="password" name="password"><br><br>
        <label>Confirm Password</label><br> <input type="password" name="password_confirmation"><br><br> <button
            type="submit">Reset Password</button> </form>
</body>

</html>
