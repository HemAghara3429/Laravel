<div>

    <h1>
        Login Form
    </h1>

    <form action="/login" method="POST">

        @csrf
        <input type="text" name="user" placeholder="Please enter the text">
        <br><br>


       <input type="email" name="email" placeholder="Please enter the email">
        <br><br>

        <button>login</button>

    </form>

</div>
