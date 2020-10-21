<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firebase";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['ajouter']))
{
$humidite = $_POST["Humidité"];
$temperature = $_POST["Température"];
$distance = $_POST["Distance"];

}

if((!empty($humidite))&&(!empty($temperature))&&(!empty($distance)))
{
$sql = "INSERT INTO environement 
VALUES ('$humidite' , '$temperature', '$distance')";
mysqli_query($conn,$sql);
require("controle.html"); 
 mysqli_close($conn); 
}
 ?>