<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Print the name using the Blade Template Engine::{{ $name }}</h1>

    <hr>

    <p>{{ 10 + 20 }}</p>

    <hr>

    <p>{{ strtoupper('laravel') }}</p>

    <hr>

    <p>{{ date('d-m-Y') }}</p>


    <hr>

    @php

        $age = 20;

    @endphp


    @if ($age >= 18)
        <p>You are eligible to vote.</p>
    @endif

</body>

</html>
