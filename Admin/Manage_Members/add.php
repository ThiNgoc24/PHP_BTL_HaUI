<?php
require_once 'BaoTriMember_functions.php';

$memberFunctions = new BaoTriMemberFunctions();
$errors = $memberFunctions->handleAddMemberRequest();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thêm tài khoản</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 0px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
            font-weight: bold;
        }
        input, select {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        button {
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #333;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php include "../Admin_dashboard/Header_Sidebar.php"?>
    <div class="container">
        <h1>Thêm tài khoản</h1>
        <form method="POST" action="">
            <label>Tên đăng nhập:</label>
            <input type="text" name="username" required>
            <?php if (isset($errors['username'])): ?>
                <p class="error"><?php echo $errors['username']; ?></p>
            <?php endif; ?><br>

            <label>Mật khẩu:</label>
            <input type="password" name="password" required>
            <?php if (isset($errors['password'])): ?>
                <p class="error"><?php echo $errors['password']; ?></p>
            <?php endif; ?><br>

            <label>Xác nhận mật khẩu:</label>
            <input type="password" name="confirm_password" required>
            <?php if (isset($errors['confirm_password'])): ?>
                <p class="error"><?php echo $errors['confirm_password']; ?></p>
            <?php endif; ?><br>

            <label>Họ tên:</label>
            <input type="text" name="fullname" required>
            <?php if (isset($errors['fullname'])): ?>
                <p class="error"><?php echo $errors['fullname']; ?></p>
            <?php endif; ?><br>

            <label>Số điện thoại:</label>
            <input type="text" name="phonenumber" required>
            <?php if (isset($errors['phonenumber'])): ?>
                <p class="error"><?php echo $errors['phonenumber']; ?></p>
            <?php endif; ?><br>

            <label>Địa chỉ:</label>
            <input type="text" name="address" required>
            <?php if (isset($errors['address'])): ?>
                <p class="error"><?php echo $errors['address']; ?></p>
            <?php endif; ?><br>

            <label>Email:</label>
            <input type="email" name="email" required>
            <?php if (isset($errors['email'])): ?>
                <p class="error"><?php echo $errors['email']; ?></p>
            <?php endif; ?><br>

            <label>Trạng thái:</label>
            <select name="status">
                <option value="1">Hoạt động</option>
                <option value="0">Không hoạt động</option>
            </select>
            <?php if (isset($errors['status'])): ?>
                <p class="error"><?php echo $errors['status']; ?></p>
            <?php endif; ?><br>

            <button type="submit">Thêm</button>
        </form>
        <a class="back-link" href="index.php">Quay lại danh sách tài khoản</a>
    </div>
    <?php include "../Admin_dashboard/Footer.php"?>
</body>
</html>