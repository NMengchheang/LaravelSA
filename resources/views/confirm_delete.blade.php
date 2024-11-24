<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-light">
        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="col-9">
            <div class="container mt-5">
                <h2>Confirm Delete User : {{ $item -> name }} </h2>
                <p>Are you sure you want to delete the user</p>
                <a href="/get-delete?id={{ $item->id }}" type="submit" class="btn btn-danger">Delete</a>   

                <a href="/register-list" class="btn btn-secondary">Cancel</a>
            </div>
                
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>