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
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 75%;
            margin-left: 300px;
        }

        .table_content{
            max-height: 80vh;
            overflow-y: auto;
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
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .add-button a:hover{
            background-color: #0056b3;
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
    <?php include "../Admin_dashboard/Header_Sidebar.php"?>
    <div class="container" id="content">
        <h2 style='margin-left:400px; font-size:30px; color:#007bff'>Quản lý bài viết</h2>  
            <!-- Danh sách các bài viết -->
        <div class="add-button">
            <a href="Manage_articles_insert_page.php">Thêm bài viết</a>
        </div>
        <div class="table_content">
            <table>
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
    </div>

    <?php include "../Admin_dashboard/Footer.php"?>
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
