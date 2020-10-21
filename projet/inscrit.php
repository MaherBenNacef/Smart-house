<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firebase";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{ 
 $firstname=$_POST["fname"];
 $lastname=$_POST["lname"];
 $email=$_POST["email"];
 $pass=$_POST["pass"];
$query = "SELECT * FROM  user  WHERE email='$email' ";
$result = mysqli_query($conn,$query);
if (!mysqli_num_rows($result)) {
$sql = "INSERT INTO user (firstname, lastname, email, password)
VALUES ('$firstname' , '$lastname', '$email', '$pass')";
mysqli_query($conn,$sql);
require("login.html"); 
}

else {
	?>
<html><h1><?php echo "USER EXIST"; ?> </h1></html><?php
}
 mysqli_close($conn); 
 }
 ?>