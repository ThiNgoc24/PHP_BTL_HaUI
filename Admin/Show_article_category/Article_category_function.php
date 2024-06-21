<?php
include '../../conn_db.php';

function resetAutoIncrement() {
    $conn = connectToDatabase();
    $conn->query("SET @count = 0");
    $conn->query("UPDATE article_categories SET id = @count:= @count + 1");
    $conn->query("ALTER TABLE article_categories AUTO_INCREMENT = 1");
    $conn->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['action']) || !isset($_POST['name']) || !isset($_POST['status'])) {
        echo "Dữ liệu không hợp lệ. <a href='Article_category_page.php'>Quay lại trang quản lý</a>";
        exit;
    }

    $action = $_POST['action'];
    $name = $_POST['name'];
    $status = $_POST['status'];

    if ($action == 'add') {
        $sql = "INSERT INTO article_categories (name, status) VALUES ('$name', '$status')";
        $result = executeQuery($sql);

        if ($result) {
            resetAutoIncrement();
            echo "Thêm danh mục bài viết thành công và thiết lập lại ID. <a href='Article_category_page.php'>Quay lại trang quản lý</a>";
        } else {
            echo "Có lỗi xảy ra khi thêm danh mục bài viết.";
        }
    } elseif ($action == 'edit') {
        if (!isset($_POST['id'])) {
            echo "Dữ liệu không hợp lệ. <a href='Article_category_page.php'>Quay lại trang quản lý</a>";
            exit;
        }

        $id = $_POST['id'];
        $sql = "UPDATE article_categories SET name='$name', status='$status' WHERE id='$id'";
        $result = executeQuery($sql);

        if ($result) {
            echo "Cập nhật danh mục bài viết thành công. <a href='Article_category_page.php'>Quay lại trang quản lý</a>";
        } else {
            echo "Có lỗi xảy ra khi cập nhật danh mục bài viết.";
        }
    } else {
        echo "Hành động không hợp lệ. <a href='Article_category_page.php'>Quay lại trang quản lý</a>";
    }
} else {
    echo "Yêu cầu không hợp lệ. <a href='Article_category_page.php'>Quay lại trang quản lý</a>";
}
?>
