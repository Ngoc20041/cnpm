<?php


session_start();

	require_once '../../db/connect.php';

	if(isset($_POST['dangky'])){
	
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		
		if(!empty($username)&&!empty($fullname)&&!empty($password)&&!empty($address)){

			// $sql = "INSERT INTO `tbluser` (`fullname`,`username`,`password`,`address`) 
			// VALUES ('$fullname','$username','$password','$address')";

			//ma hoa md5
			$sql = "INSERT INTO `tbluser` (`fullname`,`username`,`password`,`address`) 
			VALUES ('$fullname','$username',md5('$password'),'$address')";
			
			if($conn->query($sql)===TRUE){
				echo "Dang Ky Thanh Cong";
				
			}else{
				echo "Lỗi " . $sql . $conn->connect_error;

			}
		}	


	}	

?> 
<br> 
<br>
<a href="../login/login.php">Quay Lai Trang Dang Nhap</a>

