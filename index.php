<?php
    if(isset($_SESSION['email'])){
        session_destroy();
    }
    if(isset($_SESSION['admin'])){
        session_destroy();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training-Tech</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="styles/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="assets/img/LOGO.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Training-Tech
            </a>
            <div>
                <a href="pages/front/login.html" class="link-dark"><button class="btn btn-outline-secondary">LOG IN</button></a>
                <a href="pages/front/signup.html" class="link-dark"><button class="btn btn-outline-secondary">SIGN UP</button></a>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-warning">
        <div class="container pt-5 pb-5">
            <div class="bg-warning rounded p-1">
                <div class="container bg-dark rounded p-2 text-white">
                    <h1 class="text-center">Best Tech Academy</h1>
                </div>
                <br>
                <div class="row mb-2">
                    <div class="col-lg-6 p-2">
                    <div id="carouselExampleSlidesOnly" class="carousel slide p-2" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg"  class="d-block w-100" alt="cssLogo">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original-wordmark.svg" class="d-block w-100" alt="gitLogo">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/r/r-plain.svg" class="d-block w-100" alt="rLogo">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" class="d-block w-100" alt="phpLogo">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-plain-wordmark.svg" class="d-block w-100" alt="vscLogo">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/django/django-plain-wordmark.svg" class="d-block w-100" alt="djangoLogo">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 text-justify mx-auto my-auto">
                        <h3 class="text-center">Why Training-Tech?</h3>
                        <br>
                        <h5 class="p-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</h5>
                        <h5 class="p-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container pt-5 pb-5">
            <div class="container bg-dark rounded p-2 text-white">
                    <h1 class="text-center">Why Training-Tech?</h1>
            </div>
            <br>
            <div class="row mb-2 text-center">
                <div class="col-lg-6 p-2 text-justify mx-auto my-auto">
                    <h5 class="p-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</h5>
                </div>
                <div class="col-lg-6 p-2">
                    <img src="assets/img/bestAward.jpg" alt="award" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-warning">
        <div class="container pt-5 pb-5">
            <div class="container bg-dark rounded p-2 text-white">
                    <h1 class="text-center">Be a part of the community</h1>
            </div>
            <br>
            <div class="row mb-2 text-center">
                <div class="col-lg-6 p-2">
                    <a href="pages/front/login.html" class="link-dark"><button type="button" class="btn btn-lg btn-outline-dark w-50 h-50 m-1">Log In</button></a>
                    <a href="pages/front/signup.html" class="link-dark"><button type="button" class="btn btn-lg btn-outline-dark w-50 h-50 m-1">New Member?</button></a>
                </div>
                <div class="col-lg-6 p-2 text-justify mx-auto my-auto">
                    <h5 class="p-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container pt-5 pb-5">
            <div class="container bg-dark rounded p-2 text-white">
                    <h1 class="text-center">Our roadmap</h1>
            </div>
            <br>
            <div class="row mb-2 text-center">
                <div class="col p-2">
                    <img src="assets/img/roadmap.png" alt="award" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-warning">
        <div class="container pt-5 pb-5">
            <div class="container bg-dark rounded p-2 text-white">
                    <h1 class="text-center">Where are we?</h1>
            </div>
            <div class="container pt-5 pb-5 text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d155436.08125551383!2d-1.9824853784165444!3d52.50287316470335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c9fd1c77f107ca4!2sTechTalent!5e0!3m2!1ses!2ses!4v1674347840005!5m2!1ses!2ses" class="w-100 h-50" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>       
            </div>
        </div>
    </div>
    <footer id="sticky-footer" class="flex-shrink-0 py-4">
    <div class="container text-center">
        <small>Copyright &copy; Training-Tech - </small>
        <a href="pages/front/adminForm.html" class="link-dark"><button class="btn btn-sm btn-outline-secondary">Admin Panel</button></a>
    </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>