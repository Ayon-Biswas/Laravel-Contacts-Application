<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update Contact</title>
</head>
<body>

<form action="{{ url('/contacts/' . $showEditForm[0]->id) }}" method="POST" class="form-control container justify-content-center mt-5">
    @csrf
    @method('PUT')
    <h1 class="text-center">Update Contact</h1>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$showEditForm[0]->name}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$showEditForm[0]->email}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{$showEditForm[0]->phone}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{$showEditForm[0]->address}}">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary text-center">Update</button>
    </div>

</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
