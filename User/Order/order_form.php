<?php
include '../Cart/cart_functions.php';
include "order_functions.php";
session_start();
$order_methods = getOrderMethod();


?>

<!DOCTYPE html>
<html>
<head>
    <title>Thông tin đặt hàng</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items:center;
        }
        td, th{
            padding: 20px;
        }
        input[type="text"]{
            width: 400px;
            height: 30px;
        }
        input[type="radio"]{
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Thông tin đặt hàng</h1>
    <form method="post" action="handle_order.php">
        <table border="0">
            <tr>
                <td><label for="receiver">Tên người nhận: </label></td>
                <td><input type="text" name="receiver" id="receiver"></td>
            </tr>
            <tr>
                <td><label for="address">Địa chỉ nhận hàng: </label></td>
                <td><input type="text" name="address" id="address"></td>
            </tr>
            <tr>
                <td><label for="phone">Số điện thoại người nhận: </label></td>
                <td><input type="text" name="phone" id="phone"></td>
            </tr>
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="note">Ghi chú: </label></td>
                <td><input type="text" name="note" id="note"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="order_method">Phương thức thanh toán: </label><br>
                    <?php
                        foreach($order_methods as $item){
                            echo "<input type='radio' id='order_method_{$item['id']}' name='order_method' value='{$item['id']}'>";
                            echo "<label for='order_method_{$item['id']}'>{$item['name']}</label><br>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="confirm_order" value="Xác nhận đặt hàng" id="confirm_order"></td>
            </tr>
        </table>
    </form> 
</body>
</html>