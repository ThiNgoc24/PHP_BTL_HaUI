<?php
session_start();
include 'conn_db2.php';

// Biến để lưu thông báo khi không tìm thấy sản phẩm
$message = '';

// Kiểm tra xem có tham số id của sản phẩm được truyền qua URL không
if(isset($_GET['id'])) {
    $product_id = intval($_GET['id']);
    // $search = $_GET['search_query'];
    // Truy vấn chi tiết sản phẩm từ bảng products
    $sql = "SELECT p.id, p.name, p.price, p.image, p.description, p.product_quantity,
                   a.name AS author_name,
                   c.name AS category_name
            FROM products p
            INNER JOIN authors a ON p.author_id = a.id
            INNER JOIN categories c ON p.cat_id = c.id
            WHERE p.id = ?";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $product_id); // 'i' là kiểu dữ liệu của tham số, ở đây là integer
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($result->num_rows > 0) {
            $product = $result->fetch_assoc();
        } else {
            $message = "Không tìm thấy sản phẩm.";
        }
    } catch(mysqli_sql_exception $e) {
        $message = "Lỗi truy vấn: " . $e->getMessage();
    }
} else {
    $message = "Thiếu tham số id sản phẩm.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .product-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-image {
            flex: 1;
            min-width: 300px;
        }
        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .product-details {
            flex: 2;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .product-details h1 {
            margin-top: 0;
            font-size: 28px;
            color: #333;
        }
        .product-details p {
            margin: 10px 0;
            font-size: 16px;
            color: #666;
        }
        .product-actions {
            margin-top: 20px;
        }
        .cart-btn{
            padding: 10px 20px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            transition: background-color 0.3s;
        }
        .cart-btn:hover {
            background-color: #0056b3;
        }
        .product-description {
            flex-basis: 100%;
            margin-top: 20px;
            line-height: 1.6;
        }
        .product-description h2 {
            margin-bottom: 10px;
            font-size: 20px;
            color: #333;
        }
        .product-description p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
        }
        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            transition: background-color 0.3s;
        }
        .back-btn:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
<div class="product-container">
        <?php if (!empty($message)): ?>
            <p><?php echo htmlspecialchars($message); ?></p>
        <?php else: ?>
            <div class="product-image">
                <img src="../../images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            </div>
            <div class="product-details">
                <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                <p  style="color: red; font-weight: bold; font-size: large;"><?php echo number_format($product['price'], 0); ?> VND</p>
                <p><strong>Tác giả:</strong> <?php echo htmlspecialchars($product['author_name']); ?></p>
                <p><strong>Danh mục:</strong> <?php echo htmlspecialchars($product['category_name']); ?></p>
                <p><strong>Số lượng:</strong> <?php echo $product['product_quantity']; ?></p>
                <div class="product-actions">
                    <form action="../Cart/cart_functions.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product_id?>">
                        <input type="submit" class="cart-btn" name="cart-btn" value="Thêm vào giỏ hàng">
                    </form>
                    <!-- <button class="wishlist-btn">Thêm vào danh sách yêu thích</button> -->
                </div>
            </div>
            <div class="product-description">
                <h2>Mô tả sản phẩm</h2>
                <p><?php echo htmlspecialchars($product['description']); ?></p>
            </div>
            <div class="product-description">
                <h2>Bình luận</h2>
                <p><?php ?></p>
            </div>
        <?php endif; ?>
        <p><a href="search_results.php" class="back-btn">Quay lại</a></p>
    </div>
</body>
</html>
