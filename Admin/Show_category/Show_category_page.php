<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý Danh mục Sản phẩm</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Quản lý Danh mục Sản phẩm</h2>
    <a href="add_category.php">Thêm mới danh mục</a>
    <br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php
        // Kết nối đến cơ sở dữ liệu
        include '../../conn_db.php';

        // Truy vấn danh sách danh mục
        $sql = "SELECT id, name, status FROM categories";
        $result = queryDatabase($sql); // Sử dụng hàm queryDatabase từ conn_db.php

        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["status"]."</td>
                        <td>
                            <a href='edit_category.php?id=".$row["id"]."'>Edit</a> | 
                            <a href='delete_category.php?id=".$row["id"]."'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }
        ?>
    </table>
</body>
</html>
