<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý Danh mục Sản phẩm</title>
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

        h1 {
            text-align: center;
            color: #333;
        }

        .table_content{
            max-height: 80vh;
            overflow-y: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            margin: 0 4px;
        }

        .btn-add {
            background-color: #007bff;
            color: white;
            margin-bottom: 10px;
        }

        .btn-add:hover {
            background-color: #0069d9;
        }

        .btn-edit {
            background-color: #4CAF50;
            color: white;
        }

        .btn-delete {
            background-color: #f44336;
            color: white;
        }

        .btn-edit:hover {
            background-color: #45a049;
        }

        .btn-delete:hover {
            background-color: #d32f2f;
        }

        .btn a {
            color: white;
            text-decoration: none;
        }

        .btn a:hover {
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="../Show_category/style.css">
</head>
<body>
    <?php include "../Admin_dashboard/Header_Sidebar.php"?>
    <div class="container">
        <h1>Quản lý danh mục sản phẩm</h1>
        <a href="add_category.php" class="btn btn-add">Thêm mới</a>
        <br><br>
        <div class="table_content">
            <table>
                <tr>
                    <th>Mã</th>
                    <th>Tên danh mục</th>
                    <th>Trạng thái</th>
                    <th></th>
                </tr>
                <?php
                include '../../conn_db.php';
                include 'Category_data.php';

                $result = getAllCategories();

                if (!empty($result)) {
                    foreach ($result as $row) {
                        // Chuyển đổi giá trị status từ 0, 1 sang "Bị ẩn" và "Đang hiển thị"
                        $statusText = $row["status"] == 1 ? "Đang hiển thị" : "Bị ẩn";
                        echo "<tr>
                                <td>".$row["id"]."</td>
                                <td>".$row["name"]."</td>
                                <td>".$statusText."</td>
                                <td>
                                    <a href='edit_category.php?id=".$row["id"]."' class='btn btn-edit'>Sửa</a>
                                    <a href='delete_category.php?id=".$row["id"]."' class='btn btn-delete'>Xóa</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>0 results</td></tr>";
                }
                ?>
            </table>
        </div>
        
    </div>
    <?php include "../Admin_dashboard/Footer.php"?>
</body>
</html>
