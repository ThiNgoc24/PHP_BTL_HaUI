<?php
    require_once "config_vnp.php";
    include "order_functions.php";
    session_start();
    //Link youtube dạy cách thanh toán giỏ hàng bằng vnpay: https://www.youtube.com/watch?v=RoRVcbhR9vY
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Lấy thông tin người nhận và phương thức thanh toán từ form
        $orderID = rand(0, 9999); //Random mã đơn hàng
        $memberID = $_POST['memberID'];
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
        if($order_method === '1' || $order_method === '2' || $order_method === '3' || $order_method === '4'){
            if(orderSuccess($orderID, $memberID, $receiver, $address, $phone, $email, $note, $order_method)){
                echo "Đặt hàng thành công";
                header("Location: thanks_page.php");
            }else{
                echo "Đặt hàng không thành công";
            }
        }elseif($order_method === '5'){
            //Thanh toán bằng VNPAY
            $vnp_TxnRef = $orderID; //Mã đơn hàng. 
            $vnp_OrderInfo = 'Thanh toán đơn hàng tại Web';
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = 10000 * 100;
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB';
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
            $vnp_ExpireDate = $expire;
            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
                "vnp_ExpireDate"=>$vnp_ExpireDate
            );
            
            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            
            
            //var_dump($inputData);
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }
            
            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array('code' => '00'
                , 'message' => 'success'
                , 'data' => $vnp_Url);
                if (isset($_POST['redirect'])) {
                    $_SESSION['order_id'] = $orderID;
                    if(orderSuccess($orderID, $memberID, $receiver, $address, $phone, $email, $note, $order_method)){
                        echo "Đặt hàng thành công";
                    }else{
                        echo "Đặt hàng không thành công";
                    }
                    header('Location: ' . $vnp_Url);
                    die();
                } else {
                    echo json_encode($returnData);
                }
        }
        // if($order_method === '5'){
        //     echo "Thanh toán bằng VNPay";
        // }elseif($order_method === '4'){
        //     echo "Thanh toán bằng Paypal";
        // }elseif($order_method === '3'){
        //     echo "Thanh toán bằng Onepay";
        // }elseif($order_method === '2'){
        //     echo "Thanh toán bằng chuyển khoản";
        // }elseif($order_method === '1'){
        //     echo "Thanh toán khi nhận hàng";

        // }
    }
?>