<?php
include 'categories_bll.php';
$categories = getCategories();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-bottom: 10px;
        }
        li a {
            display: block;
            padding: 10px;
            text-decoration: none;
            background-color: #f0f0f0;
            color: #333;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        li a:hover {
            background-color: #e0e0e0;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Danh mục bài viết</h1>
        <ul>
            <?php
            if (!empty($categories)) {
                foreach ($categories as $row) {
                    echo "<li><a href='articles.php?category_id=" . $row['id'] . "'>" . $row['name'] . "</a></li>";
                }
            } else {
                echo "<li>Không có danh mục nào.</li>";
            }
            ?>
        </ul>
        <div class="footer">
        </div>
    </div>
</body>
</html>
