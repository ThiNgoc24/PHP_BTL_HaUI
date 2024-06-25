<?php include '../conn_db2.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Management</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
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
