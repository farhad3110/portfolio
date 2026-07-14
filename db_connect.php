<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
    echo $row["id"] . " - " . $row["name"] . " - " . $row["email"] . " - " . $row["age"] . "<br>";
}

?>