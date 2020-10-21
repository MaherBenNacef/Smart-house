<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firebase";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$pass=$_POST['password'];
$email=$_POST['username'];
$query = "SELECT * FROM  user  WHERE email='$email' and password='$pass' ";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
if (!mysqli_num_rows($result)) {
require("login.html")
?>
<html><h1 align="center"><?php echo "user does not exist"; ?></h1></html> <?php
}
else {
session_start();
$_SESSION["email"] = $row["email"];
$_SESSION["fname"] = $row["firstname"];
require("accueil.html");
}

 mysqli_close($conn); 
 ?>