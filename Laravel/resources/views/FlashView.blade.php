<div>
    <h1>Laravel Flash Session Example</h1>

    {{-- Display Flash Message --}}
    @if(session('success'))
        <h2 style="color:green;">
            {{ session('success') }}
        </h2>
    @endif

    {{-- Display Username --}}
    @if(session('username'))
        <h3>
            Welcome, {{ session('username') }}
        </h3>
    @endif

    <form action="/adduser" method="POST">

        @csrf

        <input
            type="text"
            name="name"
            placeholder="Please enter name"
            required
        >

        <br><br>

        <input
            type="password"
            name="password"
            placeholder="Please enter password"
            required
        >

        <br><br>

        <button type="submit">Submit</button>

    </form>
</div>
