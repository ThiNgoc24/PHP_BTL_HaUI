<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Danh mục Bài viết</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        .container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #007bff;
        }
        .message {
            text-align: center;
            color: green;
            font-weight: bold;
            margin-bottom: 10px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="submit"], input[type="radio"] {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .back-link {
        text-decoration: none;
        color: #007bff;
        transition: border-bottom-color 0.3s ease;
        border-bottom: 1px solid transparent; 
        }

        .back-link:hover {
            border-bottom-color: #007bff;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Thêm danh mục bài viết</h2>
        <?php
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo "<div class='message'>Thêm danh mục bài viết thành công</div>";
        }
        ?>
        <form action="Article_category_business.php" method="POST">
            <input type="hidden" name="action" value="add">
            <label for="name">Tên danh mục bài viết:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label>Trạng thái:</label>
            <div style="display: flex; ">
                <input type="radio" id="status1" name="status" value="1" checked>
                <label for="status1" style="margin-right: 100px;">Đang hiển thị</label>
                <input type="radio" id="status0" name="status" value="0">
                <label for="status0">Bị ẩn</label>
            </div>
            <br>
            <input type="submit" value="Thêm">
        </form>
                <div style="display: flex; justify-content: center; margin-top: 15px;">
                    <a href='Article_category_page.php' class="back-link" style="text-decoration: none; color: #007bff;">Quay lại</a>
                </div>

    </div>
</body>
</html>
