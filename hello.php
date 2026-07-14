<!DOCTYPE html>
<html>

<head>
    <title>PHP Form</title>
</head>

<body>

<h2>Student Information Form</h2>

<form method="POST">

    Name:
    <input type="text" name="name"><br><br>

    College:
    <input type="text" name="college"><br><br>

    Course:
    <input type="text" name="course"><br><br>

    <input type="submit" value="Submit">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $college = $_POST["college"];
    $course = $_POST["course"];

    echo "<hr>";

    echo "<h2>Submitted Details</h2>";

    echo "<b>Name:</b> $name <br><br>";

    echo "<b>College:</b> $college <br><br>";

    echo "<b>Course:</b> $course";

}

?>

</body>

</html>