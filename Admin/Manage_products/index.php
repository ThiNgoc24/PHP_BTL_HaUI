<?php include '../conn_db2.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }
        .tieudesp {
            text-align: center;
            color: #333;
        }

        .button-container {
            margin-bottom: 20px;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            table-layout: auto;
        }

        .table-container{
            max-height: 80vh;
            overflow-y: auto;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #fff;
        }


        .product-table td img {
            max-width: 100px;
            height: auto;
            display: block;
            margin: 0 auto; 
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

        .action-links {
            white-space: nowrap;
            text-align: center;
            width: 140px;
        }

        .action-links a {
            display: inline-block;
            margin-right: 5px;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
        }

        .action-links .edit {
            background-color: #28a745;
            color: #fff;
        }

        .action-links .edit:hover {
            background-color: #218838;
        }

        .action-links .delete {
            background-color: #d9534f;
            color: #fff;
        }

        .action-links .delete:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body style="margin: 20px;">
    <?php include "../Admin_dashboard/Header_Sidebar.php"?>
    <div class="container">
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
                            echo "<td><img src='../../images/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'></td>";
                            echo "<td class='action-links'>";
                            echo "<a class='edit' href='form_edit.php?id=" . htmlspecialchars($row['id']) . "'>Cập nhật</a>";
                            echo "<a class='delete' href='xuly.php?id=" . htmlspecialchars($row['id']) . "'>Xóa</a>";
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
    </div>
    <?php include "../Admin_dashboard/Footer.php"?>
</body>
</html>

<?php $conn->close(); ?>
