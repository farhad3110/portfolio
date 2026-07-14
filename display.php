<?php

$conn = mysqli_connect("localhost", "root", "", "portfolio_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

echo "<h2>Student Records</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>College</th>";
echo "<th>Course</th>";
echo "</tr>";

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";

        echo "<td>" . $row["id"] . "</td>";

        echo "<td>" . $row["name"] . "</td>";

        echo "<td>" . $row["college"] . "</td>";

        echo "<td>" . $row["course"] . "</td>";

        echo "</tr>";

    }

} else {

    echo "<tr>";
    echo "<td colspan='4'>No Records Found</td>";
    echo "</tr>";

}

echo "</table>";

mysqli_close($conn);

?>