<!DOCTYPE html>
<html>

<head>
    <title>One To Many Relationship</title>


</head>

<body>

    <h2>Teacher & Subjects</h2>

    <table border="1">

        <tr>

            <th>ID</th>
            <th>Teacher</th>
            <th>Email</th>
            <th>Subjects</th>

        </tr>

        @foreach ($teachers as $teacher)
            <tr>

                <td>{{ $teacher->id }}</td>

                <td>{{ $teacher->name }}</td>

                <td>{{ $teacher->email }}</td>

                <td>

                    @if ($teacher->subjects->count())
                        <ul>

                            @foreach ($teacher->subjects as $subject)
                                <li>{{ $subject->subject_name }}</li>
                            @endforeach

                        </ul>
                    @else
                        N/A
                    @endif

                </td>

            </tr>
        @endforeach

    </table>

</body>

</html>
