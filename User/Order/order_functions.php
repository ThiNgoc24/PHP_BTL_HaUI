<?php
    include_once "../../conn_db.php";
    include_once "../Cart/cart_functions.php";

    function getOrderMethod(){
        $sql = "SELECT * FROM order_methods";
        return queryDatabase($sql);
    }

    function orderSuccess($orderID, $memberID, $receiver, $address, $phone, $email, $note, $order_method){
        if(insertOrder($orderID, $memberID, $receiver, $address, $phone, $email, $note, $order_method) && insertOrderDetails($orderID, $memberID)){
            // Xóa giỏ hàng sau khi đặt hàng thành công (nếu cần)
            // clearCart($memberID); Tạm thời khoá để test thanh toán
            return true;
        }
        return false;
    }

    function insertOrder($orderID, $memberID, $receiver, $address, $phone, $email, $note, $order_method) {
        $sql = "INSERT INTO orders (id, member_id, order_method_id, receiver, address, phone, email, note) 
                VALUES ($orderID, '$memberID', '$order_method', '$receiver', '$address',  '$phone', '$email', '$note')";
        return executeQuery($sql);
    }
    
    function insertOrderDetails($orderID, $memberID) {
        $cartItems = getCartItems($memberID);
        foreach ($cartItems as $item) {
            $productId = $item['product_id'];
            $quantity = $item['quantity'];
            $price = $item['product_price'];
            $sql = "INSERT INTO order_detail (productId, orderId, quantity, price) 
                    VALUES ('$productId', '$orderID', $quantity, $price)";
            if(executeQuery($sql) === false){
                return false;
            }
        }
        return true;
    }

    function getTotalOrder($memberID){
        return getTotalCart($memberID);
    }
?>