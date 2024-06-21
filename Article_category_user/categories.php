<?php
include '../conn_db.php'; // Kết nối cơ sở dữ liệu

$sql = "SELECT id, name FROM article_categories WHERE status = 1";
$categories = queryDatabase($sql); // Sử dụng hàm queryDatabase để lấy dữ liệu

?>

<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <h1>Select a Category</h1>
    <ul>
        <?php
        if (!empty($categories)) {
            foreach ($categories as $row) {
                echo "<li><a href='articles.php?category_id=" . $row['id'] . "'>" . $row['name'] . "</a></li>";
            }
        } else {
            echo "No categories found.";
        }
        ?>
    </ul>
</body>
</html>
