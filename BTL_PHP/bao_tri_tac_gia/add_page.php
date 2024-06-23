<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tác giả mới</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form div {
            margin-bottom: 15px;
        }
        form input[type="text"], form input[type="file"], form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }
        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #333;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thêm tác giả mới</h2>
        <form action="BTriTacGia_functions.php" method="POST" enctype="multipart/form-data">
            <div>
                <input type="text" name="name" placeholder="Tên tác giả" required>
            </div>
            <div>
                <input type="file" name="image" required>
            </div>
            <div>
                <select name="status" required>
                    <option value="1">Đang hoạt động</option>
                    <option value="0">Không hoạt động</option>
                </select>
            </div>
            <div>
                <input type="submit" name="add" value="Thêm mới">
            </div>
        </form>
        <a class="back-link" href="list_page.php">Quay lại danh sách</a>
    </div>
    <script>
        document.querySelector('form').addEventListener('submit', function (e) {
            let nameField = document.querySelector('input[name="name"]');
            nameField.value = nameField.value.replace(/\b\w/g, function (l) { return l.toUpperCase(); });
        });
    </script>
</body>
</html>
