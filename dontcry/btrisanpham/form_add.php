<?php include '../conn_db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="../css/styles.css">
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
