<?php
    include_once "../../conn_db.php"; //Thiết lập đường dẫn tương đối
    function getCartItems($memberID){
        $sql = "SELECT * FROM `cart` WHERE `member_id` = '{$memberID}'";
        return queryDatabase($sql);
    }

    function getTotalCart($memberID){
        $total = 0;
        $products = getCartItems($memberID);
        foreach($products as $product){
            $total += $product['product_price'] * $product['quantity'];
        }
        return $total;
    }

    function updateCartItemQuantity($memberID, $productID, $newQuantity){
        $sql = "UPDATE `cart` SET `quantity` = '{$newQuantity}' WHERE `product_id` = '{$productID}' AND `member_id` = '{$memberID}'";
        return executeQuery($sql);
    }

    function removeCartItem($memberID, $productID){
        $sql = "DELETE FROM `cart` WHERE `product_id` = '{$productID}' AND `member_id` = '{$memberID}'";
        return executeQuery($sql);
    }

    function clearCart($memberID){
        $sql = "DELETE FROM `cart` WHERE `member_id` = '{$memberID}'";
        return executeQuery($sql);
    }

    function getCartItemQuantity($memberID, $productID){
        $sql = "SELECT `quantity` FROM `cart` WHERE `member_id` = '{$memberID}' AND `product_id` = '{$productID}'";
        return queryDatabase($sql)[0]['quantity'];
    }

    function increaseCartItemQuantity($memberID, $productID) {
        $currentQuantity = getCartItemQuantity($memberID, $productID); // Lấy số lượng hiện tại
        updateCartItemQuantity($memberID, $productID, $currentQuantity + 1);
    }
    
    function decreaseCartItemQuantity($memberID, $productID) {
        $currentQuantity = getCartItemQuantity($memberID, $productID);
        if ($currentQuantity > 1) { // Không giảm xuống dưới 1
            updateCartItemQuantity($memberID, $productID, $currentQuantity - 1);
        }
    }
?>