<?php
// Khởi tạo phiên
session_start();
include "../../conn_db.php";

$username_error = "";
$password_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Kiểm tra tên đăng nhập
    if (empty($username)) {
        $username_error = "Vui lòng nhập tên đăng nhập.";
    }

    // Kiểm tra mật khẩu
    if (empty($password)) {
        $password_error = "Vui lòng nhập mật khẩu.";
    }
   
    // Nếu không có lỗi, tiến hành kiểm tra đăng nhập
    if (empty($username_error) && empty($password_error)) {
        if ($role === 'user') {
            $table = 'member';
        } elseif ($role === 'admin') {
            $table = 'admin';
        } else {
            // Xử lý trường hợp không xác định, tuy frontend nên xác thực lựa chọn này
            // Có thể chuyển hướng hoặc hiển thị thông báo lỗi
        }

        // Kiểm tra thông tin đăng nhập
        $sql = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
        $result = queryDatabase($sql);
        
        if (!empty($result)) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Chuyển hướng đến trang chính sau khi đăng nhập thành công
            exit();
        } else {
            $password_error = "Tên đăng nhập hoặc mật khẩu không chính xác.";
        }
    }
}

include "login_page.php";
?>
