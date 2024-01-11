<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modification des Noms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        input[type=text], input[type=submit] {
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
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
</body>
</html>


