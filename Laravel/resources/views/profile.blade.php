<div>
    <h1>hello profile page</h1>


    @if (session('user'))
        <h1>Welcome,{{ session('user') }}</h1>
    @else
        <h1>user not found</h1>
    @endif

    <form action="/logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
</div>
