<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function guiMKmoi($email, $new_password) {
    require 'PHPMailer-master/src/PHPMailer.php'; 
    require 'PHPMailer-master/src/SMTP.php'; 
    require 'PHPMailer-master/src/Exception.php'; 

    $mail = new PHPMailer(true); // true: enables exceptions

    try {
        $mail->SMTPDebug = 2; // 0: no debug output, 2: detailed debug output
        $mail->isSMTP();  
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'dinhhlieu22@gmail.com'; // SMTP username
        $mail->Password = 'tpxv yssk pbml ypxq'; // SMTP password or app-specific password
        $mail->SMTPSecure = 'ssl'; // Encryption type (SSL/TLS)
        $mail->Port = 465; // SMTP port (usually 465 for SSL or 587 for TLS)

        $mail->setFrom('dinhhlieu22@gmail.com', 'Lieu'); 
        $mail->addAddress($email); 
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Thư gửi lại mật khẩu';
        $mail->Body = "<p>Bạn nhận được thư này do bạn hoặc ai đó yêu cầu mật khẩu mới<br>Mật khẩu của bạn là: {$new_password}</p>";

        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));

        $mail->send();
        echo "<script>document.location='ThongBao.php';</script>";
    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage();
    }
}
?>
