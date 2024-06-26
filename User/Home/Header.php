<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #f8f8f8;
        border-bottom: 1px solid #ddd;
    }

    .top-header {
        display: flex;
        justify-content: space-between;
        padding: 0 10px;
        background-color: #5ba3eb;
        color: #ffffff;
        height: 35px;
    }

    .contact-info {
        display: flex;
        align-items: center;
    }

    .auth-links {
        display: flex;
        align-items: center;
    }

    .auth-links a {
        color: #fff;
        text-decoration: none;
        margin-left: 10px;
    }

    .main-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 90px;
        padding: 0 20px;
        background-color: #f9f9f9;
    }

    .logo img {
        max-width: 170px;
    }

    header nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    header nav ul li {
        margin-right: 35px;
    }

    header nav ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: large;
    }

    header nav ul li a:hover {
        text-decoration: none;
        color: #0e4894;
        font-weight: bold;
    }

    .extra-links {
        display: flex;
        align-items: center;
        
    }

    .extra-links a {
        text-decoration: none;
        color: #333;
        margin-left: 20px;
        font-weight: bold;
    }

    .extra-links a:hover{
        text-decoration: none;
        color: #0e4894;
        margin-left: 20px;
        font-weight: bold;
    }
    </style>
</head>
<body>
    <header class="fixed-header">
        <div class="main-header">
            <div class="logo">
                <img src="../../images/logo_new.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="/PHP_BTL_HaUI/User/Home/Home_page.php">HOME</a></li>
                    <li><a href="/PHP_BTL_HaUI/User/detail/list_pd.php">SÁCH</a></li>
                    <li><a href="#">TÁC GIẢ</a></li>
                    <li><a href="/PHP_BTL_HaUI/User/Article_category_user/categories.php">BÀI VIẾT</a></li>
                    <li><a href="/PHP_BTL_HaUI/User/Home/contact.php">LIÊN HỆ</a></li>
                </ul>
            </nav>
            <div class="extra-links">
                <?php if (!empty($_SESSION['id'])): ?>
                    <a class="hello" href="#">
                        Hello <?php echo htmlspecialchars($_SESSION['username']); ?>
                    </a>
                    <a href="../Cart/cart_page.php">Giỏ hàng</a>
                    <a href="../../Logout/logout.php">Đăng xuất</a>
                <?php else: ?>
                    <a href="../../Login/login_page.php">Đăng nhập</a>
                    <a href="../Cart/cart_page.php">Giỏ hàng</a>
                <?php endif; ?>
            </div>
        </div>
    </header>
</body>
</html>