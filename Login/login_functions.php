<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once "../conn_db.php";

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
            $redirect_page = '../User/Home/Home_page.php'; // Trang chuyển hướng cho vai trò user
        } elseif ($role === 'admin') {
            $table = 'admin';
            $redirect_page = '../Admin/Admin_dashboard/Dashboard_page.php'; // Trang chuyển hướng cho vai trò admin
        } else {
            // Xử lý trường hợp không xác định, tuy frontend nên xác thực lựa chọn này
            // Có thể chuyển hướng hoặc hiển thị thông báo lỗi
    }

    // Kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
    $result = queryDatabase($sql)[0];
    
    if (!empty($result)) {
        $_SESSION['id'] = $result['id'];
        $_SESSION['username'] = $username;
        header("Location: $redirect_page"); // Chuyển hướng đến trang tương ứng với vai trò
        exit();
    } else {
        $password_error = "Tên đăng nhập hoặc mật khẩu không chính xác.";
    }
}

}

include "login_page.php";
?>