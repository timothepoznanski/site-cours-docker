<?php

$servername = 'db';
$username = 'user';
$password = 'password';
$dbname = 'mydb';

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$originalName = $_POST['originalName'];
$newName = $_POST['newName'];

$sql = "UPDATE tableau_resultats SET nom = '$newName' WHERE nom = '$originalName'";

if (mysqli_query($conn, $sql)) {
    echo "Nom mis à jour avec succès.";
} else {
    echo "Erreur lors de la mise à jour du nom : " . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: index.php");
exit;

?>
