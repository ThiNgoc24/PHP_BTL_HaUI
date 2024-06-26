

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tìm kiếm sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 0;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        .product li {
            display: inline-block;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            margin: 5px;
        }
        .product li:last-child {
            border-bottom: none;
        }
        .btn-home {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .btn-home:hover {
            background-color: #0056b3;
        }

        .product-list-search {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 200px;
            padding: 15px;
            text-align: center;
        }

        .product-item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .product-info {
            margin-top: 10px;
        }

        .product-info h2 {
            font-size: 18px;
            margin: 10px 0;
        }

        .product-info p {
            margin: 5px 0;
        }

        .btn-view {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .btn-view:hover {
            background-color: #0056b3;
        }

        .product-name {
            font-size: 18px;
            font-weight: bold;
        }
        .product-price {
            color: #007bff;
        }
    </style>
</head>
<body>
    <?php include "../Home/Header.php";?>
    <div class="container">
        <h2>Kết quả tìm kiếm sản phẩm:</h2>
        
        <!-- <a href="../Home/Home_page.php" class="btn-home">Home</a> -->
        <?php
        include 'conn_db2.php';
        ini_set('display_errors', 0);
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        // Lấy từ khóa tìm kiếm từ URL
        $search_query = $_GET['search_query'];

        // Escape các ký tự đặc biệt để tránh SQL injection
        $search_query = mysqli_real_escape_string($conn, $search_query);

        // Truy vấn tìm kiếm sản phẩm
        $sql = "SELECT * FROM products WHERE name LIKE '%$search_query%'";
        $result = $conn->query($sql);

        // Kiểm tra và hiển thị kết quả
        if ($result->num_rows > 0) {
            echo "<ul class='product'>";
            while($row = $result->fetch_assoc()) {
                echo "<li>";
                    echo "<div class='product-item'>";
                    echo "<img src='../../images/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'>";
                    echo "<div class='product-info'>";
                    echo "<h2>" . htmlspecialchars($row['name']) . "</h2>";
                    echo "<p style='color: red'><strong>" . number_format($row['price'], 0) . " VND</strong></p>";
                    echo "<a href='product_detail.php?id=" . htmlspecialchars($row['id']) . "' class='btn-view'>Chi tiết</a>";
                    echo "</div>";
                    echo "</div>";
            }
            echo "</ul>";
        } else {
            echo "<p>Không tìm thấy sản phẩm nào phù hợp.</p>";
        }

        // Đóng kết nối MySQL
        $conn->close();
        ?>
    </div>
</body>
</html>
