<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fname = $_POST['txtName'];
$pgrade = $_POST['txtPrelim'];
$mgrade = $_POST['txtMidterm'];
$fgrade = $_POST['txtFinals'];
mysqli_select_db($conn,"db_ems");
$sql = "INSERT INTO tbl_grades (fld_studentid, fld_studentname, fld_prelim, fld_midterm, fld_finals) VALUES (NULL, '".$fname."', '".$pgrade."', '".$mgrade."', '".$fgrade."')";
$result = mysqli_query($conn, $sql);
if($result){
	echo "I Will Graduate";
}
else{
	echo "I Will spend 5 years in College";
}

?>