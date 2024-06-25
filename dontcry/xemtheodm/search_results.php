<?php
include '../conn_db2.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT id, name, price, image FROM products WHERE status = 1";

if (!empty($search)) {
    $sql .= " AND name LIKE '%" . $conn->real_escape_string($search) . "%'";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kết quả tìm kiếm</title>
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body style="padding: 20px;">
    <h1 style="text-align: center; margin-bottom: 20px; color: black;">Kết quả tìm kiếm</h1>
    <a href="../home/home.php" class="btn-home">Home</a>
    <div class="product-list-search">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (stripos($row['name'], $search) !== false) {
                    echo "<div class='product-item'>";
                    echo "<img src='../images/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'>";
                    echo "<div class='product-info'>";
                    echo "<h2>" . htmlspecialchars($row['name']) . "</h2>";
                    echo "<p style='color: red'><strong>" . number_format($row['price'], 0) . " VND</strong></p>";
                    echo "<a href='product_detail.php?id=" . htmlspecialchars($row['id']) . "' class='btn-view'>Chi tiết</a>";
                    echo "</div>";
                    echo "</div>";
                }
            }
        } else {
            echo "<p>Không tìm thấy sp.</p>";
        }
        ?>
    </div>
    <div class="pagination">
        <?php if($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>" class="btn-prev">Trước</a>
        <?php endif; ?>

        <?php for($i = 1; $i <= $total_pages; $i++): ?>
            <a href="?page=<?php echo $i; ?>" class="btn-page <?php if($i == $page) echo 'active'; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>

        <?php if($page < $total_pages): ?>
            <a href="?page=<?php echo $page + 1; ?>" class="btn-next">Sau</a>
        <?php endif; ?>
    </div>
</body>
</html>
<?php $conn->close(); ?>
