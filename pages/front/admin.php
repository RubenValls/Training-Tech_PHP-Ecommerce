<?php 
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: ../index.php');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrainingTech - User</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../../styles/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="../../assets/img/LOGO.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Training-Tech
            </a>
            <div class="text-center">
                <h6>Admin Panel</h6>
                <a href="../../index.php" class="link-dark"><button class="btn btn-sm btn-outline-secondary">LOG OUT</button></a>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-dark text-white">
            <div class="container p-3" id="cartTable">
                <div class="row m-2 h-25">
                    <div class="col-6">
                        <a href="addProductForm.html" class="link-dark"><button class="btn btn-lg btn-secondary w-100 h-100"><h3>Add Product</h3></button></a>
                    </div>
                    <div class="col-6">
                        <a href="deleteProductForm.php" class="link-dark"><button class="btn btn-lg btn-secondary w-100 h-100"><h3>Delete Product</h3></button></a>
                    </div>
                </div>
                <div class="row m-2 h-25">
                    <div class="col">
                    <a href="addAdminForm.html" class="link-dark"><button class="btn btn-lg btn-secondary w-100 h-100"><h3>Add Admin</h3></button></a>
                    </div>
                </div>
            </div>
    </div>
    <footer id="sticky-footer" class="flex-shrink-0 py-4">
    <div class="container text-center">
        <small>Copyright &copy; Training-Tech</small>
    </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>