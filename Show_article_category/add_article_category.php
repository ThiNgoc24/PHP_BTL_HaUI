<!DOCTYPE html>
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
        <form action="Article_category_function.php" method="POST" onsubmit="return validateForm()">
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
</html>
