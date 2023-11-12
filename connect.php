<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'uas';
// Create connection
$con = mysqli_connect($servername, $username, $password, $db);
mysqli_query($con,"SET GLOBAL FOREIGN_KEY_CHECKS=0;");
 // Check connection
if (!$con) {
	die ("connection failed.". mysqli_connect_error()); //close connection
}
 ?>