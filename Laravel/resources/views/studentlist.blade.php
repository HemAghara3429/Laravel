<div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Batch</th>
            <th>Operation</th>
        </tr>
        @foreach ($student as $item)
            <tr>



                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->batch }}</td>
                <td>
                    <a href="{{ url('/getstudent/delete/' . $item->id) }}">Delete</a>
                    <a href="{{ url('/getstudent/edit/' . $item->id) }}">Edit</a>
                </td>

            </tr>
        @endforeach
    </table>
</div>
