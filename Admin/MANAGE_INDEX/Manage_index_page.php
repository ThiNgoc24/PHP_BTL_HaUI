<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Trang quản trị</title>
    <!-- Thư viện ApexCharts để vẽ biểu đồ -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
        /* CSS để style biểu đồ */
        #chart {
            max-width: 800px;
            margin-left: 400px;
            
        }
        /*  */
        .abovechart {
            max-width: 800px;
            margin-left: 400px;
        }
        .abovechart a {
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
        .abovechart a:hover {
            background-color: #3498db; /* Màu nền khi hover */
            color: #fff; /* Màu chữ khi hover */
            border-radius: 5px; 
        }

        /* CSS cho phần header và footer */
        header {
            margin-top: -10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            clear: both;
        }
        footer {
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
            min-height: 100vh;
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
            <li><a href="../MANAGE_ARTICLES/Manage_articles_page.php">Bảo trì bài viết</a></li>
            <li><a href="#">Quản lý đơn hàng</a></li>
            <li><a href="#">Quản lý tài khoản</a></li>
            <!-- Thêm các mục menu khác cần thiết -->
        </ul>
    </div>
        <div class="abovechart">
            <a href="Manage_index_page.php">Trang chủ</a>
            <h1 style='margin-left:250px; font-size:30px; color:#007bff'>Doanh thu các sản phẩm</h1>
        </div>
    <div id="chart">
        
    </div>

    <footer>
        <p>&copy; 2024 Admin Panel. All rights reserved.</p>
    </footer>

    <?php
    include 'Manage_index_functions.php';

    // Lấy dữ liệu về sản phẩm bán chạy nhất và doanh thu
    $productsData = getBestSellingProducts();

    // Chuyển đổi dữ liệu sang JSON để sử dụng trong biểu đồ
    $labels = [];
    $totalQuantities = [];
    $totalRevenues = [];

    foreach ($productsData as $product) {
        $labels[] = $product['productName'];
        $totalQuantities[] = (int) $product['totalQuantity'];
        $totalRevenues[] = (float) $product['totalRevenue'];
    }

    $chartData = [
        'labels' => $labels,
        'totalQuantities' => $totalQuantities,
        'totalRevenues' => $totalRevenues
    ];

    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Lưu trữ vị trí ban đầu của #chart khi tải trang
        var chartElement = document.querySelector("#chart");
        var chartDefaultPosition = chartElement.getBoundingClientRect().top + window.pageYOffset;

        // Lưu trữ chiều cao của #chart để restore sau khi render lại
        var chartHeight = chartElement.clientHeight;

            // Tạo biểu đồ ApexCharts
            var options = {
                chart: {
                    type: 'bar',
                    height: 420,
                    stacked: true
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                    },
                },
                series: [{
                    name: 'Tổng số lượng',
                    data: <?php echo json_encode($chartData['totalQuantities']); ?>
                }, {
                    name: 'Tổng doanh thu',
                    data: <?php echo json_encode($chartData['totalRevenues']); ?>
                }],
                xaxis: {
                    categories: <?php echo json_encode($chartData['labels']); ?>
                },
                fill: {
                    opacity: 1
                },
                legend: {
                    position: 'top'
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();

       
        });
    </script>
    
</body>
</html>
