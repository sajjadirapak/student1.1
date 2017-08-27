<?php 

$host = "localhost";
$db   = "student";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$db);

if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . 
        mysqli_connect_error();
        die();
    }

?>