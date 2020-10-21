<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firebase";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$memory = $_POST["memory"];
$cpu = $_POST["cpu"];
$voltage = $_POST["voltage"];

$sql = "INSERT INTO carte 
VALUES ('$memory' , '$cpu', '$voltage')";
mysqli_query($conn,$sql);
require("carte.html"); 
 mysqli_close($conn); 

 ?>