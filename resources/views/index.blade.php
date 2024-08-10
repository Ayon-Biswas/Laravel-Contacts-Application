<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Contacts</title>
</head>
<body>

<table class="table mt-5 table-bordered ">
    <h1 class="text-center">All Contact</h1>

    <div class="d-flex justify-content-center mb-3">
        <input type="text" class="form-control me-2" placeholder="Search Contacts..." style="width: 60%;">
        <a href="{{ url('/contacts?sort=name') }}" class="btn btn-secondary">Sort by Name</a>
        <a href="{{ url('/contacts?sort=date') }}" class="btn btn-secondary">Sort by Date</a>
    </div>

    <div class="text-center">
        <a href="{{ url('/create') }}" class="btn btn-primary">Add</a>
    </div>
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($contacts as $row)
            <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->phone}}</td>
            <td>{{$row->address}}</td>
            <td></td>
            <td></td>
            </tr>
        @endforeach
    </tr>
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
