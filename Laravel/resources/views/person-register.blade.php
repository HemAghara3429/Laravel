<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Person Registration Form</h2>
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/person/register" method="POST">

        @csrf

        <label>Name</label><br>
        <input type="text" name="name"><br><br>

        <label>Email</label><br>
        <input type="email" name="email"><br><br>

        <label>Phone</label><br>
        <input type="text" name="phone"><br><br>

        <label>Address</label><br>
        <input type="text" name="address"><br><br>

        <label>Gender</label><br>
        <select name="gender">
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select><br><br>


        <label>Date of Birth</label><br>
        <input type="date" name="date_of_birth"><br><br>

        <label>Password</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Register</button>

    </form>
</body>

</html>
