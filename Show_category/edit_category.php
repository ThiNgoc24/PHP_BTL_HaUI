<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa Danh mục</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            margin: 6% 0;
            /* align-items: center; */
            height: 50vh;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Sửa Danh mục</h2>
        <?php
        include '../conn_db.php';

        $id = $_GET['id'];
        $sql = "SELECT * FROM categories WHERE id='$id'";
        $result = queryDatabase($sql);

        if (!empty($result)) {
            $row = $result[0];
            echo "<form action='Show_category_function.php' method='POST'>
                    <input type='hidden' name='action' value='edit'>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <label for='name'>Tên danh mục:</label>
                    <input type='text' id='name' name='name' value='".$row['name']."' required>
                    <label for='status'>Trạng thái:</label>
                    <input type='text' id='status' name='status' value='".$row['status']."' required>
                    <input type='submit' value='Cập nhật'>
                  </form>";
        } else {
            echo "Không tìm thấy danh mục. <a href='Show_category_page.php'>Quay lại trang quản lý</a>";
        }
        ?>
    </div>
</body>
</html>
