<?php
//server with default setting (user 'root' with no password)
$host = 'localhost'; // server
$username = 'root';
$password = "";
$database = 'etugas'; //Database Name
// establishing connection
$conn = mysqli_connect($host,$username,$password,$database);
// for displaying an error msg in case the connection is not established
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>