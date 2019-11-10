<?php

$servername = "localhost";
$username = "itsjustmithun";
$password = "root123";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>s