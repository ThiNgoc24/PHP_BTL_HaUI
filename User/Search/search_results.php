<?php
include 'conn_db2.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';

// Define variables for pagination
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$results_per_page = 10; // Number of results per page

// Calculate the total number of results
$sql_total = "SELECT COUNT(*) AS total FROM products WHERE status = 1";
if (!empty($search)) {
    $sql_total .= " AND name LIKE '%" . $conn->real_escape_string($search) . "%'";
}
$result_total = $conn->query($sql_total);
$total_rows = $result_total->fetch_assoc()['total'];

$total_pages = ceil($total_rows / $results_per_page);

// Calculate the starting row for the query
$start_from = ($page - 1) * $results_per_page;

// Fetch the results for the current page
$sql = "SELECT id, name, price, image FROM products WHERE status = 1";
if (!empty($search)) {
    $sql .= " AND name LIKE '%" . $conn->real_escape_string($search) . "%'";
}
$sql .= " LIMIT $start_from, $results_per_page";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kết quả tìm kiếm</title>
    <style>
        .btn-home {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            margin-left: 7rem;
        }

        .btn-home:hover {
            background-color: #0056b3;
        }

        .product-list-search {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 200px;
            padding: 15px;
            text-align: center;
        }

        .product-item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .product-info {
            margin-top: 10px;
        }

        .product-info h2 {
            font-size: 18px;
            margin: 10px 0;
        }

        .product-info p {
            margin: 5px 0;
        }

        .btn-view {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .btn-view:hover {
            background-color: #0056b3;
        }

        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .pagination a {
            display: inline-block;
            padding: 10px 15px;
            margin: 0 5px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .pagination a.active {
            background-color: #0056b3;
        }

        .pagination a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body style="padding: 20px;">
    <h1 style="text-align: center; margin-bottom: 20px; color: black;">Kết quả tìm kiếm</h1>
    <a href="../Home/Home_page.php" class="btn-home">Home</a>
    <div class="product-list-search">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (stripos($row['name'], $search) !== false) {
                    echo "<div class='product-item'>";
                    echo "<img src='../../images/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'>";
                    echo "<div class='product-info'>";
                    echo "<h2>" . htmlspecialchars($row['name']) . "</h2>";
                    echo "<p style='color: red'><strong>" . number_format($row['price'], 0) . " VND</strong></p>";
                    echo "<a href='product_detail.php?search_query={$search}&&id=" . htmlspecialchars($row['id']) . "' class='btn-view'>Chi tiết</a>";
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
            <a href="?search=<?php echo htmlspecialchars($search); ?>&page=<?php echo $page - 1; ?>" class="btn-prev">Trước</a>
        <?php endif; ?>

        <?php for($i = 1; $i <= $total_pages; $i++): ?>
            <a href="?search=<?php echo htmlspecialchars($search); ?>&page=<?php echo $i; ?>" class="btn-page <?php if($i == $page) echo 'active'; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>

        <?php if($page < $total_pages): ?>
            <a href="?search=<?php echo htmlspecialchars($search); ?>&page=<?php echo $page + 1; ?>" class="btn-next">Sau</a>
        <?php endif; ?>
    </div>
</body>
</html>
<?php $conn->close(); ?>
