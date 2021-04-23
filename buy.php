<?php
include 'protect.php';
require 'connect.php';
include 'header.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));// executing the query
$rows = mysqli_fetch_all($result, 1);//assoc array
mysqli_close($con);//close the connection
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

<?php include 'nav.php' ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">

            <?php
            if (isset($_SESSION["products"]))
                $no_of_items =count($_SESSION["products"]);
            ?>

            <p class="text-info mb-0">You have <?= $no_of_items ?? 0 ?> items in your cart</p>
            <a href="checkout.php" class="btn btn-outline-info btn-sm mb-1">Check Out</a>


            <table id="example" class="table table-striped table-bordered">

                <thead>
                <tr>
                    <th>Title</th>
                    <th>Picture</th>
                    <th>Price</th>
                    <th>Add</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($rows as $product): ?>
                    <tr>
                        <td> <?= $product["title"] ?> </td>
                        <td><img src="<?= $product['picture'] ?>" width="60" height="60" alt=""></td>
                        <td> <?= $product["price"] ?> </td>
                        <td><a class="btn btn-info btn-sm" href="add-to-cart.php?id=<?= $product["id"] ?>">Add To
                                Cart</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
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