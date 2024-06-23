<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bảo trì bài viết</title>
    <!-- Thư viện ApexCharts để vẽ biểu đồ -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
      
        /* CSS cho phần header và footer */
        header {
            margin-top:-15px;
            background-color:#007bff ;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            clear: both;
            /* position: fixed; 
            top:15px; */
        }
        footer {
            margin-top:30px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            clear: both;
            /* position: fixed; 
            bottom:0px; */
        }
        .header_img img{
            width: 100%;
            height:110px;
            margin-top:-10px;
        }
        .header-links {
            display: flex;
            align-items: center;
            height:60px;
        }
        .header-links h2{
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
            margin-left: 380px ;
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
            min-height: 170vh; /* Chiều cao tối thiểu là 100% chiều cao của viewport */
            background-color: #f0f0f0;
            float: left;
            padding: 20px;
            border-right: 1px solid #ccc;
            display: flex; /* Sử dụng flex để sidebar tự động co dãn theo chiều cao của nội dung */
            flex-direction: column; /* Chỉ định layout dạng cột cho sidebar */
            /* position: fixed; /* Giữ sidebar ở vị trí cố định */
            /* top:175px; */
        }
        

        .sidebar h2{
            margin-bottom: 10px;
            margin-left: 15px ;
            color: #333; /* Màu chữ cho tiêu đề */
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
            font-weight : bold;
            
        }

        .sidebar ul li a:hover {
            background-color: #3498db; /* Màu nền khi hover */
            color: #fff; /* Màu chữ khi hover */
            border-radius: 5px; /* Bo góc cho mục menu khi hover */
        }
        .apexcharts-xaxis-text,
        .apexcharts-yaxis-text,
        .apexcharts-datalabel,
        .apexcharts-legend-text {
            fill: #000 !important; /* Thiết lập màu chữ cho nhãn và các số liệu */
            font-size: 10px;
        }
        /* CSS để style ô tìm kiếm */
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
        .container {
            width: 75%;
            margin-left: 300px;
           
        }
        .container table {
            width: 100%;
            border-collapse: collapse;
        }
        .container table, th, td {
            border: 1px solid #ccc;
        }
        .container th, td {
            padding: 10px;
            text-align: left;
        }
        .container th {
            background-color: #007bff;
            color:white;
        }
        .container form {
            margin-bottom: 20px;
        }
        .container input[type=text], textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .container input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container input[type=submit]:hover {
            background-color: #45a049;
        }
         .add-button a{
            width: 150px;
            text-decoration: none;
            display: block;
            padding: 8px 12px;
            font-size: 20px;
            font-weight: bold;
            margin-left: 850px;
            margin-top: 20px;
            transition: background-color 0.3s, color 0.3s;
        }
        .add-button a:hover{
            
            color: #007bff; /* Màu chữ khi hover */
            border-radius: 5px; 
        }
        .container .trangchu {
            width: 100px;
            text-decoration: none;
            display: block;
            padding: 8px 12px;
            font-size: 20px;
            font-weight: bold;
            margin-left: -10px;
            margin-top: 20px;
            transition: background-color 0.3s, color 0.3s;
        }
        .container .trangchu:hover{
            background-color: #3498db; /* Màu nền khi hover */
            color: #fff; /* Màu chữ khi hover */
            border-radius: 5px; 
        }
        .container td a {
        display: inline-block;
        padding: 6px 10px;
        text-decoration: none;
        color: #fff;
        background-color: #28a745; /* Màu nền xanh */
        border-radius: 5px;
        margin-top: 5px;
        transition: background-color 0.3s, color 0.3s;
    }
    .container td a:hover {
        background-color: #007bff; /* Màu nền xanh nhạt khi hover */
        color: #fff; /* Màu chữ khi hover */
    }
    .container td .xoa{
        background-color: #d9534f;
    }
    </style>
</head>
<body>
    <header>
            <div class="header_img">
                <img src="../../images/header1.jpg" alt="">
            </div>
        <div class="header-links">
            
                <h2>TRANG QUẢN TRỊ</h2>
                <div class="header-links2">
                    <form action="#" method="GET">
                        <input style='margin-right : 20px;' type="text" id="searchInput" name="keyword" placeholder="Tìm kiếm...">
                        <button type="submit" id="searchButton" >Tìm</button>
                    </form>
                    <a href="#"><i class="fa-solid fa-user" style='margin-right : 10px'></i> Admin</a>
                </div>
                
            </div>
    </header>

    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">Bảo trì danh mục sản phẩm</a></li>
            <li><a href="#">Bảo trì danh mục bài viết</a></li>
            <li><a href="#">Bảo trì tác giả</a></li>
            <li><a href="#">Bảo trì sản phẩm</a></li>
            <li><a href="Manage_articles_page.php">Bảo trì bài viết</a></li>
            <li><a href="#">Quản lý đơn hàng</a></li>
            <li><a href="#">Quản lý tài khoản</a></li>
            <!-- Thêm các mục menu khác cần thiết -->
        </ul>
    </div>

    <div class="container" id="content">
    <a href="../MANAGE_INDEX/Manage_index_page.php" class="trangchu">Trang chủ</a>
    <h2 style='margin-left:400px;margin-top:-40px; font-size:30px; color:#007bff'>Quản lý bài viết</h2>
        
       
        
        <!-- Danh sách các bài viết -->
      
        <table>
        <div class="add-button">
            <a href="Manage_articles_insert_page.php">Thêm bài viết</a>
        </div>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên bài viết</th>
                    <th>Tóm tắt</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Lấy danh sách bài viết từ database và hiển thị
                    include '../../conn_db.php';
                    require_once 'Manage_articles_functions.php'; // Sử dụng file hàm xử lý

                    // Hiển thị danh sách bài viết
                    $articles = getAllArticles();
                    foreach ($articles as $article) {
                        echo '<tr>';
                        echo '<td>' . $article['id'] . '</td>';
                        echo '<td>' . $article['name'] . '</td>';
                        echo '<td>' . $article['summary'] . '</td>';
                        echo '<td>' . ($article['status'] == 1 ? 'Hiển thị' : 'Ẩn') . '</td>';
                        echo '<td><a href="Manage_articles_update_page.php?id=' . $article['id'] . '">Sửa</a> <a class="xoa" name="xoa" href="javascript:void(0);" onclick="confirmDelete(' . $article['id'] . ');">Xóa</a></td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>

    <footer>
        <p>&copy; 2024 Admin Panel. All rights reserved.</p>
    </footer>
    <script>
    // Function để hiển thị hộp thoại xác nhận xóa
    function confirmDelete(id) {
        if (confirm("Bạn có chắc chắn muốn xóa bài viết này?")) {
            // Nếu người dùng xác nhận xóa, chuyển hướng đến trang xử lý xóa
            window.location.href = 'Manage_articles_functions.php?id=' + id;
           
        } else {
            // Nếu người dùng không xác nhận xóa, không làm gì cả
            return false;
        }
    }
</script>
   
</body>
</html>
