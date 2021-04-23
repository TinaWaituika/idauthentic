<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Idauthentic</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION["logged_in"])): ?>

                <li class="nav-item">
                    <a class="nav-link" href="add_product.php">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_customer.php">Add Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buy.php">Buy</a>
                </li>
                <?php if ($_SESSION["admin"] == 1) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="reports.php">Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add_user.php">Add User</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <?= $_SESSION["names"] ?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>

                </li>
                <!--<li class="nav-item">
                     <a class="nav-link" href="logout.php">Log Out</a>
                 </li>-->
            <?php endif; ?>

            <?php if (!isset($_SESSION["logged_in"])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Log In</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

