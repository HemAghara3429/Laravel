<!DOCTYPE html>
<html>

<head>

    <title>One To One Relationship</title>



</head>

<body>

    <h2>Employee Profile</h2>

    <table border="1">

        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>

        </tr>

        @foreach ($employees as $employee)
            <tr>

                <td>{{ $employee->id }}</td>

                <td>{{ $employee->name }}</td>

                <td>{{ $employee->email }}</td>

                {{-- This accesses the related profile using the relationship: --}}
                {{-- Laravel automatically fetches the employee's profile. --}}
                {{-- Now it accesses the phone and address column from the profile. --}}
                {{-- if the profile recored are not found then show as N/A --}}
                <td>{{ $employee->profile->phone ?? 'N/A' }}</td>

                <td>{{ $employee->profile->address ?? 'N/A' }}</td>

            </tr>
        @endforeach

    </table>

</body>

</html>
