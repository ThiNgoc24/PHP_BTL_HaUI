<?php
    include_once "../../conn_db.php";
    function getOrderMethod(){
        $sql = "SELECT * FROM order_methods";
        return queryDatabase($sql);
    }

    function orderSuccess($memberID, $receiver, $address, $phone, $email, $note, $order_method){
        // Nếu thanh toán thành công, thực hiện cập nhật cơ sở dữ liệu
        if ($paymentSuccess) {
            $orderId = insertOrder($memberID, $receiver, $address, $phone, $email, $note, $order_method);
            insertOrderDetails($orderID, $memberID);

            // Xóa giỏ hàng sau khi đặt hàng thành công (nếu cần)
            clearCart($memberID);
            return true;
        } else {
            return false;
        }
    }

    function insertOrder($memberID, $receiver, $address, $phone, $email, $note, $order_method) {
        $sql = "INSERT INTO orders (member_id, order_method_id, receiver, address, phone, email, note) 
                VALUES ($memberID, $order_method, $receiver, $address,  $phone, $email, $note)";
        executeQuery($sql); 
        return getLastInsertedId(); // Lấy ID của đơn hàng vừa được thêm vào
    }
    
    function insertOrderDetails($orderID, $memberID) {
        $cartItems = getCartItems($memberID);
        foreach ($cartItems as $item) {
            $productId = $item['product_id'];
            $quantity = $item['quantity'];
            $price = $item['product_price'];
            $sql = "INSERT INTO order_detail (productId, orderId, quantity, price) 
                    VALUES ($productId, $orderID, $quantity, $price)";
            executeQuery($sql);
        }
    }

    
?>