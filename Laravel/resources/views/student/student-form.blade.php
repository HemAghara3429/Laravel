<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h2>ADD NEW STUDENT</h2>

    <form action="/student" method="POST">
        @csrf
        <input type="text" placeholder="enter student name" name="studentname" required
            value="{{ old('studentname') }}">
        {{-- form validation --}}
        <span>
            @error('studentname')
                {{ $message }}
            @enderror
        </span>

        <br><br>

        <input type="text" placeholder="enter student email" name="studentemail" required
            value="{{ old('studentemail') }}">
        {{-- form validation --}}
        <span>
            @error('studentemail')
                {{ $message }}
            @enderror
        </span>

        <br><br>

        <input type="text" placeholder="enter student city" name="studentcity" required
            value="{{ old('studentcity') }}">
        {{-- form validation --}}
        <span>
            @error('studentcity')
                {{ $message }}
            @enderror
        </span>

        <br><br>

        <label>Gender</label><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        {{-- form validation --}}
        <span>
            @error('gender ')
                {{ $message }}
            @enderror
        </span>
        <br><br>
        <label>Hobbies</label><br>
        <input type="checkbox" name="hobbies[]" value="Cricket"> Cricket
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading
        {{-- form validation --}}
        <span>
            @error('hobbies')
                {{ $message }}
            @enderror
        </span>
        <br><br>
        <label>Skill Level (0-100)</label><br>
        <input type="range" name="skill" min="0" max="100" required value="{{ old('skill') }}">
        {{-- form validation --}}
        <span>
            @error('skill')
                {{ $message }}
            @enderror
        </span>

        <br><br>
        <button type="submit" name="btn">Submit Form</button>
    </form>


</body>

</html>
