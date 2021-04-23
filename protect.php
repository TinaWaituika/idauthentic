<?php
session_start();
if(! isset($_SESSION["id"]))
{
    header("location:login.php");
}
//checking if session exists, take the user to login page if it doesnt exist