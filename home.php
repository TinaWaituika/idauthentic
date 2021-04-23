<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="home.php">
        <img src="img.png" alt="" width="60" height="60">
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
            </li>
        </ul>
    </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="1.jpg" alt="Los Angeles" style="width: 100%";>
        </div>
        <div class="carousel-item">
            <img src="2.jpg" alt="Chicago" style="width: 100%";>
        </div>
        <div class="carousel-item">
            <img src="3.jpg" alt="New York" style="width: 100%";>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>
<section>
    <div class="container">
        <div class="row"></div>
    </div>
</section>
</body>
<footer class="footer bg-dark;" >
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h2 class="text-uppercase">GET IN TOUCH</h2>
                <p>Idauthentic</p>
                <p>Nairobi, Kenya</p>
                <p>Tel: 0706522458</p>
                <p>Email: sales.idauthentic@gmail.com</p>
            </div>
            <div class="col-sm-6">
                <h2 class="text-uppercase">USEFUL INFORMATION</h2>
                <a href="home.php" class="d-block">Home</a>
                <a href="about.html" class="d-block">About</a>
                <a href="contact.html" class="d-block">Contact</a>
                <a href="login.php" class="d-block">Login</a>
            </div>
            <div class="col-sm-3">
                <img src="img.png" alt="" width="60" height="60">
            </div>
        </div>
    </div>
</footer>
</html>


