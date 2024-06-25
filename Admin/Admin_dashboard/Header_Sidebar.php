<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        /* CSS cho phần header và footer */
        header {
            margin-top: -10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            clear: both;
        }
       
        .header_img img {
            width: 100%;
            height: 110px;
            margin-top: -10px;
        }
        .header-links {
            display: flex;
            align-items: center;
            height: 60px;
        }
        .header-links h2 {
            margin-left: 25px;
        }
        .header-links .header-links2 {
            display: flex;
            align-items: center;
            margin-left: 300px;
        }
        .header-links .header-links2 a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            margin-left: 10px;
            border-radius: 3px;
            font-size: 20px;
            transition: background-color 0.3s;
            margin-left: 380px;
        }

        .header-links .header-links2 a:hover {
            background-color: #297fb8;
        }
        .header-links .header-links2 a i {
            font-weight: bold;
        }
        .header-links .header-links2 form {
            height: 30px;
            width: 200px;
            display: flex;
            font-family: Arial;
        }
        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #f0f0f0;
            float: left;
            padding: 20px;
            border-right: 1px solid #ccc; /* Đường viền phân tách sidebar và phần nội dung */
            display: flex; /* Sử dụng flex để sidebar tự động co dãn theo chiều cao của nội dung */
            flex-direction: column; 
        }

        .sidebar h2 {
            margin-bottom: 10px;
            margin-left: 15px;
            color: black; /* Màu chữ cho tiêu đề */
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            display: block;
            padding: 8px 12px;
            text-decoration: none;
            color: #666; /* Màu chữ cho các mục menu */
            transition: background-color 0.3s, color 0.3s;
            font-weight: bold;
        }

        .sidebar ul li a:hover {
            background-color: #3498db; /* Màu nền khi hover */
            color: #fff; /* Màu chữ khi hover */
            border-radius: 5px; /* Bo góc cho mục menu khi hover */
        }

        #searchInput {
            padding: 10px 15px; /* Để lại không gian xung quanh nội dung bên trong ô tìm kiếm */
            border: 1px solid #ccc; /* Đường viền xung quanh ô tìm kiếm */
            border-radius: 20px; /* Để bo tròn các góc của ô tìm kiếm */
            width: 300px; /* Độ rộng của ô tìm kiếm */
            outline: none; /* Xóa đường viền khi ô tìm kiếm được focus */
            transition: width 0.3s; /* Hiệu ứng chuyển đổi khi thay đổi độ rộng */
        }

        #searchInput:focus {
            width: 400px; /* Khi ô tìm kiếm được focus, mở rộng độ rộng lên 400px */
        }
        #searchButton {
            padding: 0px 15px;
            border: 1px solid #ccc;
            border-radius: 20px;
            background-color: #f0f0f0;
            font-family: 'Times New Roman', Times, serif;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            text-align: center; /* Căn giữa văn bản trong nút */
            display: inline-block; /* Để nút chỉ chiếm chiều rộng cần thiết */
            width: auto; /* Độ rộng tự động theo nội dung */
        }

        #searchButton:hover {
            background-color: #ccc; /* Màu nền thay đổi khi hover */
            color: #fff; /* Màu chữ thay đổi khi hover */
        }

        .dashboard_link a{
            display: inline-block;
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <div class="header_img">
            <img src="../../images/header1.jpg" alt="">
        </div>
        <div class="header-links">
            <h2 class="dashboard_link"><a href="/PHP_BTL_HaUI/Admin/Admin_dashboard/Dashboard_page.php">TRANG QUẢN TRỊ</a></h2>
            <!-- <div class="header-links2">
                <form action="#" method="GET">
                    <input style='margin-right : 20px;' type="text" id="searchInput" name="keyword" placeholder="Tìm kiếm...">
                    <button type="submit" id="searchButton" >Tìm</button>
                </form>
                <a href="#"><i class="fa-solid fa-user" style='margin-right : 10px'></i> Admin</a>
            </div> -->
        </div>
    </header>

    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="../Category_MT/Category_page.php">Bảo trì danh mục sản phẩm</a></li>
            <li><a href="../article_directory_MT/Article_category_page.php">Bảo trì danh mục bài viết</a></li>
            <li><a href="../Manage_Authors/list_page.php">Bảo trì tác giả</a></li>
            <li><a href="#">Bảo trì sản phẩm</a></li>
            <li><a href="../MANAGE_ARTICLES/Manage_articles_page.php">Bảo trì bài viết</a></li>
            <li><a href="../Manage_orders/order_categories.php">Quản lý đơn hàng</a></li>
            <li><a href="../Manage_Members/index.php">Quản lý tài khoản</a></li>
        </ul>
    </div>
</body>
</html>