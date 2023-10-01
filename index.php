<!doctype html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
        <h1 class="text-center">Welcome to Dashboard</h1>
        <div class="container">
                <table class="table table-bordered border-primary text-center">
                        <thead class="table-dark opacity-75">
                                <tr>
                                        <th scope="col">#id</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Fother Name</th>
                                        <th scope="col">Mother Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">Section</th>
                                        <th scope="col">Sibling Name</th>
                                        <th scope="col">Sibling Relation</th>
                                        <th scope="col">Sibling Phone</th>
                                        <!-- <th scope="col">Action</th> -->
                                </tr>
                        </thead>
                        <tbody>
                                <?php
                                include 'process.php';
                                ?>
                        </tbody>
                </table>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>