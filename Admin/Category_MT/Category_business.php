<?php
include '../../conn_db.php';
include 'Category_data.php';

function resetAutoIncrement() {
    $conn = connectToDatabase();
    $conn->query("SET @count = 0");
    $conn->query("UPDATE categories SET id = @count:= @count + 1");
    $conn->query("ALTER TABLE categories AUTO_INCREMENT = 1");
    $conn->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_GET['action'])) {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        $name = $_POST['name'];
        $status = $_POST['status'];
    } else {
        $action = $_GET['action'];
        $id = $_GET['id'];
    }

    if ($action == 'add') {
        addCategory($name, $status);
        resetAutoIncrement();
        echo "Thêm danh mục sản phẩm thành công. <a href='Category_page.php'>Quay lại trang quản lý</a>";
    } elseif ($action == 'edit') {
        $id = $_POST['id'];
        editCategory($id, $name, $status);
        echo "Cập nhật danh mục sản phẩm thành công. <a href='Category_page.php'>Quay lại trang quản lý</a>";
    } elseif ($action == 'delete') {
        deleteCategory($id);
        resetAutoIncrement();
        echo "Xóa danh mục sản phẩm thành công. <a href='Category_page.php'>Quay lại trang quản lý</a>";
    } else {
        echo "Hành động không hợp lệ. <a href='Category_page.php'>Quay lại trang quản lý</a>";
    }
} else {
    echo "Yêu cầu không hợp lệ. <a href='Category_page.php'>Quay lại trang quản lý</a>";
}
?>
