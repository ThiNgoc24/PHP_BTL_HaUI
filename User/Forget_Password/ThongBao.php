<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url('path-to-your-background-image.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Lớp phủ tối */
            z-index: 1;
        }
        .notification-box {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            margin: 20px;
            position: relative;
            z-index: 2;
        }
        .notification-box img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .notification-box .icon-success {
            font-size: 50px;
            color: #28a745;
            margin-bottom: 20px;
        }
        p {
            color: #333;
            font-size: 18px;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .login-button {
            display: inline-block;
            padding: 12px 25px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .login-button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }
        .login-button:active {
            transform: translateY(0);
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="notification-box">
        <div class="center-link">
            <i style="font-size: 100px;" class="fas fa-check-circle icon-success"></i>
        </a>
        </div>
        <!-- <i class="fas fa-check-circle icon-success"></i> -->
        <p>Chúng tôi đã gửi mật khẩu mới về email của bạn. Vui lòng kiểm tra hộp thư và đăng nhập lại hệ thống!</p>
        <a href="../../Login/login_page.php" class="login-button">Đăng nhập</a>
        <br>
        <br>
        <!-- <img src="../../images/100badkn.webp" alt="Book Image"> -->
    </div>
</body>
</html>
