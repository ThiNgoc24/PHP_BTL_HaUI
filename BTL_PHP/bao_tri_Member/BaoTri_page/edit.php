<?php
require_once 'C:\xampp\htdocs\BTL_PHP\bao_tri_Member\BaoTriMember_functions.php';

$memberFunctions = new BaoTriMemberFunctions();
$id = $_GET['id'];
$result = $memberFunctions->handleEditMemberRequest($id);
$errors = $result['errors'];
$member = $result['member'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sửa tài khoản</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
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
            color: red;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sửa tài khoản</h1>
        <p style="text-align: center; color: coral;">Không được sửa mật khẩu và email (-.-)</p>
        <?php if (!empty($errors['general'])): ?>
            <p class="error"><?php echo $errors['general']; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <label>Tên đăng nhập:</label>
            <input type="text" name="username" value="<?php echo $member['username']; ?>" required>
            <?php if (isset($errors['username'])): ?>
                <p class="error"><?php echo $errors['username']; ?></p>
            <?php endif; ?>

            <label>Mật khẩu:</label>
            <input type="password" name="password" value="<?php echo $member['password']; ?>" required readonly>
            
            <label>Họ tên:</label>
            <input type="text" name="fullname" value="<?php echo $member['fullname']; ?>" required>
            <?php if (isset($errors['fullname'])): ?>
                <p class="error"><?php echo $errors['fullname']; ?></p>
            <?php endif; ?>
            
            <label>Số điện thoại:</label>
            <input type="text" name="phonenumber" value="<?php echo $member['phonenumber']; ?>" required>
            <?php if (isset($errors['phonenumber'])): ?>
                <p class="error"><?php echo $errors['phonenumber']; ?></p>
            <?php endif; ?>
            
            <label>Địa chỉ:</label>
            <input type="text" name="address" value="<?php echo $member['address']; ?>" required>
            <?php if (isset($errors['address'])): ?>
                <p class="error"><?php echo $errors['address']; ?></p>
            <?php endif; ?>
            
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $member['email']; ?>" required readonly>
            
            <label>Trạng thái:</label>
            <select name="status">
                <option value="1" <?php if ($member['status'] == 1) echo 'selected'; ?>>Hoạt động</option>
                <option value="0" <?php if ($member['status'] == 0) echo 'selected'; ?>>Không hoạt động</option>
            </select>
            
            <button type="submit">Sửa</button>
        </form>
        <a class="back-link" href="index.php">Huỷ bỏ</a>
    </div>
</body>
</html>