<?php
// Khởi tạo phiên
include "../conn_db.php";

session_start();
$username_error = "";
$password_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

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
        // Kiểm tra thông tin đăng nhập
        $sql = "SELECT * FROM member WHERE username='$username' AND password='$password'";
        $result = queryDatabase($sql);
        if (!empty($result)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Chuyển hướng đến trang chính sau khi đăng nhập thành công
            exit();
        } else {
            $password_error = "Tên đăng nhập hoặc mật khẩu không chính xác.";
        }
    }
}
?>
