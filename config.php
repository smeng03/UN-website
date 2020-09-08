<?php
//Sabrina Meng config file 21 November 2019
$servername = "localhost";
$username = "root";
$password = "";

// Creates connection
$conn = mysqli_connect($servername, $username, $password);

// Checks connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>