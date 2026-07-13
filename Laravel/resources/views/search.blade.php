<!DOCTYPE html>
<html>

<head>

    <title>Student Search</title>



</head>

<body>

    <div class="container">

        <h2>Student Search</h2>

        <form method="GET" action="/search">

            <input type="text" name="search" placeholder="Search Student" value="{{ request('search') }}">

            <button type="submit">
                Search
            </button>

        </form>

        <table border="1">

            <tr>

                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>

            </tr>

            @forelse($students as $student)
                <tr>

                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->course }}</td>

                </tr>

            @empty

                <tr>

                    <td colspan="4">No Student Found</td>

                </tr>
            @endforelse

        </table>

    </div>

</body>

</html>
