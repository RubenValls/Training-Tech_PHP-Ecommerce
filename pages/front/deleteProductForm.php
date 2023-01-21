<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product - TrainingTech</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand" href="admin.php">
            <img src="../../assets/img/LOGO.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Training-Tech
            </a>
        </div>
    </nav>
    <div class="container d-flex flex-column justify-content-center align-items-center h-75">
        <div class="mt-5 p-2">
            <h3>Delete Product</h3>
        </div>
        <div class="mt-5 p-2">
            <form action="../../pages/back/deleteProduct.php" method="POST" class="text-center">
                <div class="mb-3">
                    <label for="exampleInputProduct" class="form-label">Product Name</label>
                    <input type="text" name="product" class="form-control" id="exampleInputProduct" required>
                </div>
                <div class="text-center">
                    <button type="submit" name="deleteProduct" class="btn btn-outline-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
    <footer class="my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="../../index.php" class="nav-link px-2 text-muted">Home</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2022 Training-Tech</p>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>