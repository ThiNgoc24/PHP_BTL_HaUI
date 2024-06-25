<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loại đơn hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .main {
            width: 80%;
            /* margin-left: 220px; */
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .list_cate {
            display: flex;
            flex-direction: column; /* Thay đổi thành column để hiển thị theo chiều dọc */
            align-items: center;
            width: 100%;
            gap: 15px;
        }

        .list_cate a {
            display: block;
            padding: 15px 25px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: 200px; /* Điều chỉnh chiều rộng của nút */
            text-align: center;
        }

        .list_cate a:hover {
            background-color: #dc3545;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Media queries cho màn hình nhỏ hơn */
        @media (max-width: 768px) {
            .list_cate a {
                width: 90%; /* Điều chỉnh chiều rộng nút cho màn hình nhỏ */
            }
        }
</style>
</head>
<body>
    <?php include "../Admin_dashboard/Header_Sidebar.php"?>
    <div class="main">
        <h1>Loại đơn hàng</h1>
        <div class="list_cate">
            <a href="list_orders.php?orderType=1">Chưa xử lý</a><br>
            <a href="list_orders.php?orderType=2">Đang xử lý</a><br>
            <a href="list_orders.php?orderType=3">Đã xử lý</a><br>
            <a href="list_orders.php?orderType=4">Huỷ</a>
        </div>
    </div>
    <?php include "../Admin_dashboard/Footer.php"?>
</body>
</html>
