<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected";
mysqli_select_db($conn,"db_ems");
$sql = "SELECT * FROM tbl_grades";
$result = mysqli_query($conn, $sql);
echo "<table  class='table'>";
echo "<tr>";
	echo "<td>Full Name</td>";
	echo "<td>Prelim Grade</td>";
echo "</tr>";
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>".$row["fld_studentname"]."</td>";
        echo "<td>".$row["fld_prelim"]."</td>";
	echo "</tr>";		
    }
}
echo "</table>";
?>