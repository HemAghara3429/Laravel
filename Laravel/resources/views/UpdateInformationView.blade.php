<div>
    <h1>Update Student Details</h1>

    <form action="{{ url('/getstudent/update/' . $data->id) }}" method="POST">

        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $data->id }}">

        <br>

        <input type="text" name="name" placeholder="Enter Name" value="{{ $data->name }}">

        <br><br>

        <input type="email" name="email" placeholder="Enter Email" value="{{ $data->email }}">

        <br><br>

        <input type="text" name="batch" placeholder="Enter Batch" value="{{ $data->batch }}">

        <br><br>

        <button type="submit">Update Details</button>

    </form>

</div>
