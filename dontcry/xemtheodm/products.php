<?php
include '../conn_db.php';

// Số sản phẩm trên mỗi trang
$products_per_page = 20;

// Lấy trang hiện tại từ URL, nếu không có thì mặc định là trang 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if($page <= 0) {
    $page = 1;
}

// Kiểm tra xem có tham số category_id được truyền qua URL không
if (isset($_GET['category_id'])) {
    $category_id = intval($_GET['category_id']);

    // Truy vấn tổng số sản phẩm theo danh mục
    $total_products_sql = "SELECT COUNT(*) FROM products WHERE cat_id = ? AND status = 1";
    $stmt = $conn->prepare($total_products_sql);
    $stmt->bind_param("i", $category_id);
    $stmt->execute();
    $stmt->bind_result($total_products);
    $stmt->fetch();
    $stmt->close();

    // Tính tổng số trang
    $total_pages = ceil($total_products / $products_per_page);

    // Tính toán vị trí bắt đầu của sản phẩm cho trang hiện tại
    $offset = ($page - 1) * $products_per_page;

    // Truy vấn sản phẩm theo danh mục và phân trang
    $product_sql = "SELECT p.id, p.name, p.price, p.image, p.description, a.name as author_name
                    FROM products p
                    JOIN authors a ON p.author_id = a.id
                    WHERE p.cat_id = ? AND p.status = 1
                    LIMIT ? OFFSET ?";
    $stmt = $conn->prepare($product_sql);
    $stmt->bind_param("iii", $category_id, $products_per_page, $offset);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    echo "<p>Missing category ID.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="banner1">
        <h1>Sản phẩm</h1>
        <img src="../images/background_show_products.jpg" alt="Logo">
        <div class="back-button">
            <a href="../home/home.php">Quay lại</a>
        </div>
    </div>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product'>";
            echo "<img src='../images/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'>";
            echo "<h2>" . htmlspecialchars($row['name']) . "</h2>";
            echo "<p class='price'>" . number_format($row['price'], 0) . " VND </p>";
            echo "<p>" . htmlspecialchars($row['author_name']) . "</p>";
           
            echo "<a href='product_detail.php?id=" . $row['id'] . "'>Xem chi tiết</a>";
            echo "</div>";
        }
    } else {
        echo "<p>Không có sản phẩm trong danh mục.</p>";
    }
    ?>

    <div class="pagination">
    
        <?php if($page > 1): ?>
            <a href="?category_id=<?php echo $category_id; ?>&page=<?php echo $page - 1; ?>">Trước</a>
        <?php endif; ?>

        <?php for($i = 1; $i <= $total_pages; $i++): ?>
            <a href="?category_id=<?php echo $category_id; ?>&page=<?php echo $i; ?>" class="<?php if($i == $page) echo 'active'; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>

        <?php if($page < $total_pages): ?>
            <a href="?category_id=<?php echo $category_id; ?>&page=<?php echo $page + 1; ?>">Sau</a>
        <?php endif; ?>
        
    </div>
    
</body>
</html>
