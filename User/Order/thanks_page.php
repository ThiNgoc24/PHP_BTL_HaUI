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
        $message_vnp = "";
        $insert_vnpay = "insert into `vnpay`(vnp_Amount, vnp_BankCode, vnp_BankTranNo, vnp_CardType, vnp_OrderInfo, vnp_PayDate, vnp_TmnCode, vnp_TransactionNo, order_id)
                        value ('$vnp_Amount', '$vnp_BankCode', '$vnp_BankTranNo', '$vnp_CardType', '$vnp_OrderInfo', '$vnp_PayDate', '$vnp_TmnCode', '$vnp_TransactionNo', '$order_id')";
        if(executeQuery($insert_vnpay)){
            $message_vnp = "Giao dịch thanh toán VNPAY thành công!";
        }else{
            $message_vnp = "Giao dịch thanh toán VNPAY thất bại. Vui lòng thử lại!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .thank-you-container {
            text-align: center;
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .thank-you-container h3 {
            color: #333;
        }
        .thank-you-container p {
            color: #666;
            font-size: 18px;
        }
        .continue-shopping-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .continue-shopping-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <h3><?php echo $message_vnp;?></h3>
        <h3>Cảm ơn bạn đã mua hàng, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!</h3>
        <a href="#" class="continue-shopping-btn">Tiếp tục mua hàng</a> <!-- Bổ sung link tới trang chủ -->
    </div>
</body>
</html>
