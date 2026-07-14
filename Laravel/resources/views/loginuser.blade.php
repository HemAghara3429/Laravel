<!DOCTYPE html>
<html>

<head>
    <title>Person Login</title>
</head>

<body>
    <h2>Person Login</h2>
    @if ($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="/loginuser" method="POST">
        @csrf
        <label>Email</label><br>
        <input type="email" name="email" placeholder="enter email"><br><br>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="enter password"><br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>
