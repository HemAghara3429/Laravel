<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>ADD NEW USER</h2>


    <form action="/form" method="POST">
        @csrf
        <input type="text" placeholder="enter user name" name="username">

        <br><br>

        <input type="text" placeholder="enter user email" name="useremail">

        <br><br>

        <input type="text" placeholder="enter user city" name="usercity">

        <br><br>


        <label>Gender</label><br>

        <input type="radio" name="gender" value="Male"> Male

        <input type="radio" name="gender" value="Female"> Female

        <br><br>

        <label>Hobbies</label><br>

        <input type="checkbox" name="hobbies[]" value="Cricket"> Cricket

        <input type="checkbox" name="hobbies[]" value="Reading"> Reading

        <input type="checkbox" name="hobbies[]" value="Music"> Music

        <br><br>

        <label>Skill Level (0-100)</label><br>

        <input type="range" name="skill" min="0" max="100">

        <br><br>

        <label>Course</label><br>

        <select name="course">

            <option value="">Select Course</option>

            <option value="PHP">PHP</option>

            <option value="Laravel">Laravel</option>

            <option value="Java">Java</option>

            <option value="Python">Python</option>

        </select>

        <br><br>


        <button type="submit" name="btn">Submit Form</button>

    </form>
</body>

</html>
