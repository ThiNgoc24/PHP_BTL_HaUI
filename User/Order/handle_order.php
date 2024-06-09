<?php
    require_once "config_vnp.php";
    //Link youtube dạy cách thanh toán giỏ hàng bằng vnpay: https://www.youtube.com/watch?v=RoRVcbhR9vY
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Lấy thông tin người nhận và phương thức thanh toán từ form
        $receiver = $_POST['receiver'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $note = $_POST['note'];
        $order_method = $_POST['order_method'];
    
        // if (placeOrder($_SESSION['user_id'], $recipientInfo, $paymentMethod)) {
        //     // Xử lý khi đặt hàng thành công
        //     echo "Đặt hàng thành công!";
        //     // ... (Có thể chuyển hướng đến trang xác nhận đơn hàng)
        // } else {
        //     // Xử lý khi đặt hàng thất bại
        //     echo "Đặt hàng thất bại. Vui lòng thử lại.";
        // }
        if($order_method === '5'){
            echo "Thanh toán bằng VNPay";
        }elseif($order_method === '4'){
            echo "Thanh toán bằng Paypal";
        }elseif($order_method === '3'){
            echo "Thanh toán bằng Onepay";
        }elseif($order_method === '2'){
            echo "Thanh toán bằng chuyển khoản";
        }elseif($order_method === '1'){
            echo "Thanh toán khi nhận hàng";
        }
    }
?>