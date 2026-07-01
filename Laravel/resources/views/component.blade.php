
{{-- here component access from the subview. --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Hello this is main component under declare import to other components</h1>

    {{-- here message-banner component add without pass any type of message or data. --}}
    <x-message-banner/>

    {{-- here message-banner component again add here pass the Data in component --}}
<x-message-banner message="Hello" />
</body>
</html>
