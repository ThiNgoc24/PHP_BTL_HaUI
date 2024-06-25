<?php
include '../conn_db.php';

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
        /*style detail/list-pd và xemtheodm/products*/
        .body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .banner1 {
            position: relative;
            text-align: center;
            color: white;
            margin-bottom: 40px;
        }

        .banner1 img {
            width: 100%;
            height: 180px;
        }

        .banner1 h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 36px;
            margin: 0;
            color: white;
        }

        .back-button {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .back-button a {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .back-button a:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: white;
        }
        .product {
            font-family: Arial, sans-serif;
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
        
            border-radius: 5px;
            text-align: center;
            width: 220px;
            box-sizing: border-box;
            display: inline-block;
            vertical-align: top;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .product h2 {
            font-size: 18px;
            margin: 10px 0;
        }
        .product p {
            font-size: 16px;
            margin: 5px 0;
        }
        .product a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        .product:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .product:hover img {
            transform: scale(1.05);
        }
        .product:hover h2 {
            color: #0056b3;
        }
        .product:hover a {
            color: #0056b3;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
        }
        .pagination a {
            display: inline-block;
            padding: 10px 15px;
            margin: 0 5px;
            border: 1px solid #ddd;
            color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .pagination a:hover {
            background-color: #f1f1f1;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .pagination a.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
        .price {
            color: red;
            font-weight: bold;
        }
    </style>
    
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
