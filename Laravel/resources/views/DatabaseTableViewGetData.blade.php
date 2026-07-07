<div>
<h1>Student List</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>BATCH</th>
    </tr>


        @foreach ($students as $student)
        <tr>
           <td>{{$student->id }}</td>
           <td>{{$student->name}}</td>
           <td>{{$student->email}}</td>
           <td>{{$student->batch}}</td>
        </tr>
        @endforeach

</table>
</div>
