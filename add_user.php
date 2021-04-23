<?php
include 'protect.php';
//include 'protect-admins.php';

if(isset($_REQUEST["password"])) {
    $names = $_REQUEST["names"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $admin=$_REQUEST["admin"];
    $password=password_hash($password, PASSWORD_BCRYPT);
    require_once 'connect.php';
    /*$con = mysqli_connect("localhost", "root", "", "supermarket");
     if (mysqli_connect_error()){
         die(mysqli_connect_error());
     }*/
    //create read update delete
    //create sql statement
    $sql = "INSERT INTO `users`(`id`, `names`, `email`, `password`,`admin`) VALUES ('null','$names','$email','$password', '$admin')";
    mysqli_query($con, $sql) or die(mysqli_error($con));//executing the query
    mysqli_close($con);//close the connection
    header("location:add_user.php");
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
    <title>User</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
</head>
<body>
<?php include "nav.php"; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h4>New User</h4>
            <form action="add_user.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="names" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label>Admin</label>
                    <input type="" class="form-control" name="admin" required>
                </div>
                <button class="btn btn-success">Add user</button>
            </form>
        </div>
    </div>
</div>
</body>
<?php
include 'footer.php';
?>
</html>

