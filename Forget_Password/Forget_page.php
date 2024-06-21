<?php 
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include '../conn_db.php'; // Adjust the path as needed

    // Get the email from the form
    $email = $_POST['email'];

    // Prepare the SQL query to check if the email exists
    $sql = "SELECT * FROM member WHERE email = '$email'";

    // Execute the query
    $result = queryDatabase($sql); // This function should be defined in your database connection file

    // Check if the email was found
    if (!empty($result)) {
        // Generate a new password
        $new_password = substr(md5(rand(0,999999)), 0, 8);
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

        // Prepare the SQL query to update the password
        $update_sql = "UPDATE member SET password = '$hashed_password' WHERE email = '$email'";

        // Execute the update query
        if (executeQuery($update_sql)) { // Assuming executeQuery() is defined in your database connection file
            include 'forget_function.php';
            guiMKmoi($email, $new_password);
            $message = "<p class='success'>Mật khẩu mới của bạn là: $new_password</p>";
        } else {
            $message = "<p class='warning'>Cập nhật mật khẩu thất bại. Vui lòng thử lại.</p>";
        }
    } else {
        $message = "<p class='warning'>Email chưa tồn tại trong hệ thống, vui lòng đăng ký nó.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forget Password</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .warning {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <form method="post" action="" style="width: 600px;" class="border border-primary border-2 m-auto p-2">
        <div class="mb-3 text-center">
            <h4>QUÊN MẬT KHẨU</h4>
            <?php echo $message; ?>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Nhập Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($email)) echo $email ?>">
        </div>

        <button type="submit" name="nutguiyeucau" class="btn btn-primary">Gửi yêu cầu</button>
    </form>
</body>
</html>
