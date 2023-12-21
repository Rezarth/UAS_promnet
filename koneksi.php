<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "db_users";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn){
    die("Something went wrong");
}
?>