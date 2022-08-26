<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "bca30";
$con = new MySQLi($host, $user, $pass, $dbname);

if ($con->connect_errno){
	die("ERROR: " .$con->connect_error);

}


?>