<?php
include '../conn_db.php';

function resetAutoIncrement() {
    $conn = connectToDatabase();
    $conn->query("SET @count = 0");
    $conn->query("UPDATE article_categories SET id = @count:= @count + 1");
    $conn->query("ALTER TABLE article_categories AUTO_INCREMENT = 1");
    $conn->close();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM article_categories WHERE id='$id'";
    $result = queryDatabase($sql);

    if (!empty($result)) {
        $category = $result[0]; // Lấy thông tin danh mục cần xóa
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Xác nhận Xóa Danh mục Bài viết</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f0f0f0;
                    margin: 0;
                    padding: 20px;
                }
            
                .container {
                    max-width: 600px;
                    margin: 20px auto;
                    background-color: #fff;
                    padding: 20px;
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
            
                h2 {
                    color: #333;
                    text-align: center;
                }
            
                p {
                    text-align: center;
                }
            
                .btn-group {
                    text-align: center;
                    margin-top: 20px;
                }
            
                .btn-group button {
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    padding: 12px 20px;
                    font-size: 16px;
                    cursor: pointer;
                    border-radius: 4px;
                    margin-right: 10px;
                }
            
                .btn-group button:hover {
                    background-color: #0056b3;
                }
            </style>
            <script>
                function confirmDelete() {
                    var confirmDelete = confirm("Bạn chắc chắn muốn xóa danh mục bài viết này?\nThông tin danh mục bài viết:\nTên: <?php echo $category['name']; ?>\nTrạng thái: <?php echo $category['status']; ?>");
                    if (confirmDelete) {
                        window.location.href = 'delete_article_category.php?id=<?php echo $id; ?>&confirm=true';
                    } else {
                        // Không làm gì nếu người dùng hủy bỏ
                    }
                }
            </script>
        </head>
        <body>
            <div class="container">
                <h2>Xác nhận Xóa Danh mục Bài viết</h2>
                <p>Bạn chắc chắn muốn xóa danh mục bài viết này?</p>
                <p><strong>Thông tin danh mục:</strong></p>
                <p><strong>Tên:</strong> <?php echo $category['name']; ?></p>
                <p><strong>Trạng thái:</strong> <?php echo $category['status']; ?></p>
                <div class="btn-group">
                    <button onclick="confirmDelete()">Xóa Danh mục</button>
                    <a href="Article_category_page.php">Quay lại trang quản lý</a>
                </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "Không tìm thấy danh mục để xóa. <a href='Article_category_page.php'>Quay lại trang quản lý</a>";
    }
} else {
    echo "ID danh mục không hợp lệ. <a href='Article_category_page.php'>Quay lại trang quản lý</a>";
}

if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
    // Xử lý xóa danh mục sau khi người dùng xác nhận
    $id = $_GET['id'];
    $sql = "DELETE FROM article_categories WHERE id='$id'";
    $result = executeQuery($sql);

    if ($result) {
        resetAutoIncrement();
        echo "<script>alert('Xóa danh mục thành công.'); window.location.href = 'Article_category_page.php';</script>";
        exit;
    } else {
        echo "<script>alert('Có lỗi xảy ra khi xóa danh mục.');</script>";
    }
}
?>
