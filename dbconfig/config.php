<?php 
$con = mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'cityguidedb');


$server = "localhost";
$username = "root";
$password = "";
$database = "cityguidedb";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { 
    die("<script>alert('Connection Failed.')</script>");
}
?>



