<div>
    <h1>User Form</h1>

    <form action="/postdata" method="POST">

        @csrf

        <input type="text" name="user" placeholder="Enter Name">
        <br><br>

        <input type="password" name="password" placeholder="Enter Password">
        <br><br>

        <button type="submit">Submit</button>

    </form>
</div>
