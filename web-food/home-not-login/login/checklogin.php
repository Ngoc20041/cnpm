<?php
session_start();
require '../../db/connect.php';


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
} else {
    echo "dang nhap khong thanh cong";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $password_md5 = (md5($password)); // ma hoa mat khau roi gan vao $pasword_md5


    // Truy vấn kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM tbluser WHERE `username` = '$username' AND `password` = '$password_md5'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Kiểm tra mật khẩu        
        // Đăng nhập thành công
        header('location: ../../home/home.php?success=1');
        // echo '<script>alert("Đăng nhập thành công")</script>';
        exit();
    } else {
        // Sai mật khẩu
        echo 'Tài khoản hoặc mật khẩu không đúng vui lòng kiểm tra lại  ';
    }
}

$conn->close();
?>
<br><a href="login.php">Quay lại</a>