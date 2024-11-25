<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body class="bg-dark text-light">
        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="col-6">
                <h2 class="text-center mb-5">Register List</h2>
                <a href="/" class="btn btn-primary">Back</a>
                <table class="table table-dark table-hover">

                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $item)
                            <tr>
                                <th scope="row">{{ $item->id}}</th>
                                <td> {{ $item->name }} </td>
                                <td> {{  $item->email }} </td>
                                <td> ---  </td>
                                <td> PP </td>
                                <td>
                                    <a type="button" class="btn btn-primary" href="/get-edit?id={{ $item->id }}">Edit</a>
                                    <a type="button" class="btn btn-danger" href="/get-confirmation?id={{ $item->id }}">Delete</a>
                                    
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                    
                </table>
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    </body>
</html>