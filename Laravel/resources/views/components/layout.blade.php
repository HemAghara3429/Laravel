@props(['title'])

<div class="header">
    <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</div>

<div class="content">
    <h2>{{ $title }}</h2>

    {{ $slot }}
</div>

<div class="footer">
    Footer Page
</div>

<style>
    body{
        margin:0;
        font-family: Arial, sans-serif;
    }

    .header{
        background: skyblue;
        padding:15px;
    }

    .header ul{
        list-style:none;
        margin:0;
        padding:0;
    }

    .header li{
        display:inline;
        margin-right:20px;
    }

    .header li a{
        text-decoration:none;
        color:black;
    }

    .content{
        padding:20px;
    }

    .footer{
        background:skyblue;
        text-align:center;
        padding:15px;
        margin-top:20px;
    }
</style>
