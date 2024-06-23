<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa tác giả</title>
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
        form input[type="text"], form select, form input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Để input và select có cùng chiều rộng */
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
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-top: 10px;
        }
        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #333;
            text-decoration: none;
        }
        .back-link:hover {
            color: #e60000;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php 
    require 'C:\xampp\htdocs\BTL_PHP\conn_db.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $getdt = "SELECT * FROM authors WHERE id='$id'";
        $result = queryDatabase($getdt);

        if (count($result) > 0) {
            $row = $result[0]; // Lấy dữ liệu từ dòng đầu tiên
        } else {
            die("Không tìm thấy tác giả với ID: $id");
        }
    }
    ?>
    <div class="container">
        <h2>Chỉnh sửa tác giả</h2>
        <form action="BTriTacGia_functions.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div>
                <input type="text" value="<?php echo $row['name']; ?>" name="name" placeholder="Tên tác giả" required>
            </div>
            <div>
                <input type="file" name="image" placeholder="Ảnh">
                <br>
                <?php if (!empty($row['image'])): ?>
                    <img src="../images/authors/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" width="100px" height="100px" class="thumbnail">
                <?php endif; ?>
            </div>
            <div>
                <select name="status" required>
                    <option value="1" <?php if ($row['status'] == 1) echo 'selected'; ?>>Đang hoạt động</option>
                    <option value="0" <?php if ($row['status'] == 0) echo 'selected'; ?>>Không hoạt động</option>
                </select>
            </div>
            <div>
                <input type="submit" name="edit" value="Cập nhật">
            </div>
        </form>
        <a class="back-link" href="list_page.php">Huỷ bỏ</a>
    </div>
</body>
</html>
