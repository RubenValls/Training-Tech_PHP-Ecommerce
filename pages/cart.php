<?php 
    session_start();
    if(!isset($_SESSION['email'])){
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
    <link href="../styles/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="user.php">
            <img src="../assets/img/LOGO.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Training-Tech
            </a>
            <a class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16" id="cartIcon">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            </a>
            <div class="text-center">
                <?php
                    echo "<h6>". $_SESSION['email']."</h6>";
                ?>
                <a href="../index.php" class="link-dark"><button class="btn btn-sm btn-outline-secondary">LOG OUT</button></a>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-dark text-white">
            <div class="container p-3" id="cartTable">
                <?php
                    require_once("../functions/printCart.php");
                    showCart();
                ?>
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