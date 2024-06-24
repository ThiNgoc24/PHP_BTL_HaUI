<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tìm Kiếm Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .product {
            border: 1px solid #ddd;
            margin: 10px;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .product img {
            max-width: 250px;
            height: auto;
            border-radius: 5px;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tìm Kiếm Sản Phẩm</h1>
        <form action="TimKiem_page.php" method="get">
            <input type="text" name="name" placeholder="Nhập tên sản phẩm">
            <input type="submit" value="Tìm Kiếm">
        </form>
        <?php
        if (isset($_GET['name'])) {
            require_once 'TimKiem_functions.php';
            $products = getProductsByName($_GET['name']);
            if (count($products) > 0) {
                foreach ($products as $product) {
                    echo "<div class='product'>";
                    echo "<h2>{$product['name']}</h2>";
                    echo "<img src='../images/{$product['image']}' alt='{$product['name']}'>";
                    echo "<p>Giá: {$product['price']} VND</p>";
                    echo "<p>{$product['description']}</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Không tìm thấy sản phẩm nào</p>";
            }
        }
        ?>
    </div>
</body>
</html>

