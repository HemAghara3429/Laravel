<!DOCTYPE html>
<html>

<head>
    <title>Accessor & Mutator</title>
</head>

<body>

    <h2>City List</h2>

    <table border="1" cellpadding="10">

        <tr>

            <th>ID</th>
            <th>City</th>
            <th>State</th>

        </tr>

        @foreach ($cities as $city)
            <tr>

                <td>{{ $city->id }}</td>

                <td>{{ $city->name }}</td>

                <td>{{ $city->state }}</td>

            </tr>
        @endforeach

    </table>

</body>

</html>
