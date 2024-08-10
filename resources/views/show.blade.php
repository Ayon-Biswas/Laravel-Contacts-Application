<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Show Contact Details</title>
</head>
<body>

<table class="table mt-5 table-bordered ">
    <h1 class="text-center">Show Contact Details</h1>

    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Created At</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach($contactShow as $row)
        <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->phone}}</td>
            <td>{{$row->address}}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->created_at}}</td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
