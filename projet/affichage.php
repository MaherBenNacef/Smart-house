<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firebase";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * From environement";
    $q= mysqli_query($conn,$sql);?>
    
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Application Web</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="affich.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script type="text/javascript" src="affichage.js"></script>
  <link rel="stylesheet" type="text/css" href="espace.css">

</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><u><B>Smart Home</B></u></a>
    </div>
  <ul class="navbar-nav navbar-left">
      <li class="nav-item"><a href="accueil.html" class="nav-link"><i class="fas fa-home"> Home</i></a></li>
      <li class="nav-item"><a href="carte.html" class="nav-link"><i class="fas fa-cog"> card state</i></a></li>
      <li class="nav-item"><a href="controle.html" class="nav-link"><i class="fas fa-cloud"> Environmental monitoring</i></a></li>
      <li class="nav-item"><a href="affichage.html" class="nav-link"><i class="fas fa-th-list">  Environmental history</i></a></li>
      <li class="nav-item"><a href="aff.html" class="nav-link"><i class="fas fa-list-alt">  Card history</i></a></li>
    </ul>
    <ul class="navbar-nav" navbar-right>
      <li class="nav-item"><a href="index.HTML" class="nav-link"><i class="fas fa-sign-in-alt"> Disonnect</i></a></li>
    </ul>
  </div>
</nav>

<table>
     

        <tr>
            <th >Humidity</th>
            <th >Temperature</th>
            <th >Distance</th>
            
        </tr>
     
        <div class="col-xs-12" align="center">
               <!--<img class="img-responsive" src="img-01.jpg" width="500" height="500">-->
                <!--<form action="carte.php" method="post" name="form" id="form" >
               <h1 align="center">Historique de l'environement</h1><br>
              <button type="submit" id="afficher" class="btn btn-primary btn-lg">Afficher Donnée</button>
             
                </form>-->
                <br>
                 <form action="supp.php" method="post">
                <button type="submit" class="btn btn-dark">Delete Data</button>
              </form>
              <br><br>
              <input class="form-control" id="myInput" type="text" placeholder="Search.." style="width:500px;">
            </div>
            

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
         
   <?php
    while($d=mysqli_fetch_array($q)) 
            { // début de ldap_add(link_identifier, dn, entry) boucle while
                
                ?>
                 <tbody id="myTable">
                      <tr >
                          <td ><?php echo $d['humidite'];?></th>
                          <td ><?php echo $d['temperature'];?></th>
                          <td ><?php echo $d['distance'];?></td>
                      </tr>  

                 </tbody >
                <?php
            

            } //la fin la boucle while
            
// Déconnexion
 
 ?>
