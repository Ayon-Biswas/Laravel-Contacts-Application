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

<form action="/contacts/create" method="POST" class="form-control container justify-content-center mt-5">
    @csrf
    <h1 class="text-center">Update Contact</h1>
    <div class="mb-3 mt-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control"  name="name" value="">
    </div>
    <div class="mb-3 mt-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control"  name="email" value="">
    </div>
    <div class="mb-3 mt-3">
        <label for="exampleInputPassword1" class="form-label">Phone</label>
        <input type="text" class="form-control"  name="phone" value="">
    </div>
    <div class="mb-3 mt-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text" class="form-control"  name="address" value="">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary text-center">Submit</button>
    </div>

</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
