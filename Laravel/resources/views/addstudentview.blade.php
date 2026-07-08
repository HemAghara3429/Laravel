    <div>
        <h2>New Student ADD</h2>
        <form action="/add-data" method="POST">
            @csrf



            <input type="text" name="name" placeholder="enter name">
            <br><br>

            <input type="email" name="email" placeholder="please enter email">
            <br><br>

            <input type="text" name="batch" placeholder="please enter batch">
            <br><br>

            <button>Submit</button>

        </form>
    </div>
