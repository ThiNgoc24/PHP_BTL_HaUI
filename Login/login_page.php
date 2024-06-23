<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
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
            background-color: #0056b3;
        }
        
        .btn-forgot {
            text-align: center;
            margin-top: 10px;
        }
        .btn-forgot a {
            color: #007bff;
            text-decoration: none;
        }
        .btn-register {
            text-align: center;
            margin-top: 10px;
        }
        .btn-register a {
            color: #007bff;
            text-decoration: none;
        }
        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Đăng nhập</h2>
        <form action="login_functions.php" method="post">
            <label for="username">Tên đăng nhập:</label><br>
            <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
            <?php if (isset($username_error)&& !empty($username_error )) { ?>
                <span class="error-message"><?php echo $username_error; ?></span><br>
            <?php } ?>

            <label for="password">Mật khẩu:</label><br>
            <input type="password" id="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>">
            <?php if (isset($password_error) && !empty($password_error)) { ?>
                <span class="error-message"><?php echo $password_error; ?></span><br>
            <?php } ?><br>

            <input type="submit" value="Đăng nhập" class="btn-submit" name="btn_login" id="btn_login">
        </form>
        <div class="btn-forgot">
            <a href="#">Quên mật khẩu?</a>
        </div>
        <div class="btn-register">
            <a href="#">Đăng ký</a>
        </div>
    </div>
   
</body>
</html>
