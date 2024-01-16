<?php


session_start();

require_once '../db/connect.php';

if (isset($_POST['them'])) {

	$name = $_POST['name'];
	$img = $_POST['img'];
	$mo_ta = $_POST['mo-ta'];
	$gia = $_POST['gia'];

	if (!empty($name) && !empty($img) && !empty($mo_ta) && !empty($gia)) {

		$sql = "INSERT INTO `tblfood` (`name`,`img`,`discribe`,`price`) 
			VALUES ('$name','$img','$mo_ta','$gia')";



		if ($mysqli->query($sql) === TRUE) {
			header('location:add-food.php');
		} else {
			echo "Lỗi " . $sql . $conn->connect_error;
		}
	}
}
