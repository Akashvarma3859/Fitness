<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "calorie_counter_project";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>