<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>{{ number_format(1234567) }}</h1>

    <hr>
    <h1>{{ strlen('Laravel') }}</h1>

    <hr>
    {{-- foreach loop --}}

    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>

    <hr>
    {{-- if and else if and else conditions --}}

    @if ($name == 'hem')
        <p>hello hem</p>
    @elseif ($name == 'hema')
        <p>hello hema</p>
    @else
        <p>hello guest</p>
    @endif

    <hr>

    {{-- for loop --}}
    @for ($i = 0; $i < count($users); $i++)
        <p>{{ $users[$i] }}</p>
    @endfor


    {{-- write the php directive --}}
    @php

        $total = 500 + 200;

    @endphp

    Total : {{ $total }}

    {{-- This is Blade Comment --}}
</body>

</html>
