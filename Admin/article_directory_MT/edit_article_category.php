<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa Danh mục Bài viết</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            margin: 4% 0;
            height: auto;
        }
        .container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            height: auto;
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
        .error {
            text-align: center;
            color: red;
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
        input[type="text"], input[type="submit"] {
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
        a {
            color: #007bff;
            text-decoration: none;
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn-back {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sửa Danh mục Bài viết</h2>
        <?php
        include '../../conn_db.php';
        include 'Article_category_data.php';

        $id = $_GET['id'];
        $result = getCategoryById($id);

        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo "<div class='message'>Bạn đã cập nhật thông tin thành công</div>";
        } elseif (isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<div class='error'>Cập nhật thất bại. Vui lòng thử lại.</div>";
        }

        if (!empty($result)) {
            $row = $result[0];
            echo "<form action='Article_category_business.php' method='POST'>
            <input type='hidden' name='action' value='edit'>
            <input type='hidden' name='id' value='".$row['id']."'>
            <label for='name'>Tên danh mục:</label>
            <input type='text' id='name' name='name' value='".$row['name']."' required>
            <label for='status'>Trạng thái:</label>
            <div style='display: flex; align-items: center;'>
                <input type='radio' id='status1' name='status' value='1' ".($row['status'] == '1' ? 'checked' : '')." required>
                <label for='status1' style='margin-right: 100px;'>Đang hiển thị</label>
                <input type='radio' id='status0' name='status' value='0' ".($row['status'] == '0' ? 'checked' : '')." required>
                <label for='status0'>Bị ẩn</label>
            </div>
            <br>
            <input type='submit' value='Cập nhật'>
            <a href='Article_category_page.php'>Quay lại</a>
            </form>";


        } else {
            echo "Không tìm thấy danh mục. <a href='Article_category_page.php'>Quay lại</a>";
        }
        ?>
    </div>
</body>
</html>
