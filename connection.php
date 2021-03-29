<?php 

$host     = "localhost";
$user     = "root";
$password = "";
$db       = "24library";      

$conn = mysqli_connect($host, $user, $password, $db) or die ("Failed to connect database : ".mysqli_connect_error());
