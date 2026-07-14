<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn) {
    echo "<h2 style='color:green;'>Database Connected Successfully!</h2>";
} else {
    echo "<h2 style='color:red;'>Connection Failed!</h2>";
}

?>