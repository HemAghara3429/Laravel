<div>
    <h1>User Form</h1>

    <form action="/httpclassexample" method="POST">

        @csrf

        <input type="text" name="name" placeholder="Please Enter Name">
        <br><br>

        <input type="password" name="password" placeholder="Please Enter Password">
        <br><br>

        <button type="submit">Submit</button>

    </form>
</div>
