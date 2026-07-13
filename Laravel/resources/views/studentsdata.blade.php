<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Pagination</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
            font-family:Arial, Helvetica, sans-serif;
        }

        .container{
            margin-top:50px;
        }

        .card{
            border:none;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,.15);
        }

        .table th{
            background:#0d6efd;
            color:white;
            text-align:center;
        }

        .table td{
            text-align:center;
            vertical-align:middle;
        }

        h2{
            text-align:center;
            padding:20px;
            color:#0d6efd;
            font-weight:bold;
        }

        /* Pagination Style */

        .pagination{
            justify-content:center;
            margin-top:20px;
        }

        .page-link{
            color:#0d6efd;
            border-radius:6px !important;
            margin:0 4px;
            border:1px solid #0d6efd;
        }

        .page-link:hover{
            background:#0d6efd;
            color:white;
        }

        .page-item.active .page-link{
            background:#0d6efd;
            border-color:#0d6efd;
            color:white;
        }

        .page-item.disabled .page-link{
            color:#999;
        }

    </style>

</head>
<body>

<div class="container">

    <div class="card">

        <h2>Student List</h2>

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead>

                <tr>

        <th>ID</th>
        <th>Name</th>
        <th>Email</th>

    </tr>

                </thead>

                <tbody>

    @foreach($data as $student)

        <tr>

            <td>{{ $student->id }}</td>

            <td>{{ $student->name }}</td>

            <td>{{ $student->email }}</td>

        </tr>

    @endforeach

                </tbody>

</table>

            <div class="d-flex justify-content-center">

{{ $data->links() }}

            </div>

        </div>

    </div>

</div>

</body>
</html>
