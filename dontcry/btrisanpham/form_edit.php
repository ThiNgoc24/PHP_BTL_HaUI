<?php
include '../conn_db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
} else {
    echo "Product ID is missing.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <style>
        .body {
            font-family: Arial, sans-serif;
        }
        .edit-product-form {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .edit-product-form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        .edit-product-form input[type="text"],
        .edit-product-form input[type="number"],
        .edit-product-form textarea,
        .edit-product-form select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .edit-product-form textarea {
            height: 100px;
        }

        .gop2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .btn-update {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-ql {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-update:hover {
            background-color: #0056b3;
        }

        .btn-ql:hover {
            background-color: #218838;
        }

        .edit-product-form input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .edit-product-form input[type="submit"]:hover {
            background-color: #0056b3;
        }


    </style>
</head>
<body style="margin: 20px; background-color: #f5f5f5;">
    <h1 style="text-align: center; color: #333;">Cập nhật sản phẩm</h1>
    <form action="xuly.php" method="post" enctype="multipart/form-data" class="edit-product-form">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required><br>
        <label for="price">Giá tiền:</label>
        <input type="number" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required><br>
        <label for="author_id">Tác giả:</label>
        <select name="author_id">
            <?php
            $authors_sql = "SELECT id, name FROM authors WHERE status = 1";
            $authors_result = $conn->query($authors_sql);
            while ($author = $authors_result->fetch_assoc()) {
                $selected = $product['author_id'] == $author['id'] ? 'selected' : '';
                echo "<option value='" . htmlspecialchars($author['id']) . "' $selected>" . htmlspecialchars($author['name']) . "</option>";
            }
            ?>
        </select><br>
        <label for="cat_id">Danh mục sách:</label>
        <select name="cat_id">
            <?php
            $categories_sql = "SELECT id, name FROM categories WHERE status = 1";
            $categories_result = $conn->query($categories_sql);
            while ($category = $categories_result->fetch_assoc()) {
                $selected = $product['cat_id'] == $category['id'] ? 'selected' : '';
                echo "<option value='" . htmlspecialchars($category['id']) . "' $selected>" . htmlspecialchars($category['name']) . "</option>";
            }
            ?>
        </select><br>
        <label for="image">Hình ảnh:</label>
        <input type="file" id="image" name="image" accept="image/*"><br><br>
        <label for="description">Mô tả:</label>
        <textarea name="description" required><?php echo htmlspecialchars($product['description']); ?></textarea><br>
        <label for="product_quantity">Số lượng:</label>
        <input type="number" name="product_quantity" value="<?php echo htmlspecialchars($product['product_quantity']); ?>"><br>
        
        <div class="gop2">
            <input type="submit" value="Cập nhật" class="btn-update">
            <a href="index.php" class="btn-ql">Quay lại</a>
        </div>
    </form>
</body>
</html>

<?php $conn->close(); ?>
