<?php
// Bắt đầu hoặc khôi phục một phiên làm việc
session_start();
// Kiểm tra xem phiên làm việc có tồn tại không


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="page-cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <scrip src="home.js">
        </script>
</head>

<body>

    <header>
        <div id="img">
            <a href="../home/home.php" title="logo">
                <img width="40" src="data:image/png;base64,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" alt="VietNamNet">
            </a>
        </div>

        <div id="khoi2">
            <nav class="navi">
                <a class="a" href="../home/home.php">Trang chủ</a>
                <a class="a" href="../page-food/page-food.php">Đồ ăn</a>
                <a class="a" id="gach-chan-home" href="../cart/page-cart.php">Giỏ hàng</a>
                <a class="a" href="../add-food/add-food.php">Của hàng của bạn </a>
            </nav>
        </div>

        <div class="user-info">
            <p>Hello <span id="username">
                    <?php
                    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    } else {
                        echo ' Guest!';
                    }
                    ?>
            </p>
            <form id="form-logout" method="post" action="../home-not-login/home-not-login.php">
                <input type="submit" value="Logout" class="" name="logout">
            </form>
        </div>

    </header>



    <div class="khhung-gioi-thieu">
        <div class="h2-gioi-thieu">
            <h2>Giới thiệu về web</h2>
        </div>

        <div class="gioi-thieu">
            <p>

            </p>
        </div>
    </div>
    <footer>

        <h4>Xin chào tôi là admin, đây là web demo shop bán đồ ăn</h4>
        <div class="infor">
            <p>
            <h3>Trang cá nhân của các thành viên:</h3><br>
            <div class="li">
                <ul class="list">
                    <li> <a href="#">Phạm Thế Nhật </a></li>
                    <li> <a href="#">Bùi Bảo Ngọc </a></li>
                    <li> <a href="#">Nguyễn Thị Xuân Anh </a></li>
                    <li> <a href="#">Nguyễn văn Huynh </a></li>
                </ul>
            </div>

            </p>
        </div>
        <!-- Your footer content here -->
    </footer>

</body>

</html>