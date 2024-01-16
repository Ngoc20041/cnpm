
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
	margin-bottom: 8px;
  }

  input {
	width: 100%;
	padding: 8px;
	margin-bottom: 16px;
	box-sizing: border-box;
  }
  .dk{
    padding-left: 5px;
  }


</style>

<div class="login-container">
  <h2>Register</h2>
  <form action="reg.php" method="POST">

    <label for="fullname">Fullname:</label>
  	<input type="text" id="fullname" name="fullname" required>
 	<br> <br>

	<label for="username">Username:</label>
	<input type="text" id="username" name="username" required>
	<br>
	<br>

	<label for="password">Password:</label>
	<input type="password" id="password" name="password" required>
	<br>
	<br>
	
	<label for="address">Address:</label>
	<input type="text" id="address" name="address" required>
	<br>
	<br>
	<input type="submit" name="dangky" value="Dang Ky">
    <p>Bạn đã có tài khoản <a class="dk" href="../login/login.php">Đăng nhập</a></p>
  </form>
</div>
