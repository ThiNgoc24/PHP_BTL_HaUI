<?php
include 'Forget_data.php';
include 'Forget_function.php';

function processPasswordReset($email) {
    // Check if the email exists in the database
    $result = checkEmailExists($email);

    if (!empty($result)) {
        // Generate a new password
        $new_password = substr(md5(rand(0,999999)), 0, 8);
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

        // Update the password in the database
        if (updatePassword($email, $hashed_password)) {
            guiMKmoi($email, $new_password);
            return "<p class='success'>Mật khẩu mới của bạn là: $new_password</p>";
        } else {
            return "<p class='warning'>Cập nhật mật khẩu thất bại. Vui lòng thử lại.</p>";
        }
    } else {
        return "<p class='warning'>Email chưa tồn tại trong hệ thống, vui lòng đăng ký nó.</p>";
    }
}
?>
