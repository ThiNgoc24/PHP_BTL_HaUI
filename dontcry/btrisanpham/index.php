<?php include '../conn_db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Management</title>
    <style>
        .body {
            font-family: Arial, sans-serif;
        }
        .tieudesp {
            text-align: center;
            color: #333;
        }

        .button-container {
            text-align: left; /* Canh phải nội dung bên trong */
            margin-bottom: 20px;
            margin-left: 6.5rem;
        }

        .btn-add, .btn-ql {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-ql {
            background-color: #007bff;
        }

        .btn-add:hover {
            background-color: #218838;
        }

        .btn-ql:hover {
            background-color: #0056b3;
        }



        .btn-add:hover {
            background-color: #218838;
        }
        .table-container {
            width: 90%;
            
            margin: 0 auto; /* Center align the table container */
            margin-left: 100px;
        }
        .product-table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            text-align: center; /* Center align text in table */
        }

        .product-table th, .product-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center; /* Center align text in cells */
        }

        .product-table th {
            background-color: #007bff;
            color: #fff;
        }

        .product-table td img {
            max-width: 100px;
            height: auto;
            display: block;
            margin: 0 auto; /* Center align image */
        }

        .product-table td a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .product-table td a:hover {
            color: #0056b3;
        }

        .product-table td {
            word-wrap: break-word; /* Allow product names to wrap */
            max-width: 200px; /* Adjust as needed */
        }

        .product-table th, .product-table td {
            vertical-align: middle; /* Center align content vertically */
        }

        .product-table td:last-child {
            white-space: nowrap; /* Prevent wrapping for action column */
        }

        .product-table {
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
</head>
<body style="margin: 20px;">
    <h1 class="tieudesp">Bảo trì sản phẩm</h1>
    <div class="button-container">
        <a href="form_add.php" class="btn-add">Thêm mới</a>
        <a href="index.php" class="btn-ql">Quay lại</a>
    </div>
    <div class="table-container">
        <table class="product-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá tiền</th>
                    <th>Ảnh minh họa</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, name, price, image FROM products WHERE status = 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . number_format($row['price'], 0) . " VND</td>";
                        echo "<td><img src='../images/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'></td>";
                        echo "<td>";
                        echo "<a href='form_edit.php?id=" . htmlspecialchars($row['id']) . "'>Cập nhật</a> | ";
                        echo "<a href='xuly.php?id=" . htmlspecialchars($row['id']) . "'>Xóa</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No products found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php $conn->close(); ?>
