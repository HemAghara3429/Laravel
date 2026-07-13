<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Student Registration</h2>


    <form action="/student/save" method="POST">

        @csrf

        <label>Name</label><br>
        <input type="text" name="name">

        @error('name')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <label>Email</label><br>
        <input type="email" name="email">

        @error('email')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>


        <label>Course</label><br>
        <input type="text" name="course">

        @error('course')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">
            Save Student
        </button>


    </form>
</body>

</html>
