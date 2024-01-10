<?php   
  
$servername = 'db';  
$username = 'user';  
$password = 'password';  
$dbname = 'mydb';  
  
$conn = mysqli_connect($servername, $username, $password, $dbname);   
    
$sql = "SELECT nom, points FROM tableau_resultats";   
$result = mysqli_query($conn, $sql);   
    
while($row = mysqli_fetch_assoc($result)) {   
  echo "Nom : " . $row["nom"] . " - Points : " . $row["points"] . "<br>";   
}   
  
?>
