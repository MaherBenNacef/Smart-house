<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firebase";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "DELETE FROM carte";
mysqli_query($conn,$sql);
require("affichage.html"); 
 mysqli_close($conn); 

 ?>