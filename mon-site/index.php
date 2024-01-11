<?php

$servername = 'db';
$username = 'user';
$password = 'password';
$dbname = 'mydb';

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT nom, points FROM tableau_resultats";
$result = mysqli_query($conn, $sql);

echo "<table>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<form action='edit.php' method='post'>";
    echo "<td><input type='text' name='newName' value='" . $row["nom"] . "'></td>";
    echo "<td>Points : " . $row["points"] . "</td>";
    echo "<td><input type='hidden' name='originalName' value='" . $row["nom"] . "'></td>";
    echo "<td><input type='submit' value='Modifier'></td>";
    echo "</form>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);

?>
