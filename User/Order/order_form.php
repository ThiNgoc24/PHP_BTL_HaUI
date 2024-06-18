<?php
include '../Cart/cart_functions.php';
include "order_functions.php";
session_start();
$_SESSION['member_id'] = 10;
$order_methods = getOrderMethod();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thông tin đặt hàng</title>
    <link rel="stylesheet" href="order_form.css">
</head>
<body>
    <div class="container">
        <h1 style="background-color: #cccc">Thông tin đặt hàng</h1>

        <div class="order-form">
            <form method="post" action="handle_order.php">
                <h2>Thông tin khách hàng</h2>
                <input type="hidden" id="memberID" name="memberID" value=<?php echo $_SESSION['member_id'];?>>
                <div class="form-row">
                    <div class="form-group">
                        <label for="receiver">Họ và tên:</label>
                        <input type="text" name="receiver" id="receiver" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại:</label>
                        <input type="tel" name="phone" id="phone" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ:</label>
                    <textarea name="address" id="address" required></textarea> 
                </div>
                <div class="form-group">
                    <label for="note">Ghi chú:</label>
                    <textarea name="note" id="note"></textarea>
                </div>

                <h2>Phương thức thanh toán</h2>
                <div class="form-row">
                <?php
                    foreach ($order_methods as $item) { // Thêm khoảng trắng giữa $order_methods và as
                        $checked = $item['id'] == 1 ? 'checked' : '';
                        $disabled = $item['status'] == 0 ? 'disabled' : ''; // Chỉ thêm disabled khi status = 0
                        echo "<div class='payment-method'>";
                        echo "<input type='radio' id='order_method_{$item['id']}' name='order_method' value='{$item['id']}'>";
                        echo "<label for='order_method_{$item['id']}'>{$item['name']}</label><br>";
                        echo "</div>";
                    }
?>
                </div>

                <div class="form-submit">
                    <input type="submit" name="redirect" value="Đặt hàng ngay"></input>
                </div>
            </form>
        </div>
    </div>
</body>
</html>