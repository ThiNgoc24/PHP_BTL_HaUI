<?php
    include_once "../../conn_db.php";
    session_start();
    if(isset($_GET['vnp_Amount'])){
        $vnp_Amount = $_GET['vnp_Amount'];
        $vnp_BankCode = $_GET['vnp_BankCode'];
        $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
        $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
        $vnp_PayDate = $_GET['vnp_PayDate'];
        $vnp_TmnCode = $_GET['vnp_TmnCode'];
        $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
        $vnp_CardType = $_GET['vnp_CardType'];
        $order_id = $_SESSION['order_id'];
        
        $insert_vnpay = "insert into `vnpay`(vnp_Amount, vnp_BankCode, vnp_BankTranNo, vnp_CardType, vnp_OrderInfo, vnp_PayDate, vnp_TmnCode, vnp_TransactionNo, order_id)
                        value ('$vnp_Amount', '$vnp_BankCode', '$vnp_BankTranNo', '$vnp_CardType', '$vnp_OrderInfo', '$vnp_PayDate', '$vnp_TmnCode', '$vnp_TransactionNo', '$order_id')";
        if(executeQuery($insert_vnpay)){
            echo "<h3>Giao dịch thanh toán VNPAY thành công</h3>";
        }else{
            echo "Giao dịch thất bại";
        }
    }
?>
<h3>Cảm ơn bạn đã mua hàng, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất</h3>