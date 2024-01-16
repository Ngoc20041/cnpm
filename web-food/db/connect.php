<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
	die("Ket Noi Khong Thanh Cong" . $conn->connect_error);
} else {
	//echo "Ket Noi Thanh Cong ";

}
