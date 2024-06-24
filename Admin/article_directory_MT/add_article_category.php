<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Danh mục Bài viết</title>
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

        form {
            margin-top: 20px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        form input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function validateForm() {
            var status = document.getElementById('status').value;
            
            // Kiểm tra xem status có phải là số không
            if (isNaN(status)) {
                alert('Trạng thái phải là một số.');
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Thêm Danh mục Bài viết mới</h2>
        <form action="Article_category_business.php" method="POST" onsubmit="return validateForm()">
            <input type="hidden" name="action" value="add">
            <label for="name">Tên danh mục bài viết:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="status">Trạng thái:</label>
            <input type="text" id="status" name="status" required>
            <br>
            <input type="submit" value="Thêm">
        </form>
    </div>
</body>
</html> -->


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
        .btn-back {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            display: block;
            text-align: center;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
        .back-link {
        text-decoration: none;
        color: #007bff;
        transition: border-bottom-color 0.3s ease; /* Thêm hiệu ứng chuyển đổi */
        border-bottom: 1px solid transparent; /* Đảm bảo có đường gạch chân mặc định */
        }

        .back-link:hover {
            border-bottom-color: #007bff; /* Đổi màu của đường gạch chân khi hover */
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Thêm Danh mục Bài viết</h2>
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
