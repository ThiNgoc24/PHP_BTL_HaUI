<?php
include '../conn_db2.php';

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
    <link rel="stylesheet" href="../css/styles.css"> 
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
