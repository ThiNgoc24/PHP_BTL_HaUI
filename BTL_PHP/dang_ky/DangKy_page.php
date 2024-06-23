<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .container {
            display: flex;
            width: 100%;
            background-color: #f2f2f2;
            border-radius: 10px;
            overflow: hidden;
        }

        .form-container {
            flex: 1;
            padding: 20px;
        }

        .form-container h2 {
            text-align: center;
            color: #333;
        }

        .form-container form {
            width: 100%;
        }

        .form-container label {
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="password"],
        .form-container input[type="email"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-container input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container .error {
            color: red;
        }

        .image-container {
            flex: 1;
            text-align: center;
            padding: 20px;
        }

        .image-container img {
            padding-top: 40px;
            max-width: 100%;
            height: 600px;
            border-radius: 10px;
        }

        .login-link {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Đăng ký</h2>
            <?php
            require_once 'DangKy_functions.php';

            $usernameError = $passwordError = $repasswordError = $fullnameError = $phonenumberError = $addressError = $emailError = '';
            $registerSuccess = false;
            $registerMessage = '';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];
                $fullname = $_POST['fullname'];
                $phonenumber = $_POST['phonenumber'];
                $address = $_POST['address'];
                $email = $_POST['email'];

                $isValid = true;

                // Kiểm tra tên đăng nhập đã tồn tại
                if (isUsernameExists($username)) {
                    $usernameError = "Tên đăng nhập đã tồn tại. Vui lòng chọn tên đăng nhập khác.";
                    $isValid = false;
                }

                // Kiểm tra mật khẩu
                if ($password !== $repassword) {
                    $passwordError = $repasswordError = "Mật khẩu không khớp";
                    $isValid = false;
                } elseif (!isValidPassword($password)) {
                    $passwordError = "Mật khẩu phải chứa ít nhất 6 ký tự, bao gồm cả chữ cái và số";
                    $isValid = false;
                }

                // Kiểm tra email
                if (!isValidEmail($email)) {
                    $emailError = "Địa chỉ email không hợp lệ";
                    $isValid = false;
                }

                // Đăng ký người dùng
                if ($isValid) {
                    if (registerUser($username, $password, $fullname, $phonenumber, $address, $email)) {
                        $registerSuccess = true;
                        $registerMessage = "Đăng ký thành công!";
                    } else {
                        $registerSuccess = false;
                        $registerMessage = "Đăng ký thất bại!";
                    }
                }
            }
            ?>
            <form action="DangKy_page.php" method="post">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" name="username" required>
                <span class="error"><?php echo $usernameError; ?></span><br>

                <label for="password">Mật khẩu:</label>
                <input type="password" name="password" required>
                <span class="error"><?php echo $passwordError; ?></span><br>

                <label for="repassword">Nhập lại mật khẩu:</label>
                <input type="password" name="repassword" required>
                <span class="error"><?php echo $repasswordError; ?></span><br>

                <label for="fullname">Họ tên:</label>
                <input type="text" name="fullname" required>
                <span class="error"><?php echo $fullnameError; ?></span><br>

                <label for="phonenumber">Số điện thoại:</label>
                <input type="text" name="phonenumber" required>
                <span class="error"><?php echo $phonenumberError; ?></span><br>

                <label for="address">Địa chỉ:</label>
                <input type="text" name="address" required>
                <span class="error"><?php echo $addressError; ?></span><br>

                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <span class="error"><?php echo $emailError; ?></span><br>

                <input type="submit" value="Đăng ký">
            </form>
        </div>
        <div class="image-container">
            <!-- <img src="https://hoanghamobile.com/tin-tuc/wp-content/uploads/2023/06/Sach-hay.jpg" alt="Đăng ký"> -->
            <img src="../images/signup-image.jpg" alt="Đăng ký">
            <a href="DangNhap.php" class="login-link">Đã có tài khoản? Đăng nhập ngay!</a>
        </div>
    </div>
    <?php if (isset($registerMessage) && !empty($registerMessage)): ?>
        <script>
            alert('<?php echo $registerMessage; ?>');
        </script>
    <?php endif; ?>
</body>
</html>
