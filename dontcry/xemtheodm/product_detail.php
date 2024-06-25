<?php
include '../conn_db.php';

// Variable to store message when no product is found
$message = '';

// Check if product id is passed in URL
if (isset($_GET['id'])) {
    $product_id = intval($_GET['id']);

    // Query product details from products table
    $sql = "SELECT p.id, p.name, p.price, p.image, p.description, p.product_quantity,
                   a.name AS author_name,
                   c.name AS category_name
            FROM products p
            INNER JOIN authors a ON p.author_id = a.id
            INNER JOIN categories c ON p.cat_id = c.id
            WHERE p.id = ?";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $product_id); // 'i' is the type of the parameter, here it's an integer
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $product = $result->fetch_assoc();
        } else {
            $message = "Không tìm thấy sản phẩm.";
        }
    } catch (mysqli_sql_exception $e) {
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
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="product-container">
        <?php if (!empty($message)): ?>
            <p><?php echo htmlspecialchars($message); ?></p>
        <?php else: ?>
            <div class="product-image">
                <img src="../images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            </div>
            <div class="product-details">
                <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                <p  style="color: red; font-weight: bold; font-size: large;"><?php echo number_format($product['price'], 0); ?> VND</p>
                <p><strong>Tác giả:</strong> <?php echo htmlspecialchars($product['author_name']); ?></p>
                <p><strong>Danh mục:</strong> <?php echo htmlspecialchars($product['category_name']); ?></p>
                <p><strong>Số lượng:</strong> <?php echo $product['product_quantity']; ?></p>
                <div class="product-actions">
                    <button class="cart-btn">Thêm vào giỏ hàng</button>
                    <button class="wishlist-btn">Thêm vào danh sách yêu thích</button>
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
        <p><a href="../home/home.php" class="back-btn">Quay lại</a></p>
    </div>
</body>
</html>
