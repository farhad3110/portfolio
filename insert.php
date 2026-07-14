<?php

$conn = mysqli_connect("localhost", "root", "", "portfolio_db");

$sql = "INSERT INTO Clg_Students (name, college, course)
VALUES ('Shaik Sheema Farhad',
'Tirumala Engineering College',
'B.Tech CSE')";

if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>