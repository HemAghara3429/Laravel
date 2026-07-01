<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- here inner view include in the main view file --}}

    {{-- here also mainview pass the data to the subviews example as name --}}
    @include('subview.header',['name'=>'John Doe']);
    @include('subview.footer',['name'=>'John Doe']);

</body>
</html>
