<?php
    include "cart_functions.php";
    // include "màn hình trang chủ.php"; //Bổ sung sau
    session_start();
    // if(!isLoggedin()){
    //     header('Location: login_page.php'); //Khi click vào icon cart => nếu chưa login thì điều hướng đến màn Login
    //     exit;
    // }
    $_SESSION['member_id'] = 10; //dùng tạm thời
    $cartItems = getCartItems($_SESSION['member_id']); //Đợi chức năng đăng nhập và trả về member_id để dùng
    $totalCart = getTotalCart($_SESSION['member_id']);
    // Xử lý tăng số lượng
    if (isset($_POST['increase_quantity'])) {
        $productId = $_POST['product_id'];
        increaseCartItemQuantity($_SESSION['member_id'], $productId);
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
        if (confirmClearCart()) { // Hàm này bạn cần tự định nghĩa để hiển thị hộp thoại xác nhận
            clearCart($_SESSION['member_id']);
            header('Location: cart_page.php'); 
            exit;
        }
    }

    if(isset($_POST['continue_shopping'])){
        header('Location: home_page.php');//phát triển sau
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
</head>
<body>
    <div class="main_content">
        <h1>Giỏ hàng</h1>
        <?php if (empty($cartItems)): ?>
            <p>Giỏ hàng trống</p>
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