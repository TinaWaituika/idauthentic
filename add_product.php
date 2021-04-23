<?php
include 'protect.php';
include 'header.php';
if(isset($_REQUEST["title"])) {
    $title = $_REQUEST["title"];
    $price = $_REQUEST["price"];
$target_dir = "uploads/";
$target_file = $target_dir . rand(1000000,10000000)."_".basename($_FILES["picture"]["name"]);
$file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));//png jpg
    $allowed_types = ["png", "jpeg", "jpg", "gif","svg"];
    $allowed = in_array($imageFileType, $allowed_types);
    if ($allowed and move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
        $status = 1;
    } else {
        $status = 2;
    }
/*if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
    //echo "Uploaded";
    $upload_status = 1;*/

    //$picture= $_REQUEST["picture"];
    $price = $_REQUEST["price"];

//connect DB
    require_once 'connect.php';
    /* $con = mysqli_connect("localhost", "root", "", "supermarket");
     if (mysqli_connect_error()){
         die(mysqli_connect_error());
     }*/
    //create read update delete
    //create sql statement
    $sql = "INSERT INTO `products`(`id`, `title`, `picture`, `price`) VALUES ('null','$title','$target_file','$price')";
    mysqli_query($con, $sql) or die(mysqli_error($con));//executing the query
    mysqli_close($con);//close the connection
    setcookie("success","Product Added", time()+3);
    header("location:add_product.php");
}
//ctrl a-select all ctrl c-copy
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php include "nav.php"; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h4>New Product</h4>
            <?php include 'alert.php' ?>
            <form action="add_product.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label>Picture</label>
                    <input type="file" accept="*/*" max-size="2024" class="form-control-file border" name="picture" required>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" required>
                </div>
                <button class="btn btn-success">Add Product</button>
            </form>
        </div>
    </div>
</div>
</body>
<?php
include 'footer.php';
?>
</html>


