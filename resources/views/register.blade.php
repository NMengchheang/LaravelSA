<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body class="bg-dark text-light">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="col-4">
                <h2 class="text-center">Register Form</h2>
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputUserName" class="form-label">User Name</label>
                        <input type="text" name="username" class="form-control text-dark" placeholder="Enter Name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control text-dark">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPhone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control text-dark">  
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control text-dark">
                    </div>

                    <!-- Button container aligned to the end of the line -->
                    <div class="d-flex justify-content-end">
                        <a href="/" class="btn btn-primary me-2">Back</a>
                        <button type="reset" class="btn btn-secondary me-2">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>