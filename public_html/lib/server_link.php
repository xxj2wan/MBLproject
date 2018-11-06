<?php
$servername=//"localhost";
$username=//"username";;
$password=//"password";
$dbname=//"name_of_database";
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn, "set names utf8");
if($conn->connect_error){
	die("Connection error:".$conn->connect_error);
}
?>

