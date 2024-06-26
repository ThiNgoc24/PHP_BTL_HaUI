<?php
    session_start();
    include "cart_functions.php";
    
     // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (!isset($_SESSION['id'])) {
        header("Location: ../../Login/login_page.php");
        exit;
    }
    // $_SESSION['member_id'] = 10; //dùng tạm thời
    $cartItems = getCartItems($_SESSION['id']); //Đợi chức năng đăng nhập và trả về member_id để dùng
    $totalCart = getTotalCart($_SESSION['id']);
    // Xử lý tăng số lượng
    if (isset($_POST['increase_quantity'])) {
        $productId = $_POST['product_id'];
        increaseCartItemQuantity($_SESSION['id'], $productId);
        header('Location: cart_page.php'); 
        exit;
    }

    // Xử lý giảm số lượng
    if (isset($_POST['decrease_quantity'])) {
        $productId = $_POST['product_id'];
        decreaseCartItemQuantity($_SESSION['member_id'], $productId);
        header('Location: cart_page.php'); 
        exit;
    }

    // Xử lý xóa sản phẩm
    if (isset($_POST['remove_item'])) {
        $productId = $_POST['product_id'];
        removeCartItem($_SESSION['member_id'], $productId);
        header('Location: cart_page.php'); 
        exit;
    }

    // Xử lý xóa toàn bộ giỏ hàng (cần xác nhận trước khi thực hiện)
    if (isset($_POST['clear_cart'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "starbook_database";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM `cart` WHERE `member_id` = {$_SESSION['id']}";
        if($conn->query($sql)){
            header("Location: cart_page.php");
        }else{
            echo "Có lỗi xảy ra. Vui lòng thử lại";
        }
        $conn->close();
    }

    if(isset($_POST['continue_shopping'])){
        header('Location: ../detail/list_pd.php');
        exit;
    }

    if(isset($_POST['order_cart'])){
        header('Location: ../Order/order_form.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="cart_page.css">
    <style>
        .btn_return a{
            display: inline-block;
            text-decoration: none;
            color: #fff;
        }
        .btn_return{
            padding: 10px 20px;
            /* margin-right: 10px; */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            transition: background-color 0.3s;
            margin-top: 20px;
            width: 200px;
            text-align: center;
        }
        .btn_return:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="main_content">
        <h1>Giỏ hàng</h1>
        <?php if (empty($cartItems)): ?>
            <p>Giỏ hàng trống</p>
            <p class="btn_return"><a href="../Home/Home_page.php">Quay về trang chủ</a></p>
        <?php else: ?>
            <table>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>
                <?php foreach ($cartItems as $item): ?>
                <tr>
                    <td><?php echo $item['product_name']; ?></td>
                    <td><img src="../../images/<?php echo $item['product_image']; ?>" alt="<?php echo $item['product_name']; ?>"></td>
                    <td><?php echo $item['product_price']; ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                            <input type="hidden" name="quantity" value="<?php echo $item['quantity']; ?>"> <button type="submit" name="decrease_quantity">-</button>
                            <span id="quantity-<?php echo $item['product_id']; ?>"><?php echo $item['quantity']; ?></span> <button type="submit" name="increase_quantity">+</button>
                        </form>
                    </td>
                    <td><?php echo $item['product_price'] * $item['quantity']; ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                            <button type="submit" name="remove_item" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4"><b>Tổng tiền:</b></td>
                    <td><?php echo $totalCart;?></td>
                </tr>
            </table>
            
            <div class="footer_button">
                <form method="post">
                    <button type="submit" name="continue_shopping">Tiếp tục mua hàng</button>
                </form>
                <form method="post">
                    <button type="submit" name="clear_cart" onclick="return confirm('Bạn có chắc chắn muốn xóa toàn bộ giỏ hàng?');">Xóa tất cả</button>
                </form>
                <form method="post">
                    <button type="submit" name="order_cart">Thanh toán</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>