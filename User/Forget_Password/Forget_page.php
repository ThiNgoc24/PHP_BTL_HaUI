<?php 
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Forget_business.php'; // Bao gồm file Forget_business.php

    // Get the email from the form
    $email = $_POST['email'];

    // Call the function to process password reset
    $message = processPasswordReset($email);
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
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            width: 300px; /* Đặt chiều rộng của form là 300px */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <form method="post" action="" class="border border-primary border-2">
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
