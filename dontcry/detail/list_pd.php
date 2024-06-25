<?php
include '../conn_db2.php';

// Số sản phẩm trên mỗi trang
$products_per_page = 20;

// Lấy trang hiện tại từ URL, nếu không có thì mặc định là trang 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if($page <= 0) {
    $page = 1;
}

// Tính toán vị trí bắt đầu của sản phẩm cho trang hiện tại
$offset = ($page - 1) * $products_per_page;

// Truy vấn tổng số sản phẩm
$total_products_sql = "SELECT COUNT(*) FROM products WHERE status = 1";
$total_products_result = $conn->query($total_products_sql);
$total_products_row = $total_products_result->fetch_row();
$total_products = $total_products_row[0];

// Tính tổng số trang
$total_pages = ceil($total_products / $products_per_page);

// Truy vấn danh sách sản phẩm từ bảng products cho trang hiện tại
$sql = "SELECT id, name, price, image FROM products WHERE status = 1 ORDER BY id DESC LIMIT ? OFFSET ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ii', $products_per_page, $offset);
$stmt->execute();
$result = $stmt->get_result();

$products = [];
if ($result->num_rows > 0) {
    // Duyệt qua từng dòng kết quả
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
} else {
    echo "Không có sản phẩm nào.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>

    </style>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="banner1">
        <h1>Danh sách sản phẩm</h1>
        <img src="../images/banner22.jpg" alt="Logo">
        <div class="back-button">
            <a href="../home/home.php">Quay lại</a>
        </div>
    </div>

    <?php foreach ($products as $product): ?>
        <div class="product">
            <a href="product_detail.php?id=<?php echo $product['id']; ?>">
                <img src="../images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                <p class="price"><?php echo number_format($product['price'], 0); ?> VND</p>
            </a>
        </div>
    <?php endforeach; ?>

    <div class="pagination">
        <?php if($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>">Trước</a>
        <?php endif; ?>

        <?php for($i = 1; $i <= $total_pages; $i++): ?>
            <a href="?page=<?php echo $i; ?>" class="<?php if($i == $page) echo 'active'; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>

        <?php if($page < $total_pages): ?>
            <a href="?page=<?php echo $page + 1; ?>">Sau</a>
        <?php endif; ?>
    </div>
</body>
</html>
