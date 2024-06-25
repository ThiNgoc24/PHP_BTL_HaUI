<?php include '../conn_db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <style>
        .body {
            font-family: Arial, sans-serif;
        }
        .add-product-form {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .add-product-form .gop {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        .add-product-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .add-product-form input[type="text"],
        .add-product-form input[type="number"],
        .add-product-form select,
        .add-product-form textarea,
        .add-product-form input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .add-product-form textarea {
            height: 100px;
        }

        .add-product-form .btn-submit {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-product-form .btn-submit:hover {
            background-color: #007bff;
        }

        .add-product-form input[type="file"] {
            padding: 0;
            border: none;
        }
        .add-product-form .button-ql .btn-ql {
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

        .add-product-form .button-ql .btn-ql:hover {
            background-color: #218838;
        }
    </style>
</head>
<body style="margin: 20px; background-color: #f5f5f5;">
    <h1 style="text-align: center; color: #333;">Thêm sản phẩm</h1>
    <form action="xuly.php" method="post" enctype="multipart/form-data" class="add-product-form">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" required><br>
        <label for="price">Giá tiền:</label>
        <input type="number" name="price" required><br>
        <label for="author_id">Tác giả:</label>
        <select name="author_id">
            <?php
            $authors_sql = "SELECT id, name FROM authors WHERE status = 1";
            $authors_result = $conn->query($authors_sql);
            while ($author = $authors_result->fetch_assoc()) {
                echo "<option value='" . htmlspecialchars($author['id']) . "'>" . htmlspecialchars($author['name']) . "</option>";
            }
            ?>
        </select><br>
        <label for="cat_id">Danh mục:</label>
        <select name="cat_id">
            <?php
            $categories_sql = "SELECT id, name FROM categories WHERE status = 1";
            $categories_result = $conn->query($categories_sql);
            while ($category = $categories_result->fetch_assoc()) {
                echo "<option value='" . htmlspecialchars($category['id']) . "'>" . htmlspecialchars($category['name']) . "</option>";
            }
            ?>
        </select><br>
        <label for="image">Hình ảnh:</label>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>
        <label for="description">Mô tả sản phẩm:</label>
        <textarea name="description" required></textarea><br>
        <label for="product_quantity">Số lượng:</label>
        <input type="number" name="product_quantity" value="10"><br>
        <div class="gop">
            <input type="submit" value="Thêm mới" class="btn-submit">
            <div class="button-ql">
                <a href="index.php" class="btn-ql">Quay lại</a>
            </div>
        </div>

    </form>
</body>
</html>

<?php $conn->close(); ?>
