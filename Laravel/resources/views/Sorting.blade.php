<!DOCTYPE html>
<html>

<head>
    <title>Student List</title>
</head>

<body>

    <h2>Student List</h2>

    <table border="1">

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Email</th>

            <th>Course</th>

        </tr>

        @foreach ($students as $student)
            <tr>

                <td>{{ $student->id }}</td>

                <td>{{ $student->name }}</td>

                <td>{{ $student->email }}</td>

                <td>{{ $student->course }}</td>

            </tr>
        @endforeach

    </table>

</body>

</html>
