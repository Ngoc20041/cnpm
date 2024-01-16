<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang Nhap</title>
</head>
<body>
      <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
          }
      
          .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }
      
          label {
            display: block;
            margin-bottom: 8px;
          }
      
          input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
          }
      
          button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
          }
          .dn{
            padding-left: 5px;
          }
        </style>



  <div class="login-container">
    <h2>Login</h2>
    <form action='checklogin.php' method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit"  name="login" value="Dang Nhap">

      <p>Bạn đã chưa có tài khoản <a class="dn" href="../register/register.php">Đăng ký</a></p>
    </form>



</body> 

</html>
