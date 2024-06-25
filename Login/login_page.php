<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }
        label {
            display: block;
            margin-bottom: 5px;
            /* padding: 10px; */
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            font-size: 16px;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn-submit:hover {
            background-color: #191970;
        }
        
        .btn-forgot {
            text-align: center;
            margin-top: 10px;
        }
        .btn-forgot a {
            color: #007bff;
            text-decoration: none;
        }
        .btn-forgot a:hover {
            color: #191970;
        }
        
        .btn-register {
            text-align: center;
            margin-top: 10px;
        }
        .btn-register a {
            color: #007bff;
            text-decoration: none;
        }
        .btn-register a:hover {
            color: #191970;
        }
        .error-message {
            color: red;
            font-size: 14px;
        }
        .role-radio {
        display: inline-block; /* Hiển thị dưới dạng block để xếp ngang */
        margin-right: 10px; /* Khoảng cách giữa các radio button */
        }

        /* Tùy chỉnh vị trí của các label */
        label {
            display: inline-block;
            margin-right: 5px;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Đăng nhập</h1>
        <form action="login_functions.php" method="post">
            <label for="username">Tên đăng nhập:</label><br>
            <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
            <?php if (isset($username_error)&& !empty($username_error )) { ?>
                <span class="error-message"><?php echo $username_error; ?></span><br><br>
            <?php } ?>

            <label for="password">Mật khẩu:</label><br>
            <input type="password" id="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>">
            <?php if (isset($password_error) && !empty($password_error)) { ?>
                <span class="error-message"><?php echo $password_error; ?></span><br>
            <?php } ?><br>
            <label>Vai trò:</label><br>
            <input style='margin-left:50px;' type="radio" id="user" name="role" value="user" checked>
            <label for="user" >User</label>
            <input style='margin-left:50px;' type="radio" id="admin" name="role" value="admin">
            <label for="admin">Admin</label><br>

            <input type="submit" value="Đăng nhập" class="btn-submit" name="btn_login" id="btn_login">
        </form>
        <div class="btn-forgot">
            <a href="../User/Forget_Password/Forget_page.php">Quên mật khẩu?</a>
        </div>
        <div class="btn-register">
            <a href="../User/Register/DangKy_page.php">Đăng ký</a>
        </div>
    </div>
   
</body>
</html>
