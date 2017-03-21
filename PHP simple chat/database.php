<?php
// Connect to MySQL 

$con = mysqli_connect("localhost","db_user","db_pass","db_name");
// Test connection to database

if (mysqli_connect_errno()){
	echo 'Not connected' . mysqli_connect_error();
}
?>