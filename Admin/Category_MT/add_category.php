<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Danh mục Sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 70%;
            margin: 0 auto;
            overflow: hidden;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #000;
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
    <?php include "../Admin_dashboard/Header_Sidebar.php"?>
    <div class="container">
        <h1>Thêm danh mục sản phẩm</h1>
        <?php
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo "<div class='message'>Thêm danh mục sản phẩm thành công</div>";
        }
        ?>
        <form action="Category_business.php" method="POST">
            <input type="hidden" name="action" value="add">
            <label for="name">Tên danh mục sản phẩm:</label>
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
                    <a href='Category_page.php' class="back-link" style="text-decoration: none; color: #007bff;">Quay lại</a>
                </div>
    </div>
    <?php include "../Admin_dashboard/Footer.php"?>
</body>
</html>
